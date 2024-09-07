<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@php($favicon = setting_item('site_favicon'))
	<link rel="icon" type="image/png" href="{{!empty($favicon)?get_file_url($favicon,'full'):url('images/favicon.png')}}"/>
	@include('Layout::parts.seo-meta')

	 <link href="{{ asset('dist/frontend/contrafinder/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('libs/icofont/icofont.min.css') }}" rel="stylesheet">

    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/css/notification.css') }}" rel="newest stylesheet">

    

    <link href="{{ asset('dist/frontend/contrafinder/jquery-ui.min.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/font-awesome-animation.min.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/menu.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/ace-responsive-menu.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/megadropdown.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/bootstrap-select.min.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/simplebar.min.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/progressbar.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/flaticon.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/animate.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/slider.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/timecounter.css')}}" rel="stylesheet">

    

    <link href="{{ asset('dist/frontend/css/app.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/style.css') }}" rel="stylesheet">

    <link href="{{ asset('dist/frontend/contrafinder/responsive.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('libs/daterange/daterangepicker.css') }}" >
	<link rel="stylesheet" type="text/css" href="https://contrafinder.com/public/js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css">
	
	<!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet" type='text/css' media='all'>
	
	<script>
        var bookingCore = {
            url: '{{url( app_get_locale() )}}',
            url_root: '{{ url('') }}',
            booking_decimals:{{(int)get_current_currency('currency_no_decimal',2)}},
            thousand_separator: '{{get_current_currency('currency_thousand')}}',
            decimal_separator: '{{get_current_currency('currency_decimal')}}',
            currency_position: '{{get_current_currency('currency_format')}}',
            currency_symbol: '{{currency_symbol()}}',
            currency_rate: '{{get_current_currency('rate',1)}}',
            date_format: '{{get_moment_date_format()}}',
            map_provider: '{{setting_item('map_provider')}}',
            map_gmap_key: '{{setting_item('map_gmap_key')}}',
            routes: {
                login: '{{route('auth.login')}}',
                register: '{{route('auth.register')}}',
            },
            currentUser: {{(int)Auth::id()}},
            isAdmin: {{is_admin() ? 1 : 0}},
            rtl: {{ setting_item_with_lang('enable_rtl') ? "1" : "0" }},
            markAsRead: '{{route('core.notification.markAsRead')}}',
            markAllAsRead: '{{route('core.notification.markAllAsRead')}}',
            loadNotify: '{{route('core.notification.loadNotify')}}',
            pusher_api_key: '{{setting_item("pusher_api_key")}}',
            pusher_cluster: '{{setting_item("pusher_cluster")}}',
        };
        var i18n = {
            warning: "{{__("Warning")}}",
            success: "{{__("Success")}}",
            confirm_delete: "{{__("Do you want to delete?")}}",
            confirm: "{{__("Confirm")}}",
            cancel: "{{__("Cancel")}}",
        };
        var daterangepickerLocale = {
            "applyLabel": "{{__('Apply')}}",
            "cancelLabel": "{{__('Cancel')}}",
            "fromLabel": "{{__('From')}}",
            "toLabel": "{{__('To')}}",
            "customRangeLabel": "{{__('Custom')}}",
            "weekLabel": "{{__('W')}}",
            "first_day_of_week": {{ setting_item("site_first_day_of_the_weekin_calendar","1") }},
            "daysOfWeek": [
                "{{__('Su')}}",
                "{{__('Mo')}}",
                "{{__('Tu')}}",
                "{{__('We')}}",
                "{{__('Th')}}",
                "{{__('Fr')}}",
                "{{__('Sa')}}"
            ],
            "monthNames": [
                "{{__('January')}}",
                "{{__('February')}}",
                "{{__('March')}}",
                "{{__('April')}}",
                "{{__('May')}}",
                "{{__('June')}}",
                "{{__('July')}}",
                "{{__('August')}}",
                "{{__('September')}}",
                "{{__('October')}}",
                "{{__('November')}}",
                "{{__('December')}}"
            ],
        };
	</script>

	<style>
    .profile-v
    {
        background-image: url('https://cdn.pixabay.com/photo/2019/07/23/22/17/apartment-4358755_1280.jpg');
        height: 250px;
    }

    .profile-pic {
    background-image: url('hkttps://cdn.pixabay.com/photo/2017/11/29/09/15/paint-2985569_1280.jpg');
    width: 200px;
    height: 200px;
    border: 3px solid #efecec;
    position: relative;
    background-size: cover;
    top: 93px;
    left: 21px;
    }

    .profile-change-icon
    {
        color: #fff;
        background: #000;
        padding: 10px;
        border-radius: 58%;
        position: relative;
        left: 150px;
        border: 2px solid #fff;
        top: 15px;
    }



    .profile-menus {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

.profile-menus li {
  display: inline;
  padding-right: 30px;
}
.profile-menus li >a {
    display: inline;
    padding: 5px;
    font-size: 15px;
    text-decoration: none;
    color:#000000b8;
    
}

.list-view-menu li
{
    display:block;
    padding: 5px 0px;
}

.list-view-menu li > a {
    display: block;
    font-size: 15sspx;
    text-decoration: none;
    color: grey;
    font-weight: 400;
}

.menu-active
{
    font-weight: bold;
    border-bottom: 2px solid #30c21c;
    padding-bottom: 9px;
}

.list-view-menu li > a:active {

color:red !important;

}

.form-control
{
    width: 100%;
    height: 45px;
}


    
    .bootstrap-tagsinput 
	.tag{	
		background: #30c21c;    
		border-radius: 5px;    
		padding: 0px 5px;
	}
	
	@media only screen and (max-width: 480px) {
    .profile-menus li {
        
    padding-right: 0px !important;
  
    }
    .profile-menus li>a {
        
    padding-right: 0px !important;
  
    }
    
     .profile-pic {
      
      top:-42px !important;   
       left:0px !important;   
     }
     
     .m-menu
     {
         margin-top: -65px !important;
     }
    
    .pro-links
    {
        display:none;
    }
    
    .btn-done-editing
    {
        display:none;
    }
    
    .cdn-browser .files-list .view-grid .file-item
    {
        width:33% !important;
    }
    
}


</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="https://contrafinder.com/public/js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js"></script>
	<link href="{{ asset('dist/frontend/module/user/css/user.css') }}" rel="stylesheet">
	<!-- Styles -->
	@yield('head')
	<style type="text/css">
		.bc_topbar, .bc_header, .bc_footer {
			display: none;
		}

		html, body, .bc_wrap, .bc_user_profile,
		.bc_user_profile > .container-fluid > .row-eq-height > .col-md-3 {
			min-height: 100vh !important;
		}
	</style>
	{{--Custom Style--}}
	<link href="{{ route('core.style.customCss') }}" rel="stylesheet">
	@if(setting_item_with_lang('enable_rtl'))
		<link href="{{ asset('dist/frontend/css/rtl.css') }}" rel="stylesheet">
	@endif
</head>

<body class="user-page {{$body_class ?? ''}} @if(setting_item_with_lang('enable_rtl')) is-rtl @endif">
<div class="wrapper">
{!! setting_item('body_scripts') !!}
@if(!is_api())
	@include('Layout::parts.header')
@endif
<!-- Our Dashbord -->
	<!--<section class="extra-dashboard-menu dn-992">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-lg-12">-->
	<!--				<div class="ed_menu_list">-->
	<!--					<ul>-->
	<!--						@include('User::frontend.layouts.menu')-->
	<!--					</ul>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->

@if (!empty(request()->segment(3)) && request()->segment(3) == 'add-project' || request()->segment(3) == 'edit-project' || request()->segment(3) == 'analytics' || request()->segment(3) == 'reviews' || request()->segment(2) == 'wishlist' || request()->segment(3) == 'change-password')

@elseif (!empty(request()->segment(2)) && request()->segment(2) == 'wishlist')

@else
    <form class="abc" action="{{route('property.vendor.store',['id'=>isset($row) ? $row->id : '-1','lang'=>request()->query('lang')])}}" method="post" enctype="multipart/form-data">
@endif

@csrf

<section  style="padding-top: 0px;">	    
<div class="container " >
    <div class="row profilek-v">
        <div class="col-md-12" >
            @include('Property::frontend.layouts.details.profile_banner')
        </div>
    </div>

<div class="row" style="margin-top:-18%;">
    <div class="col-md-3">

@if (request()->segment(2) == 'wishlist')

@else
        <div class="profile-pic" >
        {!! \Modules\Media\Helpers\FileHelper::fieldUpload('image_id', isset($row) ? $row->image_id : "", "name", "profile_pic") !!}
        </div>
@endif

    </div>
    <div class="col-md-9">
        <div class="bio" >

        <h2 style="color:#fff;">{{isset($row) ? $row->title : ""}}</h2>
            <a data-toggle="modal" data-target="#myModal" style="color:#fff;font-size:16px; cursor: pointer;">Get Reviews &nbsp;<i class="fa fa-angle-right"></i></a>
            <a class="btn btn-success btn-done-editing" href="https://contrafinder.com/contractor/{{ isset($row) ? $row->slug : ""}}"><i class="fa fa-edit"></i> Done Editing</a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<?php
    $link = $_SERVER["REQUEST_URI"];
    $link_array = explode('/',$link);
    
    $link_array = end($link_array);
    
?>
 
<div class="row m-menu" style="margin-top: 44px;
    border-bottom: 1px solid #8080802e;
    padding-bottom: 23px;">
    <div class="col-md-3"></div>
    <div class="col-md-9">
        <ul class="profile-menus tab-menu">
            <li><a  <?php  if($link_array != "create") {  ?> href="{{ url('user/profile/projects') }}" <?php } ?>    <?php  if($link_array == "projects") {  ?> class="menu-active"  <?php } ?>>Projects</a></li>
            <li><a   <?php  if($link_array != "create") {  ?> href="{{ url('user/profile/message') }}" <?php } ?>  <?php  if($link_array == "message") {  ?> class="menu-active"  <?php } ?>>Messages</a></li>
            <li><a  <?php  if($link_array != "create") {  ?> href="{{ url('user/profile/reviews') }}"  <?php } ?>   <?php  if($link_array == "reviews") {  ?> class="menu-active"  <?php } ?>>Reviews</a></li>
            <li><a  <?php  if($link_array != "create") {  ?> href="{{ url('user/profile/analytics') }}" <?php } ?>  <?php  if($link_array == "analytics") {  ?> class="menu-active"  <?php } ?>>Analytics</a></li>

        </ul>

{{-- 
@if (!empty(request()->segment(2)) && request()->segment(2) == 'wishlist')

@else
        
@endif
 --}}


@if (!empty(request()->segment(3)) && request()->segment(3) != 'edit')

@endif

    </div>
</div>

<div class="container">
    <div class="row " style="margin-top: 50px;" >
        <div class="col-md-3 pro-links">
            <h5 class="acc-text acc-space"style="color:#000;padding-bottom:10px;">Account</h5>
            <ul class="profile-menus list-view-menu">
                <li ><a href="{{route('user.profile.edit',['id'=>get_bc_properties()])}}" style="color:green;font-weight:500;">Profile info</a></li>
                <li><a href="{{route('user.profile.edit',['id'=>get_bc_properties()])}}#contact">Contact info</a></li>
                <li><a href="{{ url('user/profile/change-password') }}">Change Password</a></li>
                <li><a href="{{route('user.profile.edit',['id'=>get_bc_properties()])}}#social">Social Media Setting</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

</div>
	</section>
	
	@include('Layout::parts.footer',['is_user_page'=>1])
	{!! setting_item('footer_scripts') !!}
	
</div>

<!-- get review -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Request Reviews</h3>
      </div>
      <div class="modal-body">
          <div class="row">
             <div class="col-md-6">
             
        <form action="{{ url('user/profile/askreviews') }}" method="POST">
            @csrf
              <label for="email" style="width: 100%;">To</label>
              <input name="emails" data-role="tagsinput" id="reviewemailsx" />
                <p style="font-size: 13px;
    padding-top: 5px;
    color: #ff9800;">Enter client email
addresses, separated by space</p>
            
            <div class="form-group">
                <label for="email">Message</label>
                <textarea rows="8" class="form-control" name="message" required></textarea>
            </div>
            
            <br>
            <button style="width: 60%;
            padding: 15px;" type="submit" class="btn btn-log btn-block btn-thm form-submit">Send Request</button>
        </form>
    
                 
             </div> 
             <div class="col-md-6">
                 <b>Email Preview</b>
                 <div style="background: #80808012;
    padding: 30px;
    border-radius: 0px;
    border: 1px solid #8080804a;" >
                     <h4>Request Review</h4>
                     <hr>
                     <p>“As a Fit Out professional, my business relies on
recommendations from clients. I would appreciate it if you
would write a brief review for me on Contrafinder.com, the
largest and most influential directory of fit out and interior
design professionals.<br><br>
Click this link to write your review. <br><br>
Thank in advance and let me know if you have any questions.
</p>
                 </div>
             </div> 
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>



</body>
</html>








