@extends('layouts.default')
<link rel="stylesheet" href="assets/css/login.css" />
@section('content')
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

      <input type="email" placeholder="Email" name="email" required autofocus/>
      <hr />
      <input type="password" placeholder="Password" name="password" required/>
      <hr />
    </div>
    <div class="login-btn-group">
      <button type="submit" class="login-btn">Login</button>
      <a href="/forgot-password">Forgot Password?</a>
    </div>
    <div class="login-register">
      <span>Don't have an account yet?</span>
      <a href="/become-member">Register here</a>
    </div>
  </form>
@endsection