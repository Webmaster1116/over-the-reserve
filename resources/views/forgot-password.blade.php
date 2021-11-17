@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
  <div class="login-form reset-form">
    <div class="login-header">
      <div>Reset Your Password</div>
      <span>Enter your email to reset the password</span>
    </div>
    <form method="POST" action="{{ route('forget.password.post') }}">
      @csrf
      <div class="login-input reset-input">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
          </div>
          <div class="login-header reset-text">
            <span>An OTP has been sent on your register email id.</span>
          </div>
        </div>
      </div>
      <div class="login-btn-group">
        <div><button type="submit" class="login-btn">Reset Your Password</button></div>
      </div>
    </form>
  </div>
</section>
@endsection
