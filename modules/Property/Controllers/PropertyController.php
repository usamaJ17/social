<?php
namespace Modules\Property\Controllers;

use App\Http\Controllers\Controller;
use Modules\Property\Models\Property;
use Illuminate\Http\Request;
use Modules\Location\Models\Location;
use Modules\Review\Models\Review;
use Modules\Core\Models\Attributes;
use Illuminate\Support\Facades\Auth;
use Modules\Property\Models\PropertyCategory;
use DB;

class PropertyController extends Controller
{
    protected $propertyClass;
    protected $locationClass;
    protected $propertyCategoryClass;
    protected $attributeClass;
    protected $reviewClass;
    public function __construct()
    {
        $this->propertyClass         = Property::class;
        $this->locationClass         = Location::class;
        $this->propertyCategoryClass = PropertyCategory::class;
        $this->attributeClass        = Attributes::class;
        $this->reviewClass           = Review::class;
    }

    public function callAction($method, $parameters)
    {
        if(!Property::isEnable())
        {
            return redirect('/');
        }
        return parent::callAction($method, $parameters); // TODO: Change the autogenerated stub
    }
	
	public function index(Request $request){
		
		if($request->ajax()){
			
			//  Number of hires, then completed hires, then the number of reviews, then verification, then ratings
			
			$bc_contractor = DB::table('bc_properties')
				->leftJoin('bc_projects', 'bc_properties.id', '=', 'bc_projects.property_id')
				->leftJoin('bc_locations', 'bc_properties.location_id', '=', 'bc_locations.id')
				->select(
					'bc_properties.*', 
					'bc_locations.name', 
					DB::raw('(SELECT COUNT(bc_review.id) FROM bc_review WHERE bc_review.object_id=bc_properties.id AND bc_review.object_model=\'property\' AND bc_review.deleted_at IS NULL AND bc_review.status="approved") as total_review'),
					DB::raw('(SELECT AVG(bc_review.rate_number) FROM bc_review WHERE bc_review.object_id=bc_properties.id AND bc_review.object_model=\'property\' AND bc_review.deleted_at IS NULL AND bc_review.status="approved") as sbc_total'),
					DB::raw('COUNT(bc_projects.id) as project_count'))
				->where('bc_properties.status', 'publish')
				->whereNotNull('bc_properties.title');
			
			$filter_terms = "(SELECT group_concat(bc_property_term.term_id) FROM bc_property_term WHERE bc_property_term.target_id=bc_properties.id)";
			$filter_category = "(SELECT group_concat(bc_property_category_relationships.category_id) FROM bc_property_category_relationships WHERE bc_property_category_relationships.property_id=bc_properties.id)";
			
			if( $request->has("filter_search") && !empty($request->filter_search) ){
				$bc_contractor->where('bc_properties.title', 'Like', '%' . $request->filter_search . '%');
			}
			
			if( $request->has("filter_location") && !empty($request->filter_location) ){
				$condition_arr = explode(",", $request->filter_location);
				
				$condition_arr = array_filter($condition_arr, fn($value) => !is_null($value) && $value !== '');
				
				array_walk($condition_arr, function(&$item){
					$item= "FIND_IN_SET({$item}, bc_properties.location_id)!=0";
				});
				
				if(!empty($condition_arr)){
					$condition = implode(" OR ", $condition_arr);
					$bc_contractor->whereRaw("({$condition})");
				}
			}
			
			if( $request->has("filter_category") && !empty($request->filter_category) ){
				$condition_arr = explode(",", $request->filter_category);
				
				$condition_arr = array_filter($condition_arr, fn($value) => !is_null($value) && $value !== '');
				
				array_walk($condition_arr, function(&$item) use($filter_category){
					$item= "FIND_IN_SET({$item}, {$filter_category})!=0";
				});
				
				if(!empty($condition_arr)){
					$condition = implode(" OR ", $condition_arr);
					$bc_contractor->whereRaw("({$condition})");
				}
			}
			
			if( $request->has("filter_type") && !empty($request->filter_type) ){
				$condition_arr = explode(",", $request->filter_type);
				
				$condition_arr = array_filter($condition_arr, fn($value) => !is_null($value) && $value !== '');
				
				array_walk($condition_arr, function(&$item) use($filter_terms){
					$item= "FIND_IN_SET({$item}, {$filter_terms})!=0";
				});
				
				if(!empty($condition_arr)){
					$condition = implode(" OR ", $condition_arr);
					$bc_contractor->whereRaw("({$condition})");
				}
			}
			
			if( $request->has("filter_lang") && !empty($request->filter_lang) ){
				$condition_arr = explode(",", $request->filter_lang);
				
				$condition_arr = array_filter($condition_arr, fn($value) => !is_null($value) && $value !== '');
				
				array_walk($condition_arr, function(&$item) use($filter_terms){
					$item= "FIND_IN_SET({$item}, {$filter_terms})!=0";
				});
				
				if(!empty($condition_arr)){
					$condition = implode(" OR ", $condition_arr);
					$bc_contractor->whereRaw("({$condition})");
				}
			}
			
			if( $request->has("filter_verified") && !empty($request->filter_verified) ){
				$bc_contractor->where("verified", $request->filter_verified==1 ? "Yes" : "No");
			}
			
			if( $request->has("filter_budget") && !empty($request->filter_budget) ){
				$condition_arr = explode(",", $request->filter_budget);
				
				$condition_arr = array_filter($condition_arr, fn($value) => !is_null($value) && $value !== '');
				
				array_walk($condition_arr, function(&$item) use($filter_terms){
					$item= "FIND_IN_SET({$item}, {$filter_terms})!=0";
				});
				
				if(!empty($condition_arr)){
					$condition = implode(" OR ", $condition_arr);
					$bc_contractor->whereRaw("({$condition})");
				}
			}
			
			if( $request->has("filter_sort_by") && !empty($request->filter_sort_by) ){
				
				if($request->filter_sort_by=="srh"){
					$bc_contractor->orderby('sbc_total','desc');
					$bc_contractor->orderby('total_review','desc');
				}else if($request->filter_sort_by=="srl"){
					$bc_contractor->orderby('sbc_total','asc');
					$bc_contractor->orderby('total_review','asc');
				}
				
			}else{
				$bc_contractor->orderby('bc_properties.hires','desc')
				    ->orderby('bc_properties.completed_hires','desc')
					->orderby('total_review','desc')
					->orderby('verified','desc')
					->orderby('sbc_total','desc');
			}
			
			$bc_contractor = $bc_contractor->groupBy('bc_properties.id')->paginate(15);
			
			foreach($bc_contractor as $contractor){
				//$reviewData = \Modules\Review\Models\Review::getTotalViewAndRateAvg($contractor->id, 'property');
				
				//$contractor->total_reviews = $reviewData['total_review'];
				$contractor->total_reviews = $contractor->total_review;
				$contractor->sbc_total = number_format($contractor->sbc_total, 1);
				
				$contractor_photo = explode(',', $contractor->banner_images);
				
				$photo = contractor_photo(0);
				
				$contractor_photo = array_filter($contractor_photo, fn($value) => !is_null($value) && $value !== '');
				
				if(!empty($contractor_photo)){
					$photo = contractor_photo(end($contractor_photo));
				}
				
				
				$contractor->img = $photo;
				
				$avatar = contractor_profile_icon_photo($contractor->image_id);
				
				if (!$contractor->image_id) {			
					$avatar = "https://cpworldgroup.com/wp-content/uploads/2021/01/placeholder.png";		
				}
				
				$contractor->usr_img = $avatar;
				$contractor->content = substr($contractor->content, 0, 250);
			}
			
			return $bc_contractor;
		}
		
		$bc_property_category = DB::table('bc_property_category')->where('status', 'publish')->where('icon', null)->get();

        $bc_property_type = DB::table('bc_terms')->where('attr_id', 2)->get();
        $bc_property_language = DB::table('bc_terms')->where('attr_id', 3)->get();
        $bc_property_budget = DB::table('bc_terms')->where('attr_id', 4)->get();

        $bc_property_locations = DB::table('bc_locations')->where('status', 'publish')->get();

        $i = 0;
        
		$limit_location = 15;
        if( empty(setting_item("property_location_search_style")) or setting_item("property_location_search_style") == "normal" ){
            $limit_location = 1000;
        }
		
        $data = [
            'list_location'      => $this->locationClass::where('status', 'publish')->limit($limit_location)->with(['translations'])->get()->toTree(),
            'list_category'      => $this->propertyCategoryClass::where('status', 'publish')->get()->toTree(),
            'property_min_max_price' => $this->propertyClass::getMinMaxPrice(),
            'bc_property_category'            => $bc_property_category,
            'bc_property_type'            => $bc_property_type,
            'bc_property_locations'            => $bc_property_locations,
            "blank"              => 1,
            "filter"             => $request->query('filter'),
            "seo_meta"           => $this->propertyClass::getSeoMetaForPageList()
        ];

        $data['attributes'] = $this->attributeClass::where('service', 'property')->with(['terms','translations'])->get();
		
		return view('Property::frontend.home', get_defined_vars())->with('i', (request()->input('page', 1) - 1) * 17);
	}
	
    public function index_old(Request $request){
		/*	$reviews = DB::table('bc_review')->get();
		
		echo"<pre>";
		print_r($reviews);
		exit;
	
		$routeCollection = \Route::getRoutes();

		echo "<table style='width:100%'>";
		echo "<tr>";
		echo "<td width='10%'><h4>HTTP Method</h4></td>";
		echo "<td width='10%'><h4>Route</h4></td>";
		echo "<td width='10%'><h4>Name</h4></td>";
		echo "<td width='70%'><h4>Corresponding Action</h4></td>";
		echo "</tr>";
		foreach ($routeCollection as $value) {
			echo "<tr>";
			echo "<td>" . $value->methods()[0] . "</td>";
			echo "<td>" . $value->uri() . "</td>";
			echo "<td>" . $value->getName() . "</td>";
			echo "<td>" . $value->getActionName() . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		exit;
			$routeCollection = \Illuminate\Support\Facades\Route::getRoutes();

		foreach ($routeCollection as $value) {
			if($value->uri=="email/verify"){
				echo "<pre>";
				echo $value->uri;
				print_r($value);
				exit;
			}
		}
		exit;*/
		
		
        $is_ajax = $request->query('_ajax');
        $list = call_user_func([$this->propertyClass,'search'],$request);
        $markers = [];
        if (!empty($list)) {
            foreach ($list as $row) {
                $markers[] = [
                    "id"      => $row->id,
                    "title"   => $row->title,
                    "lat"     => (float)$row->map_lat,
                    "lng"     => (float)$row->map_lng,
                    "gallery" => $row->getGallery(true),
                    "infobox" => view('Property::frontend.layouts.search.loop.loop-gird', ['row' => $row,'disable_lazyload'=>1,'wrap_class'=>'infobox-item'])->render(),
                    'marker'  => url('images/icons/png/pin.png'),
                ];
            }
        }
        $limit_location = 15;
        if( empty(setting_item("property_location_search_style")) or setting_item("property_location_search_style") == "normal" ){
            $limit_location = 1000;
        }

        $search = $request->query();

        // dd($search);
        $query = Property::where("bc_properties.status","publish");
        
		
		if (!empty($search)) {

			
            if ($request->all && $request->all != 0) {
				$query->where('bc_properties.title', 'Like', '%' . $request->all . '%');
            }

            if ($request->ch_location && $request->ch_location != 0) {
				$query->where('bc_properties.location_id', 'Like', '%' . $request->ch_location . '%');
            }

            if ($request->verified && $request->verified != 0) {
				$query->where('bc_properties.verified', 'Like', '%' . $request->verified . '%');
            }

			if ($request->ch_language && $request->ch_language != 0) {
				$query->where('bc_property_term.term_id', $request->ch_language);
				$query->join('bc_property_term', 'bc_properties.id', '=' ,'bc_property_term.target_id');
            }
			
            if ($request->ch_type && $request->ch_type != 0) {
				$query->where('bc_property_term.term_id', $request->ch_type);
				$query->join('bc_property_term', 'bc_properties.id', '=' ,'bc_property_term.target_id');
            }
            
            if ($request->ch_budget && $request->ch_budget != 0) {
				$query->where('bc_property_term.term_id', $request->ch_budget);
				$query->join('bc_property_term', 'bc_properties.id', '=' ,'bc_property_term.target_id');
            }

            if ($request->ch_category && $request->ch_category != 0) {
				$query->where('bc_property_category_relationships.category_id', 'Like', '%' . $request->ch_category . '%');
				$query->join('bc_property_category_relationships', 'bc_properties.id','=','bc_property_category_relationships.property_id');
            }

			if ($request->ch_sort && $request->ch_sort != 0 && $request->ch_sort == 'Highest') {
				$query->orderBy('bc_properties.review_score','desc');
			}

            if ($request->ch_sort && $request->ch_sort != 0 && $request->ch_sort == 'Lowest') {
				$query->orderBy('bc_properties.review_score','asc');
            }
			
			$bc_contractor = $query->latest('bc_properties.created_at')->whereNotNull('bc_properties.title')->paginate(17);
        
		}else{
            
			/*$bc_contractor = Property::where('status', 'publish')->whereNotNull('title')->latest()->paginate(17); */
			
			$bc_contractor = DB::table('bc_properties')
			
			->leftJoin('bc_review', 'bc_properties.id', '=', 'bc_review.object_id')
			->leftJoin('bc_projects', 'bc_properties.id', '=', 'bc_projects.property_id')
			->leftJoin('bc_locations', 'bc_properties.location_id', '=', 'bc_locations.id')
			->select(
				'bc_properties.*', 
				'bc_locations.name', 
				DB::raw('COUNT(bc_review.id) as reviews_count'),
				DB::raw('COUNT(bc_projects.id) as project_count'))
			->where('bc_properties.status', 'publish')
			->whereNull('bc_review.deleted_at')
			->whereNotNull('bc_properties.title')
			->groupBy('bc_properties.id')
			->orderby('bc_properties.hires','desc')
			->orderby('reviews_count','desc')
			->orderby('project_count','desc')
			->paginate(17);
		}
		
        // dd($search);
		//location
		//     if ($request->ch_location && $request->ch_location != 0) {
		//         $bc_contractor = Property::where('status', 'publish')
		//         ->where('bc_properties.location_id', 'Like', '%' . $request->ch_location . '%')
		//         ->latest('bc_properties.created_at')->paginate(5);
		//     }

		// //verified
		//     elseif ($request->verified && $request->verified != 0) {
		//         $bc_contractor = Property::where('status', 'publish')
		//         ->where('bc_properties.verified', 'Like', '%' . $request->verified . '%')
		//         ->latest()->paginate(5);
		//     }

		// //type
		//     elseif ($request->ch_type && $request->ch_type != 0) {
		//         $bc_contractor = Property::where('bc_properties.status', 'publish')
		//         // ->where('bc_property_term.target_id',53)
		//         ->where('bc_property_term.term_id', $request->ch_type)
		//         ->join('bc_property_term', 'bc_properties.id', '=' ,'bc_property_term.target_id')
		//         ->latest('bc_properties.created_at')->paginate(5);
		//     }

		// //category
		//     elseif ($request->ch_category && $request->ch_category != 0) {
		//         $bc_contractor = Property::where('status', 'publish')
		//         ->where('bc_property_category_relationships.category_id', 'Like', '%' . $request->ch_category . '%')
		//         ->join('bc_property_category_relationships', 'bc_properties.id','=','bc_property_category_relationships.property_id')
		//         ->latest('bc_properties.created_at')->paginate(5);
		//     } 

		// //all
		//     else{
				
		//         $bc_contractor = Property::where('status', 'publish')->latest()->paginate(5);
		//     }
		
        $bc_property_category = DB::table('bc_property_category')->where('status', 'publish')->where('icon', null)->get();

        $bc_property_type = DB::table('bc_terms')->where('attr_id', 2)->get();
        $bc_property_language = DB::table('bc_terms')->where('attr_id', 3)->get();
        $bc_property_budget = DB::table('bc_terms')->where('attr_id', 4)->get();

        $bc_property_locations = DB::table('bc_locations')->where('status', 'publish')->get();

        $i = 0;
        $total_page = $bc_contractor->total();
        $res_from =  $bc_contractor->firstItem();
        $res_to =  $bc_contractor->lastItem();
        
        $data = [
            'rows'               => $list,
            'list_location'      => $this->locationClass::where('status', 'publish')->limit($limit_location)->with(['translations'])->get()->toTree(),
            'list_category'      => $this->propertyCategoryClass::where('status', 'publish')->get()->toTree(),
            'property_min_max_price' => $this->propertyClass::getMinMaxPrice(),
            'markers'            => $markers,
            'bc_property_category'            => $bc_property_category,
            'bc_property_type'            => $bc_property_type,
            'bc_property_locations'            => $bc_property_locations,
            "blank"              => 1,
            "filter"             => $request->query('filter'),
            "seo_meta"           => $this->propertyClass::getSeoMetaForPageList()
        ];

        if ($is_ajax) {
            return $this->sendSuccess([
                'html'    => view('Property::frontend.layouts.search-map.list-item', $data)->render(),
                "markers" => $data['markers']
            ]);
        }
        $data['attributes'] = $this->attributeClass::where('service', 'property')->with(['terms','translations'])->get();

        $layout = $request->input('_layout') ? $request->input('_layout') : setting_item("property_page_search_layout", 1);

        switch ($layout){
            case 'map1':
                return view('Property::frontend.search-map', $data);
                break;
            case 'half_map_right':
                return view('Property::frontend.search-half-map-right', $data);
                break;
            case 'v5':
                $data['view'] = 'Property::frontend.layouts.search.list-item-v5';
                break;
            default:
                $data['view'] = 'Property::frontend.layouts.search.list-item-v1';
		}

        // return view('Property::frontend.search', $data);
        return view('Property::frontend.home-old', get_defined_vars())->with('i', (request()->input('page', 1) - 1) * 17);
    }

    public function detail(Request $request, $slug)
    {
		
		$layout_id = $request->input('layout') ? $request->input('layout') : setting_item("property_page_single_layout", 1);
        $limit_location = 15;
        if( empty(setting_item("property_location_search_style")) or setting_item("property_location_search_style") == "normal" ){
            $limit_location = 1000;
        }
		
        $row = $this->propertyClass::where('slug', $slug)->with(['location','translations','hasWishList', 'user'])->first();
		
		if ( empty($row) or !$row->hasPermissionDetailView()) {
            return redirect('/');
        }
        $translation = $row->translateOrOrigin(app()->getLocale());
        $property_related = [];
        $location_id = $row->location_id;
        if (!empty($location_id)) {
            $property_related = $this->propertyClass::where('location_id', $location_id)->where("status", "publish")->take(4)->whereNotIn('id', [$row->id])->with(['location','translations','hasWishList'])->get();
        }
       
		$review_list = Review::where('object_id', $row->id)->where('object_model', 'property')->where("status", "approved")->orderBy("id", "desc")->with('author')->paginate(setting_item('property_review_number_per_page', 5));
        
		$row->view = $row->view + 1;
        $row->save();

        //analytics added function
        $viewer_id = Auth::id();
        $user_ip = \Request::ip();
        $date = date('Y-m-d');
        $view_data_arr = array(
            'view'=>1,
            'ch_id'=>$row->id,
            'ip'=>$user_ip,
            'date'=>$date,
            'viewer_id'=>$viewer_id,
        );
        $analytics = DB::table('analytics')->where('ch_id',$row->id)->where('ip',$user_ip)->where('viewer_id',$viewer_id)->where('date',$date)->first();
        if (empty($analytics)) {
            //analytics added
            DB::table('analytics')->insert($view_data_arr);
        }else{
			/*DB::table('analytics')->where("id", $analytics->id)->update(array(
				'view'=>$analytics->view+1
			));*/
		}

        $ch_location = DB::table('bc_locations')->where('id',$row->location_id)->first();
        $ch_projects = DB::table('bc_projects')->where('property_id', $row->id)->get();
		
		$ch_category = DB::table('bc_property_category_relationships')->where('property_id',$row->id)->pluck('category_id');
		
		$arr = [];
	
		if(!empty($ch_category)){
			foreach($ch_category as $val){
				$ch_category_name = DB::table('bc_property_category')->where('id',$val)->first();
				array_push($arr,$ch_category_name->name);
			}
			$cat_arr = implode(", ",$arr);
		}
		
		if (isset($_GET['project'])) {
            $project_id = $_GET['project'];
            $project_details = DB::table('bc_projects')->where('id', $project_id)->first();
			
        }else{
            
			$ch_projects_arr = json_decode( json_encode( $ch_projects ), true);
			$ch_projects_arr = array_column($ch_projects_arr, "project_cost");
			$ch_projects_arr = implode(", ", $ch_projects_arr);
			
			
			$project_terms = $row->terms->pluck('term_id')->toArray();
			$x = $this->attributeClass::where('service', 'property')->with(['terms','translations'])->where("id", 4)->first();//->toArray();
			$x = $x->terms->toArray();
			$x = array_filter($x, function($v) use($project_terms){
				return in_array($v["id"], $project_terms);
			});
			$x = array_column($x, "name");
			$x = implode(", ", $x);
			
			
			$ch_projects_arr = ["project_cost"=>$x];
			$ch_projects_arr = json_decode( json_encode( $ch_projects_arr ), false);
			$project_details = $ch_projects_arr;
        }
		
		
		
        $data = [
            'ch_projects'  => $ch_projects,
            'project_details'  => $project_details,
            'row'               => $row,
            'translation'       => $translation,
            'property_related'  => $property_related,
            'booking_data'      => $row->getBookingData(),
            'list_location'     => $this->locationClass::where('status', 'publish')->limit($limit_location)->with(['translations'])->get()->toTree(),
            'list_category'     => $project_details,
            'property_min_max_price' => $this->propertyClass::getMinMaxPrice(),
            'review_list'       => $review_list,
            'seo_meta'          => $row->getSeoMetaWithTranslation(app()->getLocale(),$translation),
            'body_class'        =>'is_single',
			'location' => isset($ch_location->name) ? $ch_location->name : '',
			'category_name' => isset($cat_arr) ? $cat_arr : '',
        ]; 
		
        $this->setActiveMenu($row);
		
		$blade = 'Property::frontend.detail';
        if($layout_id == 1) {
            $blade = 'Property::frontend.detail';
        } elseif($layout_id == 2) {
            $blade = 'Property::frontend.detail_v2';
        } elseif($layout_id == 3) {
            $blade = 'Property::frontend.detail_v3';
        }
		return view($blade, $data);
    }
    public function searchForSelect2( Request $request ){
        $search = $request->query('q');
        $query = Property::where("bc_properties.status","publish");
        if ($search) {
            $query->where('bc_properties.title', 'like', '%' . $search . '%');

            if( setting_item('site_enable_multi_lang') && setting_item('site_locale') != app()->getLocale() ){

                $query->orWhere(function($query) use ($search) {
                    $query->where('bc_property_translations.name', 'LIKE', '%' . $search . '%');
                });
            }
        }
        $res = $query->orderBy('title', 'asc')->limit(20)->get();
        if(!empty($res) and count($res)){
            $list_json = [];
            foreach ($res as $value) {
                $translate = $value->translateOrOrigin(app()->getLocale());
                $list_json[] = [
                    'id' => $value->id,
                    'text' => $translate->title,
                    'href' => $value->getDetailUrl(),
                    'html'=>'<div class="property_city_home6 tac-xsd">
					<div class="thumb">
                        <a href="'.$value->getDetailUrl().'">
                            <img class="w100" src="'.$value->image_url.'" alt="Miami">
                        </a>
                    </div>
					<div class="details">
                        <a href="'.$value->location->getDetailUrl().'">
                            <h4>'.$translate->title.'</h4>
                            <p>'.$value->location->name.'</p>
                        </a>
                    </div>
				</div>'
                ];
            }			
			return response()->json(['results'=>$list_json]);
        }
        return response()->json(['results'=>[],'message'=>__("Not found")]);
    }

}