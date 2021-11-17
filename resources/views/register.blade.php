
@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
  <div class="login-form register-form">
    <div class="login-header">
      <div>Register New Account</div>
      <span>Let's get you all set up so you can verify your personal account and begin setting up your profile.</span>
    </div>
    <form method="POST" action="{{ route('register.custom') }}">
      @csrf
      <div class="login-input register-input">
      <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon register-addon"><i class="fa fa-user"></i></span>
            <input type="name" class="form-control" placeholder="Name" name="name" required autofocus>
          </div>
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" name="email" required>
          </div>
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon register-addon"><i class="fa fa-phone"></i></span>
            <input type="text" class="form-control" placeholder="Phone No." name="phone" required>
          </div>
          @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon lock-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
          </div>
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon lock-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
          </div>
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <!-- <input type="email" placeholder="Email" name="email" required autofocus/> -->
        
        <!-- <input type="password" placeholder="Password" name="password" required/> -->
        <div class="form-group">
          <div class="checkbox">
              <label><input type="checkbox" name="terms" required> I agree to all <span>Terms & Conditions</span></label>
          </div>
        </div>
      </div>
      <div class="login-btn-group">
        <div><button type="submit" class="login-btn">Register Now</button></div>
        <div><span>or register with</span></div>
        <div>
          <a href="#"><img src="{{asset('assets/img/auth/facebook.svg')}}" /></a>
          <a href="#"><img src="{{asset('assets/img/auth/google.svg')}}" /></a>
          <a href="#"><img src="{{asset('assets/img/auth/twitter.svg')}}" /></a>
        </div>
                
      </div>
      <div class="login-register">
        <span>Already have an account?</span>
        <a href="/login">Log In</a>
      </div>
    </form>
  </div>
  
</section>
  
@endsection