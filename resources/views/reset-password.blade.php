@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
  <div class="login-form reset-form">
    <div class="login-header">
      <div>Create New Password</div>
      <span>For the safety of your account please use strong password.</span>
    </div>
    <form method="POST" action="{{ route('reset.password.post') }}">
      @csrf
      <div class="login-input reset-input">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon lock-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="New Password" name="password" required>
          </div>
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon lock-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Re Type New password" name="password_confirmation" required>
          </div>
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
      </div>
      <div class="login-btn-group">
        <div><button type="submit" class="login-btn">Reset Password</button></div>
      </div>
    </form>
  </div>
</section>
@endsection
