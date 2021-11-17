@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
  <div class="login-form check-email-form">
    <div class="check-email-img">
        <img src="{{asset('assets/img/auth/check-email.svg')}}" />
    </div>
    <div class="login-header check-email">
      <div>Check your email</div>
      <span>We have sent a password recovery instruction to your email.</span>
      <a href="/">Back to Home</a>
    </div>
    
  </div>
</section>
@endsection
