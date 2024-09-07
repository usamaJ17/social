@extends('layouts.app')

@section('content')
<style>header,.footer_one { display:none !important;}

.auth-block
{
    background: #fff;
    padding:0px;
    box-shadow: 6px -4px 41px -25px rgba(0,0,0,0.75);
    border-radius:5px;
   
}

.heading-text
{
    background: #80808029;
    text-align: center;
    padding: 30px;
    border-radius: 5px 5px 0px 0px;
}

</style>
<div class="fluid-container" style="background-image: url(https://contrafinder.com/public/designimages/Contrafinder-registration.jpg);
    background-size: cover;background-position: center;">
    <div class="row justify-content-center bc-login-form-page bc-login-page">
       <div class="col-md-5 auth-block" >
           <div class="heading-text">
              <img  style="height: 35px;" src="https://contrafinder.com/public//images/contra-logo.png" alt="header-logo.svg">
              <br>
             
             
           </div>
            <div style="padding: 10px 50px;
    border-bottom: 1px solid #80808040;">
          
                
                    @include('Layout::auth.register-form',['captcha_action'=>'register_normal'])
                
               
            </div>
             <div style="padding: 40px;text-align: center;">
                    <h5 >Don't have an account yet ?  <a href="login" style="font-weight: bold;
    color: #30c21c;">Sign In <span style="font-size: 22px;
    position: relative;
    top: 2px;
    left: 2px;" class="fa fa-angle-right"></span></a></h5>
    
    <p style="font-size: 12px;">By signing up, signing in or continuing, I agree to Contrafinder <a href="https://contrafinder.com/page/terms-of-use" style="color:#30c21c;"> Terms of Use</a> and <a href="https://contrafinder.com/page/privacy-policy" style="color:#30c21c;"> Privacy Policy.</a></p>
                </div>
        </div>
    </div>
</div>

@endsection
