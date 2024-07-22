     <!-- <header>
         <div class="menuSec wow fadeInDown" data-wow-duration="2s">
            <div class="container">
               <div class="row" style="align-items: center;">
                  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                     <div class="header-logo">
                        <a href="{{route('webIndexPage') }}"><img src="{{ asset(getConfig('logo')) }}" alt="img" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 d-none d-md-block">
                       <ul id="menu">
                        <li><a href="{{route('webIndexPage') }}">Home</a></li>
                        <li>
                           <a href="{{route('about') }}">About Us</a>
                        </li>
                        <li><a href="{{route('service') }}"> Our Services </a></li>
                        <li><a href="{{route('gallery') }}">Gallery</a></li>
                        <li><a href="{{route('supplier') }}">Supplier</a></li>
                        <li><a href="{{route('contactUsPage')}}">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-12">
                     <div class="menusec-btn">
                        <a href="{{route('contactUsPage')}}" class="theme-btn-1">Get Estimate <span> <img src="{{asset('web-assets/images/button-arrow.jpg')}}" alt="img"> </span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header> -->


      <header>
      <div class="topSec"></div>
      <div class="menuSec wow fadeInLeft">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
              <a href="{{route('webIndexPage') }}">
                <img src="{{asset(getConfig('logo'))}}" alt="img">
              </a>
            </div>
            <div class="col-md-7 d-none d-md-block">
              <ul id="menu">
                <li>
                  <a href="{{route('webIndexPage') }}">HOME</a>
                </li>
                <li>
                  <a href="{{route('service') }}">SERVICES</a>
                </li>
                <li>
                  <a href="{{route('service') }}">CUSTOMERS</a>
                </li>
                <li>
                  <a href="{{route('service') }}">PRICING</a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-right">
              <div class="ankar">
                <a href="{{route('contactUsPage') }}">Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>