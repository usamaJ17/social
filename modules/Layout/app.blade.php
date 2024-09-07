<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">
<head>
    <meta charset="utf-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php event(new \Modules\Layout\Events\LayoutBeginHead()); @endphp
    @php
        $favicon = setting_item('site_favicon');
    @endphp
    @if($favicon)
        @php
            $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
        @endphp
        @if(!empty($file))
            <link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/'.$file['file_path'])}}" >
        @else:
            <link rel="icon" type="image/png" href="{{url('images/favicon.png')}}" >
        @endif
    @endif

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
    
    
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/daterange/daterangepicker.css") }}" >
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet" type='text/css' media='all'>
    {!! \App\Helpers\Assets::css() !!}
    {!! \App\Helpers\Assets::js() !!}
    <script>
        var bookingCore = {
            url:'{{url( app_get_locale() )}}',
            url_root:'{{ url('') }}',
            booking_decimals:{{(int)get_current_currency('currency_no_decimal',2)}},
            thousand_separator:'{{get_current_currency('currency_thousand')}}',
            decimal_separator:'{{get_current_currency('currency_decimal')}}',
            currency_position:'{{get_current_currency('currency_format')}}',
            currency_symbol:'{{currency_symbol()}}',
			currency_rate:'{{get_current_currency('rate',1)}}',
            date_format:'{{get_moment_date_format()}}',
            routes:{
                login:'{{route('auth.login')}}',
                register:'{{route('auth.register')}}',
                checkout:'{{is_api() ? route('api.booking.doCheckout') : route('booking.doCheckout')}}'
            },
            module:{
                property:'{{route('property.search')}}',
            },
            currentUser: {{(int)Auth::id()}},
            isAdmin : {{is_admin() ? 1 : 0}},
            rtl: {{ setting_item_with_lang('enable_rtl') ? "1" : "0" }},
            markAsRead:'{{route('core.notification.markAsRead')}}',
            markAllAsRead:'{{route('core.notification.markAllAsRead')}}',
            loadNotify : '{{route('core.notification.loadNotify')}}',
            pusher_api_key : '{{setting_item("pusher_api_key")}}',
            pusher_cluster : '{{setting_item("pusher_cluster")}}',
        };
        var i18n = {
            warning:"{{__("Warning")}}",
            success:"{{__("Success")}}",
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
    <!-- Styles -->
    @yield('head')
    {{--Custom Style--}}
    <link href="{{ route('core.style.customCss') }}" rel="stylesheet">
    @if(setting_item_with_lang('enable_rtl'))
        <link href="{{ asset('dist/frontend/css/rtl.css') }}" rel="stylesheet">
    @endif
    {!! setting_item('head_scripts') !!}
    {!! setting_item_with_lang_raw('head_scripts') !!}

    @php event(new \Modules\Layout\Events\LayoutEndHead()); @endphp
    
    
    
    <style>
          html {
  scroll-behavior: smooth;
}
header.header-nav.menu_style_home_one.style2 .ace-responsive-menu li a {
    font-size: 12px !important;
}
.depth-0 a
{
    font-weight:800 !important;
}

 .tips li
    {
        margin: 30px;
    }


 @media only screen and (max-width: 480px) {
    
   
    }
    
    
    .hero-te
    {
        margin-top:6% !important;
    }
    
    @media only screen and (max-width: 480px) {
    
    .hero-te
    {
        margin-top:-3% !important;
    }
    
    .ds-mb
    {
        font-size:15px !important;
        display:block !important;
        margin-top: 10px !important;
    }
    
    .f-box
    {
        margin: 10px;
    }
    
    .f-con
    {
        margin-top: -22px;
    }
    
    .zerp
    
    {
        padding:0px !important;
    }
    
    
}




	.spc{
				    margin-top: 50px !important;
				}
				
					#div_top_hypers {
    background-color:#eeeeee;
    display:inline;      
}
#ul_top_hypers li{
    margin:10px;
    color:#fff;
    display: inline;
}

.ul_top_hypers{
    margin:20px;
}
#ul_top_hypers li>a{
color:#fff;
font-weight:bold;
    
}

 @media only screen and (max-width: 480px) {
     
 .spc
 {
     text-align: left !important;
 }
 
 .m-space
 {
     margin-top:44px !important;
 }
 
 #ul_top_hypers li{
    margin:10px;
    color:#fff;
    display:block;
}

.profile-pic
{
    left: 0px !important;
    top:-42px !important;
}
     
 }




    </style>

</head>
<body class="frontend-page {{ !empty($row->header_style) ? "header-".$row->header_style : "header-normal" }} {{$body_class ?? ''}} @if(setting_item_with_lang('enable_rtl')) is-rtl @endif @if(is_api()) is_api @endif" >
<div class="preloader"></div>
<div class="wrapper">
    <!--<div class="preloader"></div>-->
    @php event(new \Modules\Layout\Events\LayoutBeginBody()); @endphp
    {!! setting_item('body_scripts') !!}
    {!! setting_item_with_lang_raw('body_scripts') !!}
    <div class="bc_wrap">
        @if(!is_api())
            @include('Layout::parts.header')
        @endif

        @yield('content')

        @include('Layout::parts.footer')
    </div>
    {!! setting_item('footer_scripts') !!}
    {!! setting_item_with_lang_raw('footer_scripts') !!}
    @php event(new \Modules\Layout\Events\LayoutEndBody()); @endphp
</div>

</body>
</html>
