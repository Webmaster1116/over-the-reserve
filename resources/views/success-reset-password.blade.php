@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
  <div class="login-form check-email-form">
    <div class="check-email-img">
        <img src="{{asset('assets/img/auth/success.svg')}}" />
    </div>
    <div class="login-header success-password">
      <div>Your password has been reset</div>
      <span>Successfully</span>
    </div>
    <div class="login-btn-group">
        <div><a href="/" class="continue-btn">Continue</a></div>
    </div>
    
  </div>
</section>
@endsection
