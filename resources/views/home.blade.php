@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
@section('content')
<section id="top">
  <div class="container top-title">
    <span class="header">Explore Our Property Reserve</span>
    <span class="header-content">The best way to solve those property barriers</span>
  </div>
  <div class="container btn-group">
    <button class="home-header-btn active">Buy</button>
    <button class="home-header-btn">Rent</button>
    <button class="home-header-btn">Sell</button>
    <button class="home-header-btn">Invest</button>
    <button class="home-header-btn">Short Stays</button>
    <button class="home-header-btn">Agents</button>
  </div>
  <!-- <div class="form-group has-search input-group">
    <span class="fa fa-search input-group-text"></span>
    <input type="text" class="form-control" placeholder="Search">
  </div> -->
  <div class="form-group has-feedback has-search">
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
    <input type="text" class="form-control home-search" placeholder="Search by state, suburb or postcode">
  </div>
  <div class="select-group">
    <div class="header-select">
      <select class="form-control">
        <option selected>All property types</option>
        <option>type1</option>
        <option>type1</option>
        <option>type1</option>
      </select>
    </div>
    <div class="header-select">
      <select class="form-control">
        <option selected>Beds</option>
        <option>type1</option>
        <option>type1</option>
        <option>type1</option>
      </select>
    </div>
    <div class="header-select">
      <select class="form-control">
        <option selected>Price(Min)</option>
        <option>type1</option>
        <option>type1</option>
        <option>type1</option>
      </select>
    </div>
    <div class="header-select">
      <select class="form-control">
        <option selected>Price(Max)</option>
        <option>type1</option>
        <option>type1</option>
        <option>type1</option>
      </select>
    </div>
    <div class="select-search">
      <a class="header-btn header-select-btn"><span class="fa fa-search"></span>Search</a>
    </div>
  </div>
</section>
<section id="property-types">
  <div class="container">
    <div class="property">
      <span class="property-header">Property Types</span>
      <div class="slide-btns">
        <a class="form-control prev-btn" href="#typeCarousel" data-slide="prev"><</a>
        <a class="form-control next-btn" href="#typeCarousel" data-slide="next">></a>
      </div>
    </div>
    <div id="typeCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="type-cards">
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-home.svg')}}"/>
              </div>
              <span class="card-title">Private House</span>
              <span class="card-content">12 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-apartment.svg')}}"/>
              </div>
              <span class="card-title">Apartment</span>
              <span class="card-content">47 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-townhouse.svg')}}"/>
              </div>
              <span class="card-title">Townhouse</span>
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
                <img src="{{asset('assets/img/home/icon-office.svg')}}"/>
              </div>
              <span class="card-title">Office</span>
              <span class="card-content">12 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-shop.svg')}}"/>
              </div>
              <span class="card-title">Shop</span>
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
        <div class="item">
          <div class="type-cards">
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-home.svg')}}"/>
              </div>
              <span class="card-title">Private House</span>
              <span class="card-content">12 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-apartment.svg')}}"/>
              </div>
              <span class="card-title">Apartment</span>
              <span class="card-content">47 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-townhouse.svg')}}"/>
              </div>
              <span class="card-title">Townhouse</span>
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
                <img src="{{asset('assets/img/home/icon-office.svg')}}"/>
              </div>
              <span class="card-title">Office</span>
              <span class="card-content">12 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-shop.svg')}}"/>
              </div>
              <span class="card-title">Shop</span>
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
        <div class="item">
          <div class="type-cards">
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-home.svg')}}"/>
              </div>
              <span class="card-title">Private House</span>
              <span class="card-content">12 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-apartment.svg')}}"/>
              </div>
              <span class="card-title">Apartment</span>
              <span class="card-content">47 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-townhouse.svg')}}"/>
              </div>
              <span class="card-title">Townhouse</span>
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
                <img src="{{asset('assets/img/home/icon-office.svg')}}"/>
              </div>
              <span class="card-title">Office</span>
              <span class="card-content">12 Properties</span>
            </div>
            <div class="card">
              <div class="card-img card-house">
                <img src="{{asset('assets/img/home/icon-shop.svg')}}"/>
              </div>
              <span class="card-title">Shop</span>
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
      </div>
    </div>
    <div class="today-properties">
      <div class="col-md-6 col-sm-12">
        <div class="today-properties-title">Today Sells Properties</div>
        <div class="today-properties-content">
          <span>Houzez allow you to design unlimited panels and real estate custom 
                forms to capture leads and keep record of all information</span>
          <div><p class="fa fa-minus"></p><span>Live Music Cocerts at Luviana</span></div>
          <div><p class="fa fa-minus"></p><span>Our SecretIsland Boat Tour is Just for You</span></div>
          <div><p class="fa fa-minus"></p><span>Live Music Cocerts at Luviana</span></div>
          <div><p class="fa fa-minus"></p><span>Live Music Cocerts at Luviana</span></div>
        </div>
        <div class="today-properties-icons">
          <div class="today-properties-icon">
            <div>
              <span>3</span>
              <img src="{{asset('assets/img/home/icon-bedroom.svg')}}" />
            </div>
            <span>Bedrooms</span>
          </div>
          <div class="today-properties-icon">
            <div>
              <span>2</span>
              <img src="{{asset('assets/img/home/icon-bathroom.svg')}}" />
            </div>
            <span>Bathrooms</span>
          </div>
          <div class="today-properties-icon">
            <div>
              <span>2</span>
              <img src="{{asset('assets/img/home/icon-parking.svg')}}" />
            </div>
            <span>Car parking</span>
          </div>
          <div class="today-properties-icon">
            <div>
              <span>2540</span>
              <img src="{{asset('assets/img/home/icon-square.svg')}}" />
            </div>
            <span>Square Ft</span>
          </div>
          
        </div>
        <div class="today-properties-images">
          <img src="{{asset('assets/img/home/properties-img1.svg')}}" />
          <img src="{{asset('assets/img/home/properties-img2.svg')}}" />
          <img src="{{asset('assets/img/home/properties-img3.svg')}}" />
        </div>
      </div>
      <div class="col-md-6 col-sm-12 sell-images">
        <img src="{{asset('assets/img/home/sell-image1.svg')}}" />
        <div>
          <img src="{{asset('assets/img/home/sell-image2.svg')}}" />
          <img class="sell-img2" src="{{asset('assets/img/home/sell-image3.svg')}}" />
        </div>
      </div>
    </div>
  </div>
</section>
<section id="top-properties">
  <div class="container">
    <div class="property">
      <span class="property-header">Top Properties</span>
      <div class="slide-btns">
        <a class="form-control prev-btn" href="#topCarousel" data-slide="prev"><</a>
        <a class="form-control next-btn" href="#topCarousel" data-slide="next">></a>
      </div>
    </div>
    <div id="topCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="top-cards">
            <div class="col-md-3">
              <div class="top-card card ">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar1.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar2.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card3.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar3.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card4.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar4.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="top-cards">
            <div class="col-md-3">
              <div class="top-card card ">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar1.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar2.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card3.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar3.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card4.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar4.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="top-cards">
            <div class="col-md-3">
              <div class="top-card card ">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar1.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar2.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card3.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar3.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/top-card4.svg')}}" />
                <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Store in Woodside, Western Cape</h5>
                  <p class="card-text">2250 Kamp St, Cape Town,</p>
                  <span class="card-price">$34,900</span>
                  <div class="card-icons">
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bed.svg')}}" />
                      </div>
                      <span>3 Bedroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-bath.svg')}}" />
                      </div>
                      <span>2 Bathroom</span>
                    </div>
                    <div class="card-icon">
                      <div>
                        <img src="{{asset('assets/img/home/card-icon-square.svg')}}" />
                      </div>
                      <span>3450 Square Ft</span>
                    </div>
                  </div>
                  <hr />
                  <div class="card-footer">
                    <div class="card-avatar">
                      <img src="{{asset('assets/img/home/card-avatar4.svg')}}" />
                      <div>
                        <span class="card-avatar-name">William Seklo</span>
                        <span class="card-avatar-position">Estate Agents</span>
                      </div>

                    </div>
                    <a href="#" class="btn card-view-btn">View More</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="neighborhood">
  <div class="container">
    <div class="property">
      <span class="property-header">Discover The Neighborhoods</span>
    </div>
    <div class="neighbor-images">
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img1.svg')}}" />
        <div>
          <p>Algeria</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img2.svg')}}" />
        <div>
          <p>Botswana</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img3.svg')}}" />
        <div>
          <p>Cabo Verde</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img4.svg')}}" />
        <div>
          <p>Angola</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img5.svg')}}" />
        <div>
          <p>Algeria</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img6.svg')}}" />
        <div>
          <p>Botswana</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img7.svg')}}" />
        <div>
          <p>Cabo Verde</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
      <div class="neighbor-img">
        <img src="{{asset('assets/img/home/neighbor-img8.svg')}}" />
        <div>
          <p>Angola</p>
          <span>265 Properties</span>
          <span>30 Minutes Driving</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="average">
  <div class="container">
    <div class="average-icons">
      <div class="average-icon">
        <img src="{{asset('assets/img/home/average-icon1.svg')}}"/>
        <p>560+</p>
        <span>Total Area Sq</span>
      </div>
      <div class="average-icon">
        <img src="{{asset('assets/img/home/average-icon2.svg')}}"/>
        <p>197k+</p>
        <span>Apartments Sold</span>
      </div>
      <div class="average-icon">
        <img src="{{asset('assets/img/home/average-icon3.svg')}}"/>
        <p>268+</p>
        <span>Total Constructions</span>
      </div>
      <div class="average-icon">
        <img src="{{asset('assets/img/home/average-icon4.svg')}}"/>
        <p>340+</p>
        <span>Apartio Rooms</span>
      </div>
    </div>
  </div>
</section>
<section id="meet_agent">
  <div class="container">
    <div class="property">
      <span class="property-header">Property Types</span>
      <div class="slide-btns">
        <a class="form-control prev-btn" href="#agentCarousel" data-slide="prev"><</a>
        <a class="form-control next-btn" href="#agentCarousel" data-slide="next">></a>
      </div>
    </div>
    <div id="agentCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="top-cards">
            <div class="col-md-3">
              <div class="top-card card ">
                <img class="card-top-img" src="{{asset('assets/img/home/agent1.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent2.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent3.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent4.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="top-cards">
            <div class="col-md-3">
              <div class="top-card card ">
                <img class="card-top-img" src="{{asset('assets/img/home/agent2.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent1.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent4.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent3.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="item">
          <div class="top-cards">
            <div class="col-md-3">
              <div class="top-card card ">
                <img class="card-top-img" src="{{asset('assets/img/home/agent4.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent2.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent3.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="top-card card">
                <img class="card-top-img" src="{{asset('assets/img/home/agent1.svg')}}" />
                <div class="card-body">
                  <h5 class="card-title">Tobby Rashford</h5>
                  <div class="card-text"><span>Compan agent at</span><p>Finderland JSC</p></div>
                  <div class="card-contacts">
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-mail.svg')}}" />
                      </div>
                      <span>tobby@finderland.com</span>
                    </div>
                    <div class="card-contact">
                      <div>
                        <img src="{{asset('assets/img/home/icon-contact-phone.svg')}}" />
                      </div>
                      <span>+65 0231 965 965</span>
                    </div>
                    <div class="card-contact-social">
                      <img src="{{asset('assets/img/home/icon-contact-twitter.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-facebook.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-media.svg')}}"/>
                      <img src="{{asset('assets/img/home/icon-contact-camera.svg')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<section id="testimonial">
  <div class="container">
    <div class="property">
      <span class="property-header">Our Clients Trust Our <br />Expert Teams<p>What Our Client Loved Us</p></span>
      <div class="slide-btns">
        <a class="form-control prev-btn" href="#testimonialCarousel" data-slide="prev"><</a>
        <a class="form-control next-btn" href="#testimonialCarousel" data-slide="next">></a>
      </div>
    </div> 
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="team-cards">
            <div class="col-md-6">
              <div class="team-card">
                <div class="team-imgs">
                  <div class="team-img">
                    <img src="{{asset('assets/img/home/testimonial-img1.svg')}}" />
                    <div>
                      <p>Julia William</p>
                      <span>Selling Agents</span>
                    </div>
                  </div>
                  <img src="{{asset('assets/img/home/testimonial-quote.svg')}}"/>

                </div>
                <div>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                </div>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="team-card">
                <div class="team-imgs">
                  <div class="team-img">
                    <img src="{{asset('assets/img/home/testimonial-img2.svg')}}" />
                    <div>
                      <p>Julia William</p>
                      <span>Selling Agents</span>
                    </div>
                  </div>
                  <img src="{{asset('assets/img/home/testimonial-quote.svg')}}"/>

                </div>
                <div>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                </div>
              </div> 
            </div> 
          </div>
        </div>

        <div class="item">
          <div class="team-cards">
            <div class="col-md-6">
              <div class="team-card">
                <div class="team-imgs">
                  <div class="team-img">
                    <img src="{{asset('assets/img/home/testimonial-img1.svg')}}" />
                    <div>
                      <p>Julia William</p>
                      <span>Selling Agents</span>
                    </div>
                  </div>
                  <img src="{{asset('assets/img/home/testimonial-quote.svg')}}"/>

                </div>
                <div>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                </div>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="team-card">
                <div class="team-imgs">
                  <div class="team-img">
                    <img src="{{asset('assets/img/home/testimonial-img2.svg')}}" />
                    <div>
                      <p>Julia William</p>
                      <span>Selling Agents</span>
                    </div>
                  </div>
                  <img src="{{asset('assets/img/home/testimonial-quote.svg')}}"/>

                </div>
                <div>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                </div>
              </div> 
            </div> 
          </div>
        </div>
      
        <div class="item">
          <div class="team-cards">
            <div class="col-md-6">
              <div class="team-card">
                <div class="team-imgs">
                  <div class="team-img">
                    <img src="{{asset('assets/img/home/testimonial-img1.svg')}}" />
                    <div>
                      <p>Julia William</p>
                      <span>Selling Agents</span>
                    </div>
                  </div>
                  <img src="{{asset('assets/img/home/testimonial-quote.svg')}}"/>

                </div>
                <div>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                </div>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="team-card">
                <div class="team-imgs">
                  <div class="team-img">
                    <img src="{{asset('assets/img/home/testimonial-img2.svg')}}" />
                    <div>
                      <p>Julia William</p>
                      <span>Selling Agents</span>
                    </div>
                  </div>
                  <img src="{{asset('assets/img/home/testimonial-quote.svg')}}"/>

                </div>
                <div>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                  <span class="testimonial-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="testimonial-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                </div>
              </div> 
            </div> 
          </div>
        </div>
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
    <div class="top-cards">
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
