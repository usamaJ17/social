<!--<a class="scrollToHome" href="#" style="display: inline;"><i class="fa fa-angle-up"></i></a>-->

@if(!is_api() and empty($is_user_page))
	<section class="ftr" style="
	background: #243758;
    padding-bottom: 0px !important;">
		<div class="container pb70">
			<div class="row">
					<div class="col-md-12 text-center spc">
					
	
<div id="div_top_hypers">
    <ul id="ul_top_hypers">
        <li>&#8227; <a href="https://contrafinder.com/page/about-contrafinder" class="a_top_hypers"> About us</a></li>
        <li>&#8227; <a href="https://contrafinder.com/contact" class="a_top_hypers"> Contact us</a></li>
        <li>&#8227; <a href="https://contrafinder.com/tips-to-hire-contractor" class="a_top_hypers"> Tips To Hire a Fitout Contractor</a></li>
        <li>&#8227; <a href="https://contrafinder.com/contact" class="a_top_hypers"> Career</a></li>
    </ul>
    
    <ul id="ul_top_hypers" class="m-space">
        
        <li>&#8227; <a href="https://contrafinder.com/page/terms-of-use" class="a_top_hypers"> Terms & Services</a></li>
        <li>&#8227; <a href="https://contrafinder.com/page/privacy-policy" class="a_top_hypers"> Privacy Policy</a></li>
        <li>&#8227; <a href="https://contrafinder.com/page/review-policy" class="a_top_hypers"> Review Policy</a></li>
        <li>&#8227; <a href="https://contrafinder.com/page/copyright-and-trademark-policy" class="a_top_hypers"> Copyright & Trademark Policy</a></li>
        <li>&#8227; <a href="https://contrafinder.com/page/acceptable-use-policy" class="a_top_hypers"> Acceptable Use Policy</a></li>
        <li>&#8227; <a href="https://contrafinder.com/page/cookie-policy" class="a_top_hypers"> Cookie Policy</a></li>
        
    </ul>
    
</div>
<br>
<div id="div_top_hypers">
    <ul id="ul_top_hypers">
        <li> <a href="tel:+971525657279" class="a_top_hypers"> <i class="fa fa-phone"></i> +971 52 565 7279</a></li>
        <li> <a href="mailto:info@contrafinder.com" class="a_top_hypers"> <i class="fa fa-envelope"></i> info@contrafinder.com</a></li>
    </ul>
</div>

<br>
						<img style="margin-top:10px; height: 70px;opacity: 0.3;" src="https://contrafinder.com/public/images/contrafinder-white-logo.png" style="" alt="contrafinder-white-logo.png">
				</div>
			
			</div>
		</div>
		<hr>
		<div class="container pt20 pb30">
			<div class="row">
				<div class="col-md-4 col-lg-4">
				<div class="copyright-widget mt10 mb15-767" >
<p>All Rights Reserved.</p>
</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="footer_logo_widget text-center mb15-767">
						<div class="wrapper">
							<div class="logo text-center">
								@if(!empty(setting_item('footer_logo_id')))
								<img src="https://contrafinder.com/public/images/contra-white.png" style="" alt="footer-logo.svg">
								@endif
							
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
				<div class="copyright-widget mt10 mb15-767" style="float:center;">
<p>Copyright © 2023 by Contrafinder</p>
</div>
				</div>
			</div>
		</div>
		
	</section>
	
@endif

@include('Layout::parts.login-register-modal')
@include('Layout::parts.chat')
@if(Auth::id())
	@include('Media::browser')
@endif
<link rel="stylesheet" href="{{asset('libs/flags/css/flag-icon.min.css')}}">

{!! \App\Helpers\Assets::css(true) !!}

<!--{{--Lazy Load--}}-->
<!--<script src="{{asset('libs/lazy-load/intersection-observer.js')}}"></script>-->
<!--<script async src="{{asset('libs/lazy-load/lazyload.min.js')}}"></script>-->
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);
    
    
    
</script>
<script src="{{ asset('libs/lodash.min.js') }}"></script>
<script src="{{ asset('libs/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('libs/vue/vue'.(!env('APP_DEBUG') ? '.min':'').'.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/bootbox/bootbox.min.js') }}"></script>
@if(Auth::id())
	<script src="{{ asset('module/media/js/browser.js?_ver='.config('app.asset_version')) }}"></script>
@endif
<script type="text/javascript" src="{{ asset("libs/daterange/moment.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("libs/daterange/daterangepicker.min.js") }}"></script>
<script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('js/functions.js?_ver='.config('app.asset_version')) }}"></script>

<script src="{{ asset('dist/frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('dist/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('dist/frontend/js/jquery.mmenu.all.js') }}"></script>

<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
}
else
{
    
?>

<script src="{{ asset('dist/frontend/js/ace-responsive-menu.js') }}"></script>

<?php
}


?>


<script src="{{ asset('dist/frontend/js/bootstrap-select.min.js') }}"></script>

<script src="{{ asset('dist/frontend/js/isotop.js') }}"></script>

<script src="{{ asset('dist/frontend/js/snackbar.min.js') }}"></script>
<script src="{{ asset('dist/frontend/js/simplebar.js') }}"></script>
<script src="{{ asset('dist/frontend/js/parallax.js') }}"></script>

<script src="{{ asset('dist/frontend/js/scrollto.js') }}"></script>
<script src="{{ asset('dist/frontend/js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('dist/frontend/js/jquery.counterup.js') }}"></script>
<script src="{{ asset('dist/frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('dist/frontend/js/progressbar.js') }}"></script>
<script src="{{ asset('dist/frontend/js/slider.js') }}"></script>
<script src="{{ asset('dist/frontend/js/timepicker.js') }}"></script>
<!-- Custom script for all pages -->

<script src="{{ asset('dist/frontend/js/script.js') }}"></script>


@if(
    setting_item('tour_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('car_location_search_style')=='autocompletePlace' || setting_item('space_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('event_location_search_style')=='autocompletePlace'
)
	{!! App\Helpers\MapEngine::scripts() !!}
@endif
<script src="{{ asset('libs/pusher.min.js') }}"></script>
<script src="{{ asset('js/home.js?_ver='.config('app.asset_version')) }}"></script>

@if(!empty($is_user_page))
	<script src="{{ asset('dist/frontend/js/dashboard-script.js') }}"></script>
	<script src="{{ asset('module/user/js/user.js?_ver='.config('app.asset_version')) }}"></script>
@endif
@if(setting_item('cookie_agreement_enable')==1 and request()->cookie('booking_cookie_agreement_enable') !=1 and !is_api()  and !isset($_COOKIE['booking_cookie_agreement_enable']))
	<div class="booking_cookie_agreement p-3 d-flex fixed-bottom">
		<div class="content-cookie">{!! setting_item_with_lang('cookie_agreement_content') !!}</div>
		<button class="btn save-cookie">{!! setting_item_with_lang('cookie_agreement_button_text') !!}</button>
	</div>
	<script>
        var save_cookie_url = '{{route('core.cookie.check')}}';
	</script>
	
	<script src="{{ asset('js/cookie.js?_ver='.config('app.asset_version')) }}"></script>
@endif
@if(!empty(setting_item('inbox_enable')))
	<script src="{{ asset('module/core/js/chat-engine.js') }}"></script>
@endif
{!! \App\Helpers\Assets::js(true) !!}

@yield('footer')

@php \App\Helpers\ReCaptchaEngine::scripts() @endphp
