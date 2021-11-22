@extends('layouts.default')
<link rel="stylesheet" href="assets/css/about.css" />
<link rel="stylesheet" href="assets/css/contact.css" />

@section('content')
<section id="pageUrl">
    <div class="container">
        <div class="url-link"><span>Home | </span><p>Contact</p></div>
    </div>
</section>
<section id="contact-info">
    <div class="container">
        <div class="col-md-4 col-sm-12">
            <div class="info-card">
                <img src="{{asset('assets/img/contact/location.svg')}}"/>
                <div>Location</div>
                <p>29 Nicolas street,  Northern Cape,<br /> South Africa</p>
            </div>
        </div>
         <div class="col-md-4 col-sm-12">
            <div class="info-card">
                <img src="{{asset('assets/img/contact/phone.svg')}}"/>
                <div>Phones</div>
                <p> 085 883 9999 <br /> 085 883 9999</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="info-card">
                <img src="{{asset('assets/img/contact/email.svg')}}"/>
                <div>Email</div>
                <p>info@realtorafrique.com <br /> service@realtorafrique.com </p>
            </div>
        </div>
    </div>
</section>

<section id="contact-conversation">
    <div class="container">
        <div class="col-md-6 col-sm-12">
            <div class="contact-map">
                <img src="{{asset('assets/img/contact/map.svg')}}"/>
            </div>
        </div>
         <div class="col-md-6 col-sm-12">
             <div class="contact-message">
                <div class="conversation">
                    <div class="conversation-header"> Let’s Conversation </div>
                </div>
                <form method="POST" action="{{ route('contact.conversation') }}">
                @csrf
                    <div class="login-input register-input">
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Name" name="name" required autofocus>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone No." name="phone" required>
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="Message" name="message" required></textarea>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div><button type="submit" class="contact-send">Send</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
