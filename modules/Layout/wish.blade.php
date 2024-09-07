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
	<link href="{{ asset("libs/daterange/daterangepicker.css") }}" rel="stylesheet">
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
	<link href="{{ asset('dist/frontend/contrafinder/googlemap.css')}}" rel="stylesheet">
	
	<link href="{{ asset('dist/frontend/css/app.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
	<link href="{{ asset('dist/frontend/contrafinder/style.css') }}" rel="stylesheet">
	<link href="{{ asset('dist/frontend/contrafinder/dashbord_navitaion.css') }}" rel="stylesheet">
	<link href="{{ asset('dist/frontend/contrafinder/responsive.css') }}" rel="stylesheet">

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

</style>

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

@if (!empty(request()->segment(3)) && request()->segment(3) == 'add-project' || request()->segment(3) == 'edit-project' || request()->segment(3) == 'analytics' || request()->segment(3) == 'reviews' && request()->segment(2) == 'wishlist')

@elseif (!empty(request()->segment(2)) && request()->segment(2) == 'wishlist')

@else
    <form class="abc" action="{{route('property.vendor.store',['id'=>($row->id) ? $row->id : '-1','lang'=>request()->query('lang')])}}" method="post">
@endif

@csrf

<section  style="padding-top: 0px;">
    <div class="container">
        <div class="row" style="margin-top: 50px;" >
            <div class="col-md-12">
                @yield('content')
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
                 
      <h2>Request Review</h2>
      <p></p>
      <div class="form-group">
            <label for="email">To</label>
            <input type="email" class="form-control" id="email">
          </div>
             <div class="form-group">
            <label for="email">Message</label>
            <textarea rows="8" class="form-control" id="email"></textarea>
          </div>
          
          <br>
          <a href="projects" style="width: 60%;
    padding: 15px;" class="btn btn-log btn-block btn-thm form-submit">Send Request</a>
    
                 
             </div> 
             <div class="col-md-6">
                 <b>Email Preview</b>
                 <div style="background: #80808012;
    padding: 30px;
    border-radius: 0px;
    border: 1px solid #8080804a;" >
                     <h4>Request Review</h4>
                     <hr>
                     <p>W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.
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
</body>
</html>








