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
    background-image: url('https://cdn.pixabay.com/photo/2017/11/29/09/15/paint-2985569_1280.jpg');
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
    padding-right: 30px;
    font-size: 15px;
    text-decoration: none;
    color: grey;
    font-weight: 700;
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


<section  style="padding-top: 0px;">	    
<div class="container ">

@if (!empty(request()->segment(3)) && request()->segment(3) == 'add-project' || request()->segment(3) == 'edit-project' || request()->segment(3) == 'analytics' || request()->segment(3) == 'reviews')
@else
    <form class="abc" action="{{route('user.profile.update',['id'=>($dataUser['id']) ? $dataUser['id'] : '-1','lang'=>request()->query('lang')])}}" method="post">
@endif
@csrf

<style>
     <?php if(isset($_GET["first-step"])) { ?> 
     
     
     .pic-section
     {
         display:none !important;
     }
     
     header
     {
         display:none !important;
         
     }
     body
     {
         padding-top:5%;
     }
     
     <?php } ?>
    
    
    
    
    @media only screen and (max-width: 480px) {
    .brek-line
    {
        display:none;
    }
    
    
    .bio
    {
        
    }
    
    .pic-section
    {
        background:#fff !important;
        margin-top: 0% !important;
    }
    
    .profile-pic
    {
        
        top: 161px !important;
        left: 0px !important;
        
    }
   
        
    }
    
</style>

<div class="row pic-section" style="margin-top:-5%; margin-bottom: 11%;background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(48,194,28,0.5984987745098039) 61%);">
    <div class="col-md-3">
        <div class="profile-pic" >
            {!! \Modules\Media\Helpers\FileHelper::fieldUpload('avatar_id',$dataUser['avatar_id'], "name", "profile_pic") !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="bio" style="margin-top:21%;">
            <h2 style="color:#000;">
                
                {{$dataUser['name']}}
                
          
                
                </h2>
                <p >             
<svg id="Layer_1"  style="position: relative;top: -4px;" enable-background="new 0 0 1580 1580" height="20" viewBox="0 0 1580 1580" width="20" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m1368.4 1473.1h-1156.8c-13.3 0-24-10.7-24-24v-736c0-13.3 10.7-24 24-24s24 10.7 24 24v712h1108.8v-712c0-13.3 10.7-24 24-24s24 10.7 24 24v736c0 13.3-10.8 24-24 24z"/><path d="m1483.8 814.5c-16.5 0-32.4-5.5-45.6-15.9l-648.2-510-648.2 510c-32.1 25.2-78.7 19.7-103.9-12.4-12.2-15.5-17.7-34.9-15.3-54.5 2.3-19.6 12.2-37.2 27.7-49.4l724.9-570.3c8.7-6.9 21-6.9 29.7 0l724.9 570.3c32.1 25.2 37.6 71.8 12.4 103.9-12.2 15.5-29.8 25.4-49.4 27.7-3 .4-6 .6-9 .6zm-693.8-580.4c5.2 0 10.5 1.7 14.8 5.1l663.1 521.6c5.5 4.3 12.3 6.2 19.2 5.4s13.1-4.3 17.4-9.7c8.9-11.3 6.9-27.7-4.4-36.5l-710.1-558.6-710.1 558.6c-5.5 4.3-8.9 10.5-9.7 17.4s1.1 13.7 5.4 19.2c8.9 11.3 25.2 13.2 36.5 4.4l663.1-521.6c4.3-3.6 9.6-5.3 14.8-5.3z"/></g><path d="m1244.5 512.4c-13.3 0-24-10.7-24-24v-275.9h-119v144.5c0 13.3-10.7 24-24 24s-24-10.7-24-24v-168.5c0-13.3 10.7-24 24-24h167c13.3 0 24 10.7 24 24v299.9c0 13.3-10.7 24-24 24z"/><g><path d="m1104.5 1473.1h-629c-13.2 0-24-10.7-24-23.9-.1-49.9 1.9-174.5 24.5-255.1 6.1-21.9 13.6-39.8 23.5-56.4 8.4-14 32.5-49.3 75.8-73.6 40-22.5 78.4-25.9 103.5-24.7 4.7.2 9.2 1.8 13 4.6l95.5 69.7 101.1-70c3.7-2.6 8.1-4 12.6-4.2 25.1-1.2 63.5 2.2 103.5 24.7 43.3 24.4 67.5 59.6 75.8 73.6 9.9 16.6 17.4 34.5 23.5 56.4 22.6 80.6 24.7 205.3 24.5 255.1.2 13.1-10.6 23.8-23.8 23.8zm-315.3-48h291.2c-.7-52.5-4.5-153.3-22.6-218.1-5-17.9-10.7-31.7-18.5-44.7-6.4-10.7-24.9-37.7-58.2-56.4-26.8-15.1-52.5-18.7-71.1-18.8l-109.2 75.6c-8.4 5.8-19.6 5.7-27.8-.3l-103.2-75.3c-18.6.1-44.2 3.8-70.8 18.8-33.3 18.7-51.8 45.7-58.2 56.4-7.8 13-13.5 26.8-18.5 44.8-18.1 64.7-21.9 165.6-22.6 218.1z"/><g><path d="m608 1473.1c-13.3 0-24-10.7-24-24v-176.6c0-13.3 10.7-24 24-24s24 10.7 24 24v176.6c0 13.3-10.7 24-24 24z"/><path d="m972 1473.1c-13.3 0-24-10.7-24-24v-176.6c0-13.3 10.7-24 24-24s24 10.7 24 24v176.6c0 13.3-10.8 24-24 24z"/></g><g><path d="m790.9 1053c-45.5 0-88.2-19.5-120.1-54.8-31.3-34.7-48.6-80.6-48.6-129.4v-67.8c0-10.2 6.5-19.3 16.2-22.7 7.8-2.7 30.8-12.8 43.1-26.5 8.6-9.5 22.7-10.8 32.6-2.8 1.3.9 18.1 13.1 46.9 19.1 39.9 8.5 83.1 2 128.3-19.3 9.4-4.4 20.5-2.3 27.7 5.2 4.6 4.8 19.2 19 31.4 26.5 7.1 4.4 11.4 12.1 11.4 20.4v67.7c0 48.8-17.3 94.7-48.6 129.4-32.1 35.5-74.8 55-120.3 55zm-120.8-236v51.7c0 75.1 54.2 136.2 120.7 136.2s120.7-61.1 120.7-136.2v-55.1c-6.4-4.9-12.4-10-17.3-14.5-93.5 38.4-161.7 14.7-192.2-1.3-11 8.5-22.7 14.9-31.9 19.2z"/><path d="m646.2 825.1c-9.3 0-18.1-5.4-22-14.5-8.2-19-9.5-39-10.6-56.6-.9-14.4-2-32.3 2.2-50 3.7-15.7 12.8-32.2 27.8-50.5 2.3-2.8 4.8-5.6 7.3-8.3 40-42.8 105.5-59.5 118.2-62.5 24.9-5.7 48.8-7.8 71-6.1 15.6 1.2 28.9 3.4 40.5 6.7 16.9 4.7 30.1 13.9 38.3 26.6 4.1 6.3 6.4 12.5 8.5 17.9 1.6 4.1 3.1 8.1 4.6 9.8 2.6 3 6.3 6 10.5 9.3 5.1 4 10.9 8.6 16.3 14.7 12.8 14.4 27.2 38.6 29.5 63.2 2.1 23.1-6.8 42.8-14.9 57.5-.2.4-.7 1.2-1.3 2.5-13.6 26.2-16.5 30.3-20.5 33.9-9.8 8.9-25 8.3-33.9-1.5-8.3-9-8.3-22.7-.6-31.8 1.2-1.9 4.3-7.2 12.3-22.7.9-1.8 1.6-3 1.8-3.4 7.1-12.9 9.9-22.2 9.2-30.1-.9-10.2-8.3-25.3-17.6-35.7-2.6-2.9-6.1-5.7-10.1-8.9-5.5-4.3-11.7-9.3-17.4-16-6.7-8-10.1-16.6-12.7-23.5-1.4-3.6-2.7-7-4.1-9.1-2.3-3.6-7.9-5.6-11-6.5-8.6-2.4-18.9-4.1-31.3-5-17.4-1.3-36.4.3-56.6 5-28.5 6.6-70.3 23.2-93.9 48.5-1.8 1.9-3.5 3.9-5.2 5.9-12.6 15.4-16.9 25.5-18.3 31.2-2.6 10.8-1.7 24.1-1 35.9.9 14.4 1.8 29.2 6.7 40.5 5.3 12.2-.3 26.3-12.5 31.6-2.8 1.3-6.1 2-9.2 2zm273.2-41.8s0 .1 0 0z"/></g><g><path d="m703.8 1106.2c-3.4 0-6.9-.7-10.2-2.3-12-5.6-17.2-19.9-11.5-31.9 3.9-8.3 10.5-25 11-42.9.2-6.7-.6-9.3-2.2-15.1-.4-1.3-.8-2.7-1.1-4.2-3.3-12.8 4.3-25.9 17.2-29.3 12.8-3.4 25.9 4.3 29.3 17.2.3 1.2.6 2.4 1 3.5 2 7.2 4.2 15.3 3.9 29.1-.7 25.3-8.8 47.7-15.5 62-4.2 8.8-12.9 13.9-21.9 13.9z"/><path d="m874.6 1106.4c-8.7 0-17.1-4.8-21.4-13-11.2-21.8-17.4-44.6-17.9-66-.3-10.9 1.1-18.2 2.5-23.9 2.4-10.7 12-18.7 23.4-18.7 13.3 0 24 10.7 24 24 0 2-.2 4-.7 5.9-.7 2.9-1.3 5.7-1.2 11.4.5 18 7.1 34.5 12.7 45.3 6.1 11.8 1.4 26.3-10.4 32.3-3.5 1.8-7.3 2.7-11 2.7z"/></g></g></g></svg>
            Retail Owner</p>
        </div>
    </div>
    <div class="col-md-3" sty>
        <a href="https://contrafinder.com" class="btn btn-log btn-block btn-thm btn-xl btn-green btn-contractor"> <i class="fa fa-list"></i> Find Contractors</a>
    </div>
</div>
</div>
<hr class="brek-line">







<div class="container">
    
    <div class="row header-text">
        <div class="col-md-3"></div>
   <div class="col-md-6">
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
        <br><br>
           <h3 style="margin: 0px;" id="info">Tell us a little about you</h3>
          <p>to help you better with your Needs</p>
        <div class="business-information" id="business"> 
          
        <br>
         <input type="hidden" name="email" class="form-control"  placeholder="email" value="{{$dataUser['email']}}">
         
          <!--<input type="hidden" name="password" class="form-control" id="email" placeholder="Password" value="{{$dataUser['password']}}">-->
       
        <div class="form-group">
            <label for="email">First Name</label>
            <input type="text" name="first_name" class="form-control"  value="{{$dataUser['first_name']}}">
          </div>
          

        <div class="form-group">
            <label for="email">Last Name</label>
            <input type="text" class="form-control"  name="last_name" value="{{$dataUser['last_name']}}">
          </div>
          
          
        <div class="form-group">
            <label for="email">Age</label>
           
            <select class="form-control" name="age">                <option <?=($dataUser["age"]==18 ? "selected" : "")?> value="18">18 - 25</option>                
			<option <?=($dataUser["age"]==19 ? "selected" : "")?> value="19">25 - 35</option>                <option <?=($dataUser["age"]==20 ? "selected" : "")?> value="20">35 - 50</option>                
			<option <?=($dataUser["age"]==21 ? "selected" : "")?> value="21">45 - 60+</option>            </select>
          </div>

             <div class="form-group">
                 
            <label for="email">Gender</label><br>
           <label> <input <?=($dataUser["gender"]==1 ? "checked" : "")?> type="radio" id="gender_m" name="gender" value="1"> Male &nbsp;&nbsp;</label>
           
           <label> <input <?=($dataUser["gender"]==0 ? "checked" : "")?> type="radio" id="gender_f" name="gender" value="0"> Female &nbsp;&nbsp;</label>
           <!--<label> <input <?=($dataUser["gender"]==3 ? "checked" : "")?> type="radio" id="gender_o" name="gender" value="3"> Other</label>-->
          </div>
          

                    
        
          
          <div class="business-information" id="contact"> 
          <div class="form-group">
            <label for="email">Phone Number</label>
          <input type="tel" class="form-control" name="phone" placeholder="phone" value="{{$dataUser['phone']}}">
          </div>
          <br><br>
          <h3 style="margin: 0px;" id="info">Location</h3>
          <p>Please provide your location</p>
          <hr>
         
          <div class="form-group">
          <label for="company">Country</label>
          <input type="text" class="form-control" placeholder="" name="country" value="{{$dataUser['country']}}">
        </div>
      </div>

 <div class="form-group">
          <label for="phone">State</label>
          <input type="text" name="state" class="form-control" id="phone" placeholder="" value="{{$dataUser['state']}}">
        </div>
          
          <div class="form-group">
          <label for="company">City</label>
          <input type="text" name="city" class="form-control" placeholder="" id="City" value="{{$dataUser['city']}}">
        </div>
      

      
       
     
    
           
           
           
           <br><br>
         
    <button type="submit" style="width: 60%;
    padding: 15px;" class="btn btn-log btn-block btn-thm form-submit">Update Profile</button>
         </form>
        </div>
        <br><br><br>
        </div>
        
    </div>
</div>
    
</div>

    <div class="row" style="display:none;">
      <div class="col-md-4">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="email" value="{{$dataUser['email']}}">
        </div>
      </div>

        <div class="col-md-4">
        <div class="form-group">
          <label for="email">Password</label>
          <input type="password" name="password" class="form-control"  placeholder="Password" value="{{$dataUser['password']}}">
        </div>
      </div>

        <div class="col-md-4">
        <div class="form-group">
          <label for="email">New Password</label>
          <input type="password" name="new_password" class="form-control"  placeholder="New Password">
        </div>
      </div>
    </div>

    <div class="row" style="display:none;">
      <div class="col-md-4">
        <div class="form-group">
          <label for="first">User Name</label>
          <input type="text" name="user_name" class="form-control" placeholder="user name" id="first" value="{{$dataUser['user_name']}}">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="first">First Name</label>
          <input type="text" name="first_name" class="form-control" placeholder="first name" value="{{$dataUser['first_name']}}">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-4">
        <div class="form-group">
          <label for="last">Last Name</label>
          <input type="text" name="last_name" class="form-control" placeholder="last name"  value="{{$dataUser['last_name']}}">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row"  style="display:none;">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">City</label>
          <input type="text" name="city" class="form-control" placeholder=""  value="{{$dataUser['city']}}">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="phone">State</label>
          <input type="text" name="state" class="form-control"  placeholder="state" value="{{$dataUser['state']}}">
        </div>
      </div>
    </div>


    <div class="row"  style="display:none;">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Country</label>
          <input type="text" class="form-control" placeholder="country" name="country" value="{{$dataUser['country']}}">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" class="form-control" name="phone" placeholder="phone" value="{{$dataUser['phone']}}">
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








