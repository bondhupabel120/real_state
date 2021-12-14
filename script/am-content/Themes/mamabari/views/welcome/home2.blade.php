@extends('theme::layouts.app2')

@section('content')
<!-- Banner -->
  {{-- <div class="parallax" data-background="{{ url('script/am-content/Themes/jomidar/public/assets2/images/home-parallax-1.jpg') }}" data-color="#36383e" data-color-opacity="0.72" data-img-width="2500" data-img-height="1600"> --}}
    <div class="parallax" style="background-image: url({{ theme_asset('jomidar/public/assets2/images/home-parallax-1.jpg') }})" data-color="#36383e" data-color-opacity="0.72" data-img-width="2500" data-img-height="1600">
        <div class="utf-parallax-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 fullwidth-bcolor">
                        <div class="utf-main-search-container-area">
                            <!-- <div class="utf-banner-headline-text-part">
                            <h2>Best Place To Find <span class="typed-words"></span></h2>
                            <span>From as low as BDT - 10 per day with limited time offer discounts.</span>
                            </div> -->
                            @php
                                $statuses = App\Category::where('type','status')->where('featured',1)->take(4)->get();
                                $categories = App\Category::where('type','category')->get();
                                $states = App\Category::where('type','states')->where('status', 1)->get();
                                $cities = App\Category::where('type','cities')->where('status', 1)->get();
                            @endphp
                            <form action="{{ route('search.property') }}" method="POST" class="utf-main-search-form-item">
                                @csrf
                                <h3 class="text-white pad-left pad-bottom">Search properties for sale</h3>
                                <div class="utf-search-type-block-area">
                                    <div class="search-type">
                                        <label class="active">
                                        <input class="first-tab" name="tab" checked="checked" type="radio">Buy</label>
                                        <label>
                                        <input name="tab" type="radio">Rent</label>
                                        <label>
                                        <input name="tab" type="radio">Sale</label>
                                        <div class="utf-search-type-arrow"></div>
                                    </div>
                                </div>
                                <div class="utf-main-search-box-area">
                                    <div class="row with-forms">
                                        <div class="col-md-9">
                                            <input name="search_item" type="text" class="ico-01" placeholder="Enter Keywords..." value=""/>
                                        </div>
                                        <div class="col-md-3 d-show">
                                            <button class="button"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <select name="state_id" data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <select name="city_id" data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <select data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                                        <option selected>Beds (max)</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <select data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                                        <option>Price pw (min)</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <select data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                                        <option>Price pw (max)</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <select data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                                        <option>Available date</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        </select>
                                    </div>
                                    <div class="checkboxes in-row">
                                        <input id="check-1" type="checkbox" name="check">
                                        <label for="check-1">Surrounding suburbs</label>
                                    </div>
                                    {{-- <div class="col-md-3 d-none">
                                        <button class="submit"><i class="fa fa-search"></i> Search</button>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 fullwidth-bcolor1">
                        <h3 class="text-white pad-left pad-bottom">Need a tenant?</h3>
                        <p class="pad-left" style="color: #fff;">Find a property <br> to help, or<br> list yourself</p>
                        {{-- <a href="add-new-property.html" class="button margin-top-10 margin-bottom-70">Get Started</a> --}}
                        <a href="javascript:void(0);" onclick="commingSoon()" class="button margin-top-10 margin-bottom-70">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Content -->

        <!-- featured properties area start -->
            @include('view::layouts.section.properties.featured2')
        <!-- featured properties area end -->

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

      <section class="fullwidth" data-background-color="#ffffff">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                  <h3 class="headline"><span>Most Popular Rent Properties</span> For Rent Properties</h3>
                  <div class="utf-headline-display-inner-item">Most Popular Rent Properties</div>
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
                      </div>
                      <img src="{{ theme_asset('jomidar/public/assets2/images/listing-02.jpg') }}" alt=""> </a>
                      <div class="utf-listing-content">
                        <div class="utf-listing-title">
                          <span class="utf-listing-price">BDT - 19,000/mo</span>
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
                          <span class="utf-listing-price">BDT - 13,000/mo</span>
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
                      </div>
                      <div class="utf-listing-carousel-item">
                        <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-04.jpg') }}" alt=""></div>
                        <div><img src="{{ theme_asset('jomidar/public/assets2/images/listing-04.jpg') }}" alt=""></div>
                      </div>
                      </a>
                      <div class="utf-listing-content">
                        <div class="utf-listing-title">
                          <span class="utf-listing-price">BDT - 12,000/mo</span>
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
                          <span class="utf-listing-price">BDT - 22,000/mo</span>
                          <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                          <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 Bansree, Dhaka, Bangladesh 90015</span>
                        </div>
                        <ul class="utf-listing-features">
                          <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                          <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                          <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                          <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>1530</span></li>
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

      <!-- Photo Section -->
        <div class="utf-photo-section-block">
            <div class="utf-photo-text-content white-font">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <h2>Download Browse Hundreds of Properti</h2>
                            <p>About OZBAN Real Estate Marketing helped thousands of clients to find the right property for their needs.</p>
                            <ul class="utf-download-text">
                                <li>
                                    <a href="#" class="tooltip top" title="Windows App">
                                        <i class="icon-line-awesome-windows"></i>
                                        <span>Windows</span>
                                        <p>Available Now</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltip top" title="App Store">
                                        <i class="icon-line-awesome-apple"></i>
                                        <span>App Store</span>
                                        <p>Available Now</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltip top" title="Google Play">
                                        <i class="icon-line-awesome-android"></i>
                                        <span>Google Play</span>
                                        <p>Get in On</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="download-img">
                                <img src="{{ theme_asset('jomidar/public/assets2/images/mockup3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Photo Section / End -->

      <!-- Fullwidth Section -->
      <section class="fullwidth" data-background-color="#fbfbfb">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                  <h3 class="headline"><span>What are you looking for?</span> Properties In Most Popular Places</h3>
                  <div class="utf-headline-display-inner-item">What are you looking for?</div>
                  <p class="utf-slogan-text">About OZBAN Real Estate Marketing helped thousands of clients to find the right property for their needs.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-line-awesome-building"></i></div>
                <h3>Modern Villa</h3>
                <p>About OZBAN Real Estate Marketing helped thousands of clients to find the right property for their needs.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-line-awesome-institution"></i></div>
                <h3>Family House</h3>
                <p>About OZBAN Real Estate Marketing helped thousands of clients to find the right property for their needs.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-material-outline-location-city"></i></div>
                <h3>Town House</h3>
                <p>About OZBAN Real Estate Marketing helped thousands of clients to find the right property for their needs.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-material-outline-business"></i></div>
                <h3>Apartment</h3>
                <p>About OZBAN Real Estate Marketing helped thousands of clients to find the right property for their needs.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Start Section Callout -->
      <div class="jbm-section-callout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-1 callout-section-left pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-right">
                        <div class="jbm-section-title margin-top-80 margin-bottom-80">
                            <h2>Find Your Browse Add Property</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="add-new-property.html" class="button margin-top-10">Add New Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>Find Your Browse Properti</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">Browse Properti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- End Section Callout -->

      <section class="fullwidth" data-background-color="#ffffff">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                  <h3 class="headline"><span>Most Popular Places</span> Most Popular Properties Places</h3>
                  <div class="utf-headline-display-inner-item">Most Popular Places</div>
                  <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="{{ theme_asset('jomidar/public/assets2/images/popular-location-01.jpg') }}" alt="" />
                    <div class="utf-cat-img-box-content visible">
                      <h4>Afghanistan</h4>
                      <span>14 Properties</span>
                    </div>
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="{{ theme_asset('jomidar/public/assets2/images/popular-location-02.jpg') }}" alt="" />
                    <div class="utf-cat-img-box-content visible">
                      <h4>Australia</h4>
                      <span>24 Properties</span>
                    </div>
                </a>
              </div>
              <div class="col-md-5 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="{{ theme_asset('jomidar/public/assets2/images/popular-location-03.jpg') }}" alt="" />
                    <div class="utf-cat-img-box-content visible">
                      <h4>Bangladesh</h4>
                      <span>12 Properties</span>
                    </div>
                </a>
              </div>
              <div class="col-md-5 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="{{ theme_asset('jomidar/public/assets2/images/popular-location-04.jpg') }}" alt="" />
                    <div class="utf-cat-img-box-content visible">
                      <h4>Miami</h4>
                      <span>9 Properties</span>
                    </div>
                </a>
              </div>
              <div class="col-md-4 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="{{ theme_asset('jomidar/public/assets2/images/popular-location-05.jpg') }}" alt="" />
                    <div class="utf-cat-img-box-content visible">
                      <h4>Belize</h4>
                      <span>14 Properties</span>
                    </div>
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="{{ theme_asset('jomidar/public/assets2/images/popular-location-06.jpg') }}" alt="" />
                    <div class="utf-cat-img-box-content visible">
                      <h4>Cambodia</h4>
                      <span>24 Properties</span>
                    </div>
                </a>
              </div>
            </div>
            <div class="utf-centered-button margin-top-10">
                <a href="all-categorie.html" class="button">View All Categories</a>
            </div>
         </div>
      </section>

      <!-- Fullwidth Section -->
      <section class="fullwidth" data-background-color="linear-gradient(to bottom,rgba(0,0,0,0.03) 0%,rgba(255,255,255,0))">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                  <h3 class="headline"><span>Our Blog & Articles</span> Latest Blog Post</h3>
                  <div class="utf-headline-display-inner-item">Our Blog & Articles</div>
                  <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img"> <img src="{{ theme_asset('jomidar/public/assets2/images/blog-post-01.jpg') }}" alt=""> </a>
                <div class="utf-post-content-area">
                  <h3><a href="blog_detail_right_sidebar.html">What It Really Takes to Make BDT - 100k Before You Turn 30</a></h3>
                  <ul class="utf-blog-item-post-list">
                    <li>By, Mohsin Sheikh</li>
                    <li>20 Jan, 2021</li>
                  </ul>
                  <p>Lorem Ipsum is simply dummy text of printing industry Lorem Ipsum been industry standard dummy text since book.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img"> <img src="{{ theme_asset('jomidar/public/assets2/images/blog-post-02.jpg') }}" alt=""> </a>
                <div class="utf-post-content-area">
                  <h3><a href="blog_detail_right_sidebar.html">The Best Canadian Merchant Account Providers.</a></h3>
                  <ul class="utf-blog-item-post-list">
                    <li>By, Mohsin Sheikh</li>
                    <li>20 Jan, 2021</li>
                  </ul>
                  <p>Lorem Ipsum is simply dummy text of printing industry Lorem Ipsum been industry standard dummy text since book.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img"> <img src="{{ theme_asset('jomidar/public/assets2/images/blog-post-03.jpg') }}" alt=""> </a>
                <div class="utf-post-content-area">
                  <h3><a href="blog_detail_right_sidebar.html">Hey Job Seeker, It’s Time To Get Up And Get Hired.</a></h3>
                  <ul class="utf-blog-item-post-list">
                    <li>By, Mohsin Sheikh</li>
                    <li>20 Jan, 2021</li>
                  </ul>
                  <p>Lorem Ipsum is simply dummy text of printing industry Lorem Ipsum been industry standard dummy text since book.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

@section('js')
<script>
    function commingSoon() {
        toastr.success('Coming Soon!');
    }
</script>
<script src="{{ asset('admin/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/js/home.js') }}"></script>
@endsection
