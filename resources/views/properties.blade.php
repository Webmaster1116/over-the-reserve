@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/about.css" />
<link rel="stylesheet" href="assets/css/properties.css" />
@section('content')
<section id="pageUrl">
    <div class="container">
        <div class="url-link"><span>Home | </span><p>Properties</p></div>
    </div>
</section>
<section id="advanceInformation">
  <div class="container">
    <div class="property information-header">
      <div class="watched-properties">
        <span class="watched-header">Advance Information</span>
        <span class="watched-header-text">About 9,620 results (0.62 seconds)</span>
      </div>
      <div>
        <select class="form-control">
          <option>Per page : 10</option>
          <option>Per page : 20</option>
          <option>Per page : 50</option>
          <option>Per page : 100</option>
        </select>
      </div>
    </div>
    <div class="filter-bar col-md-4 col-sm-12">
      <div class="information-filter">
        <div class="filter-content">
          <div class="information-filter-header"> Enter Location </div>
          <div class="filter-search-input">
            <div>
              <img src="{{asset('assets/img/properties/location.svg')}}" />
              <input class="filter-search" type="text" placeholder="Search for city, neighborhood..."/>
            </div>
            <img src="{{asset('assets/img/properties/pin.svg')}}" />
          </div>
        </div>
        <hr/>
        <div class="filter-content">
          <div class="information-filter-header"> Catagory </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Buy</span>
            </div>
            <div>2522</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Rent</span>
            </div>
            <div>4562</div>
          </div>
        </div>
        <div class="filter-content">
          <div class="information-filter-header"> Property Type </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>House</span>
            </div>
            <div>1235</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Single Family</span>
            </div>
            <div>4567</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Apartment</span>
            </div>
            <div>456</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Office Villa</span>
            </div>
            <div>1235</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Luxary home</span>
            </div>
            <div>4567</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Office Space</span>
            </div>
            <div>456</div>
          </div>
        </div>
        <div class="filter-content">
          <div class="information-filter-header"> Price Range </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Low Budget</span>
            </div>
            <div>$5,000 - $10,000</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Medium Budget</span>
            </div>
            <div>$10,000 - $30,000</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>High Budget</span>
            </div>
            <div>$30,000 Up</div>
          </div>
        </div>
        <div class="filter-content">
          <div class="information-filter-header"> Filter By Price </div>
          <div class="filter-checkbox">
            <div>
              <span>Your Range</span>
            </div>
            <div>$50 - $3430</div>
          </div>
          <!-- <input type="range" min="50" max="3430" step="any"/> -->
          <div slider id="slider-distance">
            <div>
              <div inverse-left style="width:70%;"></div>
              <div inverse-right style="width:70%;"></div>
              <div range style="left:0%;right:50%;"></div>
              <span thumb style="left:0%;"></span>
              <span thumb style="left:50%;"></span>
              <div sign style="left:0%;">
                <span id="value">50</span>
              </div>
              <div sign style="left:50%;">
                <span id="value">1715</span>
              </div>
            </div>
            <input type="range" tabindex="0" value="50" max="3430" min="50" step="1" oninput="
            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
            var children = this.parentNode.childNodes[1].childNodes;
            children[1].style.width=value+'%';
            children[5].style.left=value+'%';
            children[7].style.left=value+'%';children[11].style.left=value+'%';
            children[11].childNodes[1].innerHTML=this.value;" />
          
            <input type="range" tabindex="0" value="1715" max="3430" min="50" step="1" oninput="
            this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
            var children = this.parentNode.childNodes[1].childNodes;
            children[3].style.width=(100-value)+'%';
            children[5].style.right=(100-value)+'%';
            children[9].style.left=value+'%';children[13].style.left=value+'%';
            children[13].childNodes[1].innerHTML=this.value;" />
          </div>
        </div>
        <div class="filter-content">
          <div class="information-filter-header"> Land Area (SQFT) </div>
          <div class="filter-checkbox">
            <div>
              <span>Your Range</span>
            </div>
            <div>10sqft-1000sqft</div>
          </div>
          <!-- <input type="range" min="10" max="3430" step="any"/> -->

          <div slider id="slider-distance">
            <div>
              <div inverse-left style="width:70%;"></div>
              <div inverse-right style="width:70%;"></div>
              <div range style="left:0%;right:50%;"></div>
              <span thumb style="left:0%;"></span>
              <span thumb style="left:50%;"></span>
              <div sign style="left:0%;">
                <span id="value">10</span>
              </div>
              <div sign style="left:50%;">
                <span id="value">500</span>
              </div>
            </div>
            <input type="range" tabindex="0" value="10" max="1000" min="10" step="1" oninput="
            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
            var children = this.parentNode.childNodes[1].childNodes;
            children[1].style.width=value+'%';
            children[5].style.left=value+'%';
            children[7].style.left=value+'%';children[11].style.left=value+'%';
            children[11].childNodes[1].innerHTML=this.value;" />
          
            <input type="range" tabindex="0" value="500" max="1000" min="10" step="1" oninput="
            this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
            var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
            var children = this.parentNode.childNodes[1].childNodes;
            children[3].style.width=(100-value)+'%';
            children[5].style.right=(100-value)+'%';
            children[9].style.left=value+'%';children[13].style.left=value+'%';
            children[13].childNodes[1].innerHTML=this.value;" />
          </div>
          
        </div>
        <div class="filter-content">
          <div class="information-filter-header"> Bedroom </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Single</span>
            </div>
            <div>1235</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Double</span>
            </div>
            <div>4567</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Upto 3</span>
            </div>
            <div>456</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Upto 5</span>
            </div>
            <div>1235</div>
          </div>
        </div>
        <div class="filter-content">
          <div class="information-filter-header"> Bathroom </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Single</span>
            </div>
            <div>1235</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Double</span>
            </div>
            <div>4567</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Upto 3</span>
            </div>
            <div>456</div>
          </div>
          <div class="filter-checkbox">
            <div>
              <input class="filter-check" type="checkbox"/>
              <span>Upto 5</span>
            </div>
            <div>1235</div>
          </div>
        </div>
        <div class="filter-btn-group">
          <button class="apply-filter">Apply Filter</button>
          <button class="clear-filter">Clear Filter</button>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-12">
      <div class="col-md-6">
        <div class="top-card card ">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card ">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card ">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card ">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card1.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-sale.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-6">
        <div class="top-card card">
          <img class="card-top-img" src="{{asset('assets/img/home/top-card2.svg')}}" />
          <img class="card-status" src="{{asset('assets/img/home/card-rent.svg')}}" />
          <div class="card-body">
            <h5 class="card-title properties-card-title">Store in Woodside, Western Cape</h5>
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
      <div class="col-md-12 properties-pagination">
        <div><button class="form-control" href=""><i class="fa fa-angle-double-left"></i></button></div>
        <div><button class="form-control" href="">1</button></div>
        <div><button class="form-control" href="">2</button></div>
        <div><button class="form-control active" href="">3</button></div>
        <div><button class="form-control" href="">4</button></div>
        <div><button class="form-control" href=""><i class="fa fa-angle-double-right"></i></button></div>
      </div>
    </div>
  </div>
</section>
<section id="watchedProperties">
  <div class="container">
    <div class="property">
      <div class="watched-properties">
        <span class="watched-header">Properties you watched</span>
        <span class="watched-header-text">Modern way to find a property</span>
      </div>
      <div class="articles">
        <a href="#">See all Properties</a>
      </div>
    </div>
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
</section>
@endsection
