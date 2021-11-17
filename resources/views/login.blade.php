@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
  <div class="login-form">
    <div class="login-header">
      <div>Login Your Account</div>
      <span>Thank you for get back to Realtor Afrique, let access our the best recommendation for you.</span>
    </div>
    <form method="POST" action="{{ route('login.custom') }}">
      @csrf
      <div class="login-input">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon lock-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
          </div>
        </div>
        <!-- <input type="email" placeholder="Email" name="email" required autofocus/> -->
        
        <!-- <input type="password" placeholder="Password" name="password" required/> -->
        <div class="form-group">
          <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember Me</label>
              <a class="reset-password" href="/forgot-password">Reset Password?</a>
          </div>
        </div>
      </div>
      <div class="login-btn-group">
        <div><button type="submit" class="login-btn">Login</button></div>
        <div><span>or continue with</span></div>
        <div>
          <a href="#"><img src="{{asset('assets/img/auth/facebook.svg')}}" /></a>
          <a href="#"><img src="{{asset('assets/img/auth/google.svg')}}" /></a>
          <a href="#"><img src="{{asset('assets/img/auth/twitter.svg')}}" /></a>
        </div>
                
      </div>
      <div class="login-register">
        <span>Don't have an account yet?</span>
        <a href="/register">Join Now</a>
      </div>
    </form>
  </div>
  
</section>
  
@endsection