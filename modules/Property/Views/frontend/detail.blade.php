@extends('layouts.app')
@section('head')
@endsection
@section('content')
@php
if(setting_item('property_enable_review')){
$reviewData = Modules\Review\Models\Review::getTotalViewAndRateAvg($row->id, 'property');

$review_meta = Modules\Review\Models\Review::getReviewMetaAvg($row->id, 'property');
}
@endphp

<style>



.profile-menus {
list-style-type: none;
margin: 0;
padding: 0;
line-height: 2.5;
}
.profile-menus li {
display: inline;
padding-right: 30px;
}
.profile-menus li >a {
display: inline;

font-size: 16px;
text-decoration: none;
color: grey;
font-weight: 700;
}

.has-error .help-block .list-unstyled li{			
		color: red;		
	   }				
	   .form-group.has-error input,		
	   .form-group.has-error textarea{			
			border-color: red;		
	   }

</style>
<section id="about-section" class="our-agent-single pb30-991">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<div class="row">
					<div class="col-lg-12">
						@include('Property::frontend.layouts.details.property-banner', ['reviewData' => $reviewData])
					</div>
				</div>
				<?php
						$link = $_SERVER["REQUEST_URI"];
						$link_array = explode('/',$link);
						
						$link_array = end($link_array);
						
					   $l = explode('?',$link_array);
				?>
				
				
				<div class="row" style="margin-top: 27px;border-bottom: 1px solid #80808036;padding-bottom: 2px;" >
					<div class="col-md-12">
						
						<ul class="profile-menus mbl-manu">
							<li><a href="https://contrafinder.com/contractor/<?=$l[0]?>#about-section" <?php if(!isset($_GET['project'])) {  ?> style="border-bottom: 3px solid #30c21c;padding-bottom: 5px;" <?php } ?>>About us</a></li>
							<li><a href="https://contrafinder.com/contractor/<?=$l[0]?>#projects-section"  	<?php if(isset($_GET['project'])) {  ?> style="border-bottom: 3px solid #30c21c;padding-bottom: 5px;" <?php } ?>   >Projects</a></li>
							<li><a href="https://contrafinder.com/contractor/<?=$l[0]?>#reviews-section">Reviews</a></li>
						{{--	<li class="list-inline-item"><a href="#" 
                     onclick="share_link()"><i class="fa fa-share-alt"></i> Share &nbsp;&nbsp;&nbsp;</a></li>
                     @if (check_user_type() == 'customer')
                    <li class="list-inline-item">
                        <a href="" class="service-wishlist {{$row->isWishList()}}" data-id="{{$row->id}}" data-type="{{$row->type}}">
                            <i class="fa fa-heart-o"></i> Save
                        </a>
                </li>
                @endif --}}
						</div>
					</ul>
					
				</div>
				
				
				@if(!isset($_GET['project']))
				<div class="row">
					<div class="col-lg-12  pl15-767 pr15-767">
						<div class="listing_single_description mb60">
							<br>
							<div class="overview" style="height:80px;overflow:hidden;">
								{!! clean($row->content) !!}
								<br><br>
								@if(!empty($category_name))
								<div class="col-lg-12">
									<div class="additional_details mb30">
										<div class="row">
											<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
												<h5 class="mb10 spec-cat"><b>Specialization Category</b></h5>
											</div>
											{{$category_name}}																			  
										</div>
									</div>
								</div>
								@endif
								@include('Property::frontend.layouts.details.property_features')
							</div>
							
							<a style="color:#30c21c;font-size:14px;font-weight: 700;cursor: pointer;" id="readmore" > Read More  <i style="font-size: 15px;" class="fa fa-angle-down"></i>  </a>
							<a style="color:#30c21c; display:none;font-size: 14px;font-weight: 700;cursor: pointer;" id="readless" > Read Less <i style="font-size: 15px;" class="fa fa-angle-up"></i> </a>
							
						</div>
					</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
					<script>
					   $("#readmore").click(function(){
					    
					   $(".overview").css({"height":"auto" , "overflow":"hidden"});
					   
					   $("#readless").show();
					   $("#readmore").hide();
					   
                       });
                       
                       $("#readless").click(function(){
					    
					   $(".overview").css({"height":"80px" , "overflow":"hidden"});
					   $("#readless").hide();
					   $("#readmore").show();
					   });
                    </script>
					
				
					
					
					<div id="projects-section" class="row" style="width:100%; padding:10px;">
					   <hr width="100%" size="1" align="center">
					    <div class="col-md-12"><h2>Projects <small style="font-size: 16px;">({{count($ch_projects)}})</small> </h2></div>
						@if (count($ch_projects) > 0)
						@foreach ($ch_projects as $ch_pro)
						<?php 
						$photo = project_oneImg(0);
						$project_photo = explode(',', $ch_pro->project_photos);
						foreach ($project_photo as $imgkey => $img_value) {
						if (!empty($img_value)) {
						   
						$photo = project_oneImg($img_value);
						
						}
						}
						?>
						<div class="col-md-6">
							<a href="{{ url('contractor/'.$row->slug) }}?project={{$ch_pro->id}}" data-toggle="tooltip" title="{{$ch_pro->project_name}}">
								<div class="project-block" style="box-shadow: rgb(0 0 0 / 10%) 0px 2px 12px;border-radius: 0px 0px 5px 5px;box-shadow: rgb(0 0 0 / 10%) 0px 2px 12px;border-radius: 0px 0px 5px 5px;margin-top: 22px;">
									<img src="{{$photo}}" style="height:250px;width: 100%;border-radius: 5px 5px 0px 0px;" />
									<span style="background: #000000ab; color: #fff;padding: 7px 10px; border-radius: 16px; position: relative; top: -44px; left: 9px;"><i class="fa fa-image" ></i>&nbsp; {{count($project_photo)-1}}</span>
									<div class="project-info" style="padding: 20px;padding-top: 0px;">
										<h5 style="font-weight: 800;color: #30c21c;">{{substr($ch_pro->project_name, 0, 35)}} </h5>
										<p style="font-size:13px;"><i class="flaticon-pin mr5" ></i>{{$ch_pro->project_location}}</p>
									</div>
								</div>
							</a>
						</div>
						@endforeach
						@endif
					</div>
					
					@endif
					
					@if(isset($_GET['project']))
					<div class="row project">
						<div class="col-md-12">
							<br><br>
							<h3>{{$project_details->project_name}}</h3>
							<h5 style="color: #30c21c;"><i class="fa fa-map-marker"></i> {{$project_details->project_location}}</h5>
							<br>
							<p style="color:#000;"> 
								<b style="color: #000000c4;">Project Year:</b> {{$project_details->completion_year}}<br>
								<!--<b style="color: #000000c4;">Project Completion Cost: </b> {{$project_details->project_cost}}<br>-->
									<b style="color: #000000c4;">Project Completion Cost: </b> {{str_replace("_", " ", $project_details->project_cost)}} <br>
								<b style="color: #000000c4;">Category: </b> {{str_replace("_", " ", $project_details->category);}}  <br>
								<b style="color: #000000c4;">Type: </b> {{str_replace("_", " ", $project_details->type);}} <br>
							
							</p>
						</div>
					</div>
					@include('Property::frontend.layouts.details.project_gallery_property')
					@endif
					@if(!isset($_GET['project']))
					@if(setting_item('property_enable_review'))
					<div ></div>
					<div id="reviews-section" class="row" style="width:100%;margin-top:5%;">
						<hr width="96%" size="1" align="center">
						@include('Review::frontend.list-review', ['review_service_id' => $row['id'], 'review_service_type' => 'property', 'reviewData' => $reviewData])
					</div>
					@endif
				</div>
				@endif
				
			</div>
			<div class="col-lg-4 col-xl-4">
				<div class="listing_single_sidebar">

				{{--@if (check_user_type() == 'administrator')
					<div class="sidebar_contact_business_widget">
						<h4>Admin Actions</h4>
						<div >
							<label> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Verify this contractor</label><br></br>
							<input type="submit" class="btn btn-primary" value="Submit" >
						</div>
					</div>
				@endif--}}
				
					<div class="sidebar_contact_business_widget"  >
						<h4 class="title mb25 tata">Contact {{$row->title}}</h4>
						<form data-ajax="user/profile/send_chmsg" data-target-button=".btn-send-msg" data-allow-success="true" method="POST">
							@csrf
							<ul class="business_contact mb0">
								<li class="search_area">
									<div class="form-group">
									    	<input type="hidden" name="c_slug"   value="{{$row->slug}}">
									
										<input type="text" name="name" required class="form-control" id="exampleInputName1" placeholder="{{ __("Name") }}" value="@if(Auth::id() && check_user_type() == 'customer') {{Auth::user()->name}} @endif">
										<div class="help-block with-errors"></div>
									</div>
								</li>
								<li class="search_area">
									<div class="form-group">
										<input type="email" name="email" required class="form-control" id="exampleInputEmail" placeholder="{{ __("Email") }}" value="@if(Auth::id() && check_user_type() == 'customer') {{Auth::user()->email}} @endif">
										<div class="help-block with-errors"></div>
									</div>
								</li>
								<li class="search_area">
									<div class="form-group">
										<input type="tel" name="phone" required class="form-control" id="exampleInputName2" placeholder="{{ __("Phone") }}" value="@if(Auth::id() && check_user_type() == 'customer') {{Auth::user()->phone}} @endif">
										<div class="help-block with-errors"></div>
									</div>
								</li>
								<li class="search_area">
									<div class="form-group">
										<textarea id="form_message" name="message" class="form-control" rows="5" required="required" placeholder="{{ __("Message") }}"></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</li>
								<li>
									<input type="hidden" name="to_id" value="<?=$row->create_user?>">
									<input type="hidden" name="from_id" value="{{Auth::id()}}">
								</li>
								<li>
									<div class="search_option_button">
										<div class="messages"></div>
										<button type="submit" class="btn btn-block btn-thm h55 btn-send-msg"><span class="text">{{ __("Send Message") }}</span></button>
									</div>
								</li>
							</ul>
							<div class="form-mess mt-2">
								@if ($errors->any())
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif
								@if ($message = Session::get('success'))
								<div class="alert alert-success">
									<p>{{ $message }}</p>
								</div>
								@endif
							</div>
						</form>
					</div>
					@include('Property::frontend.layouts.details.property-location')
					
					@if($row->enable_open_hours)
					<div class="sidebar_opening_hour_widget pb20" style="display:none;">
						<h4 class="title mb15">{{ __("Hours") }}
						@if($row->is_open)
						<small class="text-thm2 float-right">{{ __("Now Open") }}</small>
						@else
						<small class="text-danger float-right">{{ __("Closed") }}</small>
						@endif
						</h4>
						<ul class="list_details mb0">
							@foreach($row->open_hours as $key => $val)
							@switch($key)
							@case(1)
							@if(!empty($val['enable']))
							<li>{{ __("Monday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@case(2)
							@if(!empty($val['enable']))
							<li>{{ __("Tuesday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@case(3)
							@if(!empty($val['enable']))
							<li>{{ __("Wednesday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@case(4)
							@if(!empty($val['enable']))
							<li>{{ __("Thursday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@case(5)
							@if(!empty($val['enable']))
							<li>{{ __("Friday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@case(6)
							@if(!empty($val['enable']))
							<li>{{ __("Saturday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@case(7)
							@if(!empty($val['enable']))
							<li>{{ __("Sunday") }} <span class="float-right">{{ date('h:i a', strtotime($val['from'])) }} – {{ date('h:i a', strtotime($val['to'])) }}</span></li>
							@endif
							@break
							@endswitch
							@endforeach
						</ul>
					</div>
					@endif
					@if(!empty($row->categories) && count($row->categories) > 0)
					<div class="sidebar_category_widget" style="display:none;">
						<h4 class="title mb30">{{ __("Categories") }}</h4>
						<ul class="mb0">
							@foreach($row->categories as $key =>  $category)
							<li class="{{ (count($row->categories) - 1) != $key ? 'mb25' : '' }}"><a href="{{ $category->getDetailUrl() }}">@if($category->image_id)<img class="mr5" src="{{ \Modules\Media\Helpers\FileHelper::url($category->image_id) }}" alt="{{ $category->name }}">@endif {{ $category->name }}</a></li>
							@endforeach
						</ul>
					</div>
					@endif
					@if(!empty($row->price) or !empty($row->price_from))
					<div class="sidebar_pricing_widget" style="display:none;">
						<h4 class="title mb20">
						@if(empty($row->price))
						{{ __("Price") }}
						@else
						{{ __("Price Range") }}
						@endif
						</h4>
						<ul class="mb0">
							<li><a href="#">{{ __("Price") }}: <span class="float-right heading-color">{{ $row->display_price_single }}</span></a></li>
						</ul>
					</div>
					@endif
					@if(!empty($row->user))
					<div class="sidebar_author_widget" style="display:none;">
						<h4 class="title mb25">{{ __("Author") }}</h4>
						<div class="media">
							<a target="_blank" href="{{$row->user->profile_url}}">
								<img class="mr-3 avatar" src="{{ $row->user->getAvatarUrl() }}" alt="author.png">
							</a>
							<div class="media-body">
								<h5 class="mt15 mb0">
								<a target="_blank" href="{{$row->user->profile_url}}">{{ $row->user->getDisplayName() }}</a>
								</h5>
								<p class="mb0">{{ $row->user->job }}</p>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
{{-- include('Property::frontend.layouts.details.property-related') --}}
@endsection
@section('footer')
{!! App\Helpers\MapEngine::scripts() !!}
<script type="text/javascript" src="https://contrafinder.com/public//js/form-plugin.js"></script>
<script type="text/javascript" src="https://contrafinder.com/public//js/validator.min.js"></script>
<script>
jQuery(function ($) {
new BravoMapEngine('map-canvas', {
fitBounds: true,
center: [{{$row->map_lat ?? "51.505"}}, {{$row->map_lng ?? "-0.09"}}],
zoom:{{$row->map_zoom ?? "8"}},
ready: function (engineMap) {
				@if($row->map_lat && $row->map_lng)
engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
icon_options: {}
});
				@endif
engineMap.on('click', function (dataLatLng) {
engineMap.clearMarkers();
engineMap.addMarker(dataLatLng, {
icon_options: {}
});
$("input[name=map_lat]").attr("value", dataLatLng[0]);
$("input[name=map_lng]").attr("value", dataLatLng[1]);
});
engineMap.on('zoom_changed', function (zoom) {
$("input[name=map_zoom]").attr("value", zoom);
});
engineMap.searchBox($('.bc_searchbox'), function (dataLatLng) {
engineMap.clearMarkers();
engineMap.addMarker(dataLatLng, {
icon_options: {}
});
$("input[name=map_lat]").attr("value", dataLatLng[0]);
$("input[name=map_lng]").attr("value", dataLatLng[1]);
});
}
});
if ($(".popup-img-review").length > 0) {
$(".review_upload_photo_list").each(function () {
$(this).find('.popup-img-review').magnificPopup({
type: "image",
gallery: {
enabled: true,
}
});
});
}
})
</script>

<script>
function share_link() {
  // Get the text field
  
	var dummy = document.createElement('input'),
	text = window.location.href;

	document.body.appendChild(dummy);
	dummy.value = text;
	dummy.select();
	document.execCommand('copy');
	document.body.removeChild(dummy);
	
	alert("Contractor url copied successfully...");
}

$(document).ready(function () {
	
	if(window.location.href.split('#')[1]){
		$('html, body').animate({
			scrollTop: $('#' + window.location.href.split('#')[1] ).offset().top
		}, 'slow');
	}
	
});
</script>

@endsection