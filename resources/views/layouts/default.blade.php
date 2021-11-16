<!DOCTYPE html>
<html lang="en">
<head>
  <title>Over the Reserve</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
<header>
  <div class="header-bar">
      <div class="navbar-header">
        <a href="/" class="header-logo"
          ><img src="{{asset('assets/img/home/logo.svg')}}"
        /></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/"><span>Home</span></a>
        </li>
        <li>
          <a href="/about"
            ><span>About Us</span></a
          >
        </li>
        <li>
          <a href="/properties"
            ><span>Properties</span></a
          >
        </li>
        <li>
          <a href="blog"
            ><span>Blog</span></a
          >
        </li>
        <li>
          <a href="contact"
            ><span>Contact Us</span></a
          >
        </li>

         @if (!Auth::user())
        <div>
          <a href="/login" class="header-btn header-login"><img src="{{asset('assets/img/home/icon-user.svg')}}" />Login</a>
          <a href="/register" class="header-btn header-register">Register</a>
        </div>
        @else
        <div>
          <a href="{{ route('signout') }}" class="header-btn header-login"><img src="{{asset('assets/img/home/icon-user.svg')}}" />Logout</a>
        </div>
        @endif
       
      </ul>

  </div>
</header>
@yield('content')
  <footer>
    <div class="container footer-menu">
      <div class="row">
        <div class="col-lg-4 hidden-md hidden-sm col-xs-12 mar_b-30">
          <div class="footer-wrapper">
            <div class="footer-title">
              <img src="{{asset('assets/img/home/logo.svg')}}"/>
            </div>
            <div class="footer-wrapper">
              <ul>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.</ul>
              <div class="footer-social">
                <div><img src="{{asset('assets/img/home/icon-map.svg')}}" />Brooklyn, Store in Woodside, Western Cape</div>
                <div><img src="{{asset('assets/img/home/icon-phone.svg')}}" />+0123-456789, +0123-456789</div>
                <div><img src="{{asset('assets/img/home/icon-mail.svg')}}" />example@example.com</div>
              </div>
              <div class="footer-social-icons">
                <img src="{{asset('assets/img/home/icon-facebook.svg')}}" />
                <img src="{{asset('assets/img/home/icon-camera.svg')}}" />
                <img src="{{asset('assets/img/home/icon-linkedin.svg')}}" />
                <img src="{{asset('assets/img/home/icon-media.svg')}}" />
                <img src="{{asset('assets/img/home/icon-twitter.svg')}}" />
                <img src="{{asset('assets/img/home/icon-pinterest.svg')}}" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 hidden-md hidden-sm col-xs-12 mar_b-30">
          <div class="col-lg-5 hidden-md hidden-sm col-xs-12 mar_b-30">
            <div class="footer-wrapper">
              <div class="footer-title">
                <p>Quick Links</p>
              </div>
              <div class="footer-wrapper">
                <ul class="footer-resources">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Carrers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Faq</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-7 hidden-md hidden-sm col-xs-12 mar_b-30">
            <div class="footer-wrapper">
              <div class="footer-title">
                <p>Popular Searches</p>
              </div>
              <div class="footer-wrapper">
                <ul class="footer-resources">
                  <li><a href="#">For Sell</a></li>
                  <li><a href="#">For Rent</a></li>
                  <li><a href="#">Appartment for Rent</a></li>
                  <li><a href="#">Appartment Low to hide</a></li>
                  <li><a href="#">Offices for Buy</a></li>
                  <li><a href="#">Office for Rent</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 hidden-md hidden-sm col-xs-12 mar_b-30">
          <div class="footer-wrapper">
            <div class="footer-title">
              <p>Sign Up for Our Newsletter</p>
            </div>
            <div class="footer-wrapper">
              <ul>Be the first to get the latest news about market, promotions and much more!</ul>
                <span class="footer-subscribe">
                  <img src="{{asset('assets/img/home/icon-subscribe-mail.svg')}}" />
                  <input class="subscribe-email" placeholder="Your email address" />
                  <a href="#"><img src="{{asset('assets/img/home/icon-subscribe-send.svg')}}" /></a>
                </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 mar_b-30">
            <div class="copyright text-left">
              <p>Copyright © 2021 Grange. All Rights Reserved.</p>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="copyright-img text-right">
            <a href="javascript:void(0)"
                >Privacy Policy |</a
              >
              <a href="javascript:void(0)"
                > Term & Conditions</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
