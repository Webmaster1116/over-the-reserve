@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/about.css" />

@section('content')
<section id="pageUrl">
    <div class="container">
        <div class="url-link"><span>Home | </span><p>About</p></div>
    </div>
</section>
<section id="welcome">
    <div class="container">
        <div>
            <img src="{{asset('assets/img/about/about-top-bg.svg')}}"/>
            <div class="welcome-card">
                <div class="welcome-text">
                    <div class="welcome-header">WELCOME TO Realtor Afrique</div>
                    <div class="welcome-content">We see change as opportunity, not a threat and start with the belief that there is a better way.</div>
                    <div class="welcome-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</div>
                </div>
            </div>
        </div>
        <div class="real-estate">
            <div class="real-estate-text">
                <div class="real-estate-header">Our mission is to redefine real estate in the customer's favor.</div>
                <div class="real-estate-content">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </span>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </span>
                </div>
            </div>
            <div class="real-estate-img">
                <img src="{{asset('assets/img/about/real-estate.svg')}}"/>
            </div>
        </div>
    </div>
</section>
<section id="explore-property-types">
  <div class="container about-explore">
    <div class="explore-property">
        <div>Explore<br /> by Property Type</div>
        <span>Modern way to find a property</span>
        <button>+2300 Available properties -></button>
    </div>
    <div class="type-cards about-type-cards">
        <div class="card">
            <div class="card-img card-house">
            <img src="{{asset('assets/img/home/icon-home.svg')}}"/>
            </div>
            <span class="card-title">Private House</span>
            <span class="card-content">12 Properties</span>
        </div>
        <div class="card">
            <div class="card-img card-house">
            <img src="{{asset('assets/img/home/icon-office.svg')}}"/>
            </div>
            <span class="card-title">Office</span>
            <span class="card-content">12 Properties</span>
        </div>
        <div class="card">
            <div class="card-img card-house">
            <img src="{{asset('assets/img/home/icon-villa.svg')}}"/>
            </div>
            <span class="card-title">Villa</span>
            <span class="card-content">47 Properties</span>
        </div>
        <div class="card">
            <div class="card-img card-house">
            <img src="{{asset('assets/img/home/icon-warehouse.svg')}}"/>
            </div>
            <span class="card-title">Warehouse</span>
            <span class="card-content">12 Properties</span>
        </div>
        </div>
  </div>
</section>
<section id="realtor">
    <div class="container realtor-container">
        <div class="realtor-header">
            <div class="welcome-content">Realtor Afrique is an estate agency that helps people live in more thoughtful and beautiful ways.</div>
            <div class="welcome-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
        </div>
    </div>
    <div class="container">
        <div class="realtor-images">
            <div>
                <img src="{{asset('assets/img/about/realtor-img1.svg')}}"/>
                <img src="{{asset('assets/img/about/realtor-img2.svg')}}"/>
            </div>
            <div>
                <img src="{{asset('assets/img/about/realtor-img3.svg')}}"/>
                <img src="{{asset('assets/img/about/realtor-img4.svg')}}"/>
                <img src="{{asset('assets/img/about/realtor-img5.svg')}}"/> 
            </div>
            <div>
                <img src="{{asset('assets/img/about/realtor-img6.svg')}}"/>
                <img src="{{asset('assets/img/about/realtor-img7.svg')}}"/>
            </div>
            
            
        </div>
    </div>
</section>
<section id="blog">
  <div class="container">
    <div class="property">
      <span class="property-header">Blog</span>
      <div class="articles">
        <a href="#">See all Articles</a>
      </div>
    </div>
    <div class="top-cards col-md-12">
      <div class="col-md-4">
        <div class="top-card card ">
          <img class="card-top-img" src="{{asset('assets/img/home/blog-img1.svg')}}" />
          <div class="card-body">
            <h5 class="card-title">How to achieve financial independence through real estate</h5>
            <p class="card-text">The basic premise of search engine reputation management in to use the greate work</p>
            <a href="#" class="btn card-view-btn">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="top-card card">
          <img class="card-top-img" src="{{asset('assets/img/home/blog-img2.svg')}}" />
          <div class="card-body">
            <h5 class="card-title">Learn how real estate really shapes our future</h5>
            <p class="card-text">The basic premise of search engine reputation management in to use the greate work</p>
            <a href="#" class="btn card-view-btn">View More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="top-card card">
          <img class="card-top-img" src="{{asset('assets/img/home/blog-img3.svg')}}" />
          <div class="card-body">
            <h5 class="card-title">Renovating a Living Room? Experts Share Their Secrets</h5>
            <p class="card-text">The basic premise of search engine reputation management in to use the greate work</p>
            <a href="#" class="btn card-view-btn">View More</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection
