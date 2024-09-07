<form class="form bc-form-register" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group" style="display:none;">
                <input type="text" class="form-control" name="first_name" value="null" autocomplete="off" placeholder="{{__("First Name")}}">
                <i class="input-icon field-icon icofont-waiter-alt d-none"></i>
                <span class="invalid-feedback error error-first_name"></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-group" style="display:none;">
                <input type="text" class="form-control" name="last_name" value="null" autocomplete="off" placeholder="{{__("Last Name")}}">
                <i class="input-icon field-icon icofont-waiter-alt d-none"></i>
                <span class="invalid-feedback error error-last_name"></span>
            </div>
        </div>
    </div>
    <div class="form-group" style="display:none;">
        <input type="text" class="form-control" name="phone" value="<?= uniqid(); ?>" autocomplete="off" placeholder="{{__('Phone')}}">
        <i class="input-icon field-icon icofont-ui-touch-phone d-none"></i>
        <span class="invalid-feedback error error-phone d-none"></span>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="{{__('Email address')}}" required>
        <i class="input-icon field-icon icofont-mail d-none"></i>
        <span class="invalid-feedback error error-email"></span>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off" placeholder="{{__('Password')}}" minlength="8" required>
        <i class="input-icon field-icon icofont-ui-password d-none"></i>
        <span class="invalid-feedback error error-password"></span>
    </div>
    <div class="form-group custom-control custom-checkbox" >
        <input type="checkbox" name="term" class="custom-control-input" id="term">
        <label class="custom-control-label" style="font-size: 13px;" for="term">By signing up, signing in or continuing, I agree to Contrafinder <a href="https://contrafinder.com/page/terms-of-use" style="color:#30c21c;"> Terms of Use</a> and <a href="https://contrafinder.com/page/privacy-policy" style="color:#30c21c;"> Privacy Policy.</a></label>
        <div><span class="invalid-feedback error error-term"></span></div>

    </div>
    @if(setting_item("user_enable_register_recaptcha"))
        <div class="form-group">
            {{recaptcha_field($captcha_action ?? 'register')}}
        </div>
        <div><span class="invalid-feedback error error-g-recaptcha-response"></span></div>
    @endif
    <div class="error message-error invalid-feedback"></div>
    <div class="form-group">
        <button type="submit" class="btn btn-log btn-block btn-thm form-submit">
            {{ __('Sign Up') }}
            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
        </button>
        
        
    <!--<a href="user_type" class="btn btn-log btn-block btn-thm form-submit">Sign Up</a>-->
    
        
        
    </div>
    @if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable'))
        <div class="advanced">
            <p class="text-center f14 c-grey">{{__("or continue with")}}</p>
            <div class="row">
                @if(setting_item('facebook_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('/social-login/facebook')}}" class="btn btn_login_fb_link"
                           data-channel="facebook">
                            <i class="input-icon fa fa-facebook"></i>
                            {{__('Facebook')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('google_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/google')}}" class="btn btn_login_gg_link" data-channel="google">
                            <i class="input-icon fa fa-google"></i>
                            {{__('Google')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('twitter_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/twitter')}}" class="btn btn_login_tw_link" data-channel="twitter">
                            <i class="input-icon fa fa-twitter"></i>
                            {{__('Twitter')}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif
</form>
