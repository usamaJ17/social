<?php
namespace App\Http\Controllers;

use App\User;
use Modules\Page\Models\Page;
use Modules\News\Models\NewsCategory;
use Modules\News\Models\Tag;
use Modules\News\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		//$bc_contractor = DB::table('bc_properties')->orderby('id','desc')->where('status', 'publish')->paginate();
		//$count = DB::table('bc_properties')->orderby('id','desc')->where('status', 'publish')->count();
		// dd(count($bc_contractor));
        $i = 0;
        $total_page = $count;
        
        if (count($bc_contractor) < 5) {
            $current_pages =  5 * $bc_contractor->currentPage() - count($bc_contractor)-1;
        }else{
            $current_pages =  5 * $bc_contractor->currentPage();
        }
		return view('home.home' , get_defined_vars())->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function contractor_property(Request $request) {
        exit;
	
		$bc_contractor = DB::table('bc_properties')->orderby('id','desc')->where('status', 'publish')->paginate(5);

        $count = DB::table('bc_properties')->orderby('id','desc')->where('status', 'publish')->count();

// dd(count($bc_contractor));
        $i = 0;
        $total_page = $count;
        
        if (count($bc_contractor) < 5) {
            $current_pages =  5 * $bc_contractor->currentPage() - count($bc_contractor)-1;
        }else{
            $current_pages =  5 * $bc_contractor->currentPage();
        }

        return view('home.contractor_property' , get_defined_vars())->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function checkConnectDatabase(Request $request){
        $connection = $request->input('database_connection');
        config([
            'database' => [
                'default' => $connection."_check",
                'connections' => [
                    $connection."_check" => [
                        'driver' => $connection,
                        'host' => $request->input('database_hostname'),
                        'port' => $request->input('database_port'),
                        'database' => $request->input('database_name'),
                        'username' => $request->input('database_username'),
                        'password' => $request->input('database_password'),
                    ],
                ],
            ],
        ]);
        try {
            DB::connection()->getPdo();
            $check = DB::table('information_schema.tables')->where("table_schema","performance_schema")->get();
            if(empty($check) and $check->count() == 0){
                return $this->sendSuccess(false , __("Access denied for user!. Please check your configuration."));
            }
            if(DB::connection()->getDatabaseName()){
                return $this->sendSuccess(false , __("Yes! Successfully connected to the DB: ".DB::connection()->getDatabaseName()));
            }else{
                return $this->sendSuccess(false , __("Could not find the database. Please check your configuration."));
            }
        } catch (\Exception $e) {
            return $this->sendError( $e->getMessage() );
        }
    }
}
