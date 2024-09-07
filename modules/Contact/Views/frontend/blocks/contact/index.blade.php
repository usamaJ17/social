<!-- Inner Page Breadcrumb -->
@php
$contact_banner = get_file_url(setting_item("contact_banner"),"full");
@endphp
<section class="inner_page_breadcrumb" style="background-image: url('https://contrafinder.com/public/designimages/banner-contrafinder.png');"
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">{{ __("Contact Us") }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __("Home") }}</a></li>
                        @if(isset($breadcrumbs) && count($breadcrumbs) > 0)
                            @foreach($breadcrumbs as $breadcrumb)
                                <li class="breadcrumb-item active" aria-current="page">
                                    @if(!empty($breadcrumb['url']))
                                        <a href="{{url($breadcrumb['url'])}}">{{ $breadcrumb['name'] }}</a>
                                    @else
                                        {{$breadcrumb['name']}}
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Contact -->
<section class="our-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form_grid" style="background:#fff;border:none;padding: 0px;">
                    <h3 class="title mb5" style="margin-bottom:0px;">Reach to us</h3>
                    <p style="color: #30c21c;
    font-size: 13px;
    margin-bottom: 20px;">We,ll get back to you at soonest</p>
                    <div role="form" class="form_wrapper" lang="en-US" dir="ltr">
                        <form class="contact_form bc-contact-block-form" id="contact_form" name="contact_form" method="post" action="{{ route("contact.store") }}" novalidate="novalidate">
                            {{csrf_field()}}
                            <div style="display: none;">
                                <input type="hidden" name="g-recaptcha-response" value="">
                            </div>
                            @include('admin.message')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_name" name="name" class="form-control" required="required" type="text" placeholder="{{ __("Name") }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_email" name="email" class="form-control required email" required="required" type="email" placeholder="{{ __("Email") }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_phone" name="phone" class="form-control required phone" required="required" type="text" placeholder="{{ __("Phone") }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control required" rows="8" required="required" placeholder="{{ __("Your Message") }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        {{recaptcha_field('contact')}}
                                    </div>
                                    <div class="form-group mb0">
                                        <button type="submit" class="submit btn btn-lg btn-thm">{{ __("Send Message") }} <i class="fa fa-spinner fa-pulse fa-fw"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-mess"></div>
                        </form>
                    </div>
                </div>
                <br><br>
                 <p>
                     For more information about ContraFinder or any of our services, please contact us through the form below. Alternatively, please call the team on <a href="tel:+971525657279" style="color: #30c21e;">+971 52 565 7279</a> or email us on <a style="color: #30c21e;" href="mailto:info@contrafinder.com">info@contrafinder.com</a>
                 </p>
            </div>
             <div class="col-md-3">
                
             </div>
        </div>
    </div>
</section>
@section('footer')
    {!! App\Helpers\MapEngine::scripts() !!}
   
@endsection
