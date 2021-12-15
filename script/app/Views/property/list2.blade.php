@extends('theme::layouts.app2')
@push('css')
<link rel="stylesheet" href="{{ theme_asset('jomidar/public/assets/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
 <!-- hero area start -->
 <section>
    <div class="hero-area hero-demo-2 breadcrumb" style="background-image: url('{{ breadcrumb() }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-start text-center">
                        <div class="breadcrumb-content">
                            <h2>{{ __('Property lists') }}</h2>
                            <div class="breadcrumb-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                        <li><span class="iconify" data-icon="ri:arrow-right-s-line" data-inline="false"></span></li>
                                        <li>{{ __('Property lists') }}</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero area end -->


<section class="fullwidth" data-background-color="#fbfbfb">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
              <h3 class="headline"><span>Most Popular Sale Properties</span> For Sale Properties</h3>
              <div class="utf-headline-display-inner-item">Most Popular Sale Properties</div>
              <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
            </div>
          </div>

          <!-- Carousel -->
          <div class="col-md-12">
            <div class="carousel">
              <div class="utf-carousel-item-area">
                <div class="utf-listing-item">
                  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item">
                    <span class="featured">Featured</span>
                    <span class="for-sale">For Sale</span>
                  </div>
                  <div class="utf-listing-img-content-item">
                    <img class="utf-user-picture" src="{{ theme_asset('jomidar/public/assets2/images/user_1.jpg') }}" alt="user_1" />
                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    <span class="video-button with-tip" data-tip-content="Video"></span>
                  </div>
                  <div class="utf-listing-carousel-item">
                    <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-01.jpg') }}" alt=""></div>
                    <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-01.jpg') }}" alt=""></div>
                    <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-01.jpg') }}" alt=""></div>
                  </div>
                  </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
                      <span class="utf-listing-price">BDT - 22,000/mo</span>
                      <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 Bansree, Dhaka, Bangladesh 90015</span>
                    </div>
                    <ul class="utf-listing-features">
                      <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                      <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                      <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                      <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> Mohsin Sheikh</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
              </div>

              <div class="utf-carousel-item-area">
                <div class="utf-listing-item"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item">
                    <span class="for-rent">For Rent</span>
                  </div>
                  <div class="utf-listing-img-content-item">
                    <img class="utf-user-picture" src="{{ theme_asset('jomidar/public/assets2/images/user_1.jpg') }}" alt="user_1" />
                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    <span class="video-button with-tip" data-tip-content="Video"></span>
                  </div>
                  <img src="{{ theme_asset('jomidar/public/assets2/images/listing-02.jpg') }}" alt=""> </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
                      <span class="utf-listing-price">BDT - 18,000/mo</span>
                      <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 Bansree, Dhaka, Bangladesh 90015</span>
                    </div>
                    <ul class="utf-listing-features">
                      <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                      <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                      <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                      <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> Mohsin Sheikh</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
              </div>

              <div class="utf-carousel-item-area">
                <div class="utf-listing-item"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item">
                    <span class="featured">Featured</span>
                    <span class="for-rent">For Rent</span>
                  </div>
                  <div class="utf-listing-img-content-item">
                    <img class="utf-user-picture" src="{{ theme_asset('jomidar/public/assets2/images/user_1.jpg') }}" alt="user_1" />
                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    <span class="video-button with-tip" data-tip-content="Video"></span>
                  </div>
                  <img src="{{ theme_asset('jomidar/public/assets2/images/listing-03.jpg') }}" alt=""> </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
                      <span class="utf-listing-price">BDT - 25,000/mo</span>
                      <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 Bansree, Dhaka, Bangladesh 90015</span>
                    </div>
                    <ul class="utf-listing-features">
                      <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                      <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                      <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                      <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> Mohsin Sheikh</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
              </div>

              <div class="utf-carousel-item-area">
                <div class="utf-listing-item"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item">
                    <span class="for-sale">For Sale</span>
                  </div>
                  <div class="utf-listing-img-content-item">
                    <img class="utf-user-picture" src="{{ theme_asset('jomidar/public/assets2/images/user_1.jpg') }}" alt="user_1" />
                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    <span class="video-button with-tip" data-tip-content="Video"></span>
                  </div>
                  <div class="utf-listing-carousel-item">
                    <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-04.jpg') }}" alt=""></div>
                    <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-04.jpg') }}" alt=""></div>
                  </div>
                  </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
                      <span class="utf-listing-price">BDT - 16,000/mo</span>
                      <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 Bansree, Dhaka, Bangladesh 90015</span>
                    </div>
                    <ul class="utf-listing-features">
                      <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                      <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                      <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                      <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> Mohsin Sheikh</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
              </div>

              <div class="utf-carousel-item-area">
                <div class="utf-listing-item"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item">
                    <span class="for-sale">For Sale</span>
                  </div>
                  <div class="utf-listing-img-content-item">
                    <img class="utf-user-picture" src="{{ theme_asset('jomidar/public/assets2/images/user_1.jpg') }}" alt="user_1" />
                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    <span class="video-button with-tip" data-tip-content="Video"></span>
                  </div>
                  <img src="{{ theme_asset('jomidar/public/assets2/images/listing-05.jpg') }}" alt=""> </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
                      <span class="utf-listing-price">BDT - 14,000/mo</span>
                      <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 Bansree, Dhaka, Bangladesh 90015</span>
                    </div>
                    <ul class="utf-listing-features">
                      <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                      <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                      <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                      <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> Mohsin Sheikh</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
@push('js')
<script src="{{ theme_asset('jomidar/public/assets/js/property-list.js') }}"></script>
@endpush
