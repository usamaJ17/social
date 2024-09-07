<form class="bc-form-login" method="POST" action="{{ route('login') }}">
    @csrf		<input type="hidden" name="redirect" value="<?=( Request::get("redirect") )?>" />
    <div class=" form-group mb-2 mr-sm-2">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" autocomplete="off" placeholder="{{__('Email address')}}">
        <span class="invalid-feedback error error-email"></span>
    </div>
    <div class=" form-group mb5">
         <label for="password">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off"  placeholder="{{__('Password')}}">
        <span class="invalid-feedback error error-password"></span>
    </div>
    
    <div class="form-group custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input"  name="remember" id="remember-me" value="1">
        <label class="custom-control-label" for="remember-me">{{__('Remember me')}}</label>
        <a class="btn-fpswd float-right" href="{{ route("password.request") }}">{{__('Forgot Password?')}}</a>

    </div>
    @if(1)
        <div class="form-group">
            {{recaptcha_field($captcha_action ?? 'login')}}
        </div>
    @endif
    <div class="error message-error invalid-feedback"></div>
    <button type="submit" class="btn btn-log btn-block btn-thm form-submit">
        {{__("Sign in")}}
        <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
    </button>
    
    <!--<a href="c_profile" class="btn btn-log btn-block btn-thm form-submit">Sign in</a>-->
    
    @if(1)
        <div class="row mt30">
                @if(1)
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('/social-login/facebook')}}"class="btn btn-fb btn-block btn_login_fb_link" data-channel="facebook">
                            <i class="input-icon fa fa-facebook"></i>
                            {{__('Facebook')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('google_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/google')}}" class="btn btn-googl btn-block btn_login_gg_link" data-channel="google">
                            <i class="input-icon fa fa-google"></i>
                            {{__('Google')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('twitter_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/twitter')}}" class="btn btn-tw btn-block btn_login_tw_link" data-channel="twitter">
                            <i class="input-icon fa fa-twitter"></i>
                            {{__('Twitter')}}
                        </a>
                    </div>
                @endif
            </div>
    @endif
</form>
