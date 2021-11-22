@extends('layouts.default')
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section>
    <div class="error-404">
        <img src="{{asset('assets/img/auth/404-error.svg')}}" /> 
        <div>Ouch! Something went wrong!</div>
        <span>It seems we can’t find what you’re looking for.<br/> Perhaps searching can help or go back to <a href="/">Homepage</a></span>
    </div>
</section>
  
@endsection