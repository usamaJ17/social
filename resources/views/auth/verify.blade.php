@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center bc-login-form-page bc-login-page">
        <div class="col-md-8" style="text-align:center;">
              <i class="fa fa-envelope" style="color:#30c21c;font-size:55px;"></i>
              <br><br>
               <h2> Verification Email Sent </h2>
               
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                   Before proceeding, please check your email for a verification link.<br>
               
                    <br><br>
                   If you did not receive the email &nbsp; <a style="color:#30c21c;" onclick="event.preventDefault(); document.getElementById('email-form').submit(); " href="{{ route('verification.resend') }}">Resend Email</a>.
                        
                        <form id="email-form" action="{{ route('verification.resend') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                
          
        </div>
    </div>
</div>
@endsection
