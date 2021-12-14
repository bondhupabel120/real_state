<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! SEO::generate(true) !!}
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="">
<meta name="theme-color" content="#e33324">
<meta name="description" content="OZBAN - Real Estate">
<meta name="keywords" content="Apartment, Estate Agency, Housing, Real Estate, Real Estate Broker, Real Estate Property, Single Property">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>:: OZBAN - Real Estate::</title>

<!--  Favicon -->
<link rel="shortcut icon" href="{{ theme_asset('jomidar/public/assets2/images/favicon.png') }}">

<!-- CSS -->
<link rel="stylesheet" href="{{ theme_asset('jomidar/public/assets2/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ theme_asset('jomidar/public/assets2/css/stylesheet.css') }}">
<link rel="stylesheet" href="{{ theme_asset('jomidar/public/assets2/css/toastr.css') }}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet">
</head>

<body>
<!-- Preloader Start -->

<!-- Preloader End -->

<!-- Wrapper -->
<div id="wrapper">
  <!-- Compare Property Widget -->

  <!-- Compare Property Widget / End -->

  <!-- Header Container -->
  <header id="header-container" class="fullwidth">
    <!-- Header -->
    <div id="header">
      <div class="container">
        <div class="left-side">
          <div id="logo"><a href="{{ route('welcome') }}"><img src="{{ theme_asset('jomidar/public/assets2/images/logo.jpg') }}" alt=""></a></div>
          <div class="mmenu-trigger">
            <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
          </div>
		  <!-- Main Navigation -->
          <nav id="navigation" class="style-1">
            <ul id="responsive">
              <li><a class="current" href="{{ route('welcome') }}">Home</a>

              </li>
              <li><a href="javascript:void(0);">Buy</a>

              </li>
              <li><a href="javascript:void(0);">Rent</a>

			  </li>
              <li><a href="javascript:void(0);">Sold</a>

              </li>
			  <li><a href="javascript:void(0);">Commercial</a>

              </li>
			  <li><a href="javascript:void(0);">Contact</a></li>
            </ul>
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="right-side">
          <div class="header-widget">
            @if (Auth::guest())
            <a href="#utf-signin-dialog-block" class="popup-with-zoom-anim log-in-button sign-in"><i class="icon-line-awesome-user"></i> <span>Sign In</span></a>
            @endif
            @if (Auth::check())
            @if (Auth::user()->role_id == 2)
            <div class="user-menu">
                <div class="user-name"><span><img src="{{ asset(Auth::user()->avatar) }}" alt=""></span><div class="user-name-title">Hi, {{ Auth::user()->name }}</div></div>
                <ul>
                  <li><a href="{{ route('agent.profile.settings') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                  <li><a href="javascript:void(0);"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
                  <li><a href="{{ route('agent.property.index') }}"><i class="sl sl-icon-docs"></i> My Property</a></li>
                  <li><a href="{{ route('agent.property.create') }}"><i class="sl sl-icon-docs"></i> New Property</a></li>
                  <li><a href="javascript:void(0);"><i class="sl sl-icon-docs"></i> Change Password</a></li>
                  <li><a href="{{ route('agent.logout') }}"><i class="sl sl-icon-power"></i> Log Out</a></li>
                </ul>
              </div>
            @elseif(Auth::user()->role_id == 3)
            <div class="user-menu">
                <div class="user-name"><span><img src="{{ asset(Auth::user()->avatar) }}" alt=""></span><div class="user-name-title">Hi, {{ Auth::user()->name }}</div></div>
                <ul>
                  <li><a href="{{ route('agent.profile.settings') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                  <li><a href="{{ route('agent.logout') }}"><i class="sl sl-icon-power"></i> Log Out</a></li>
                </ul>
              </div>
            @endif
            @endif
			{{-- <a href="#utf-signin-dialog-block" class="popup-with-zoom-anim log-in-button sign-in"><i class="icon-line-awesome-user"></i> <span>Sign In</span></a> --}}
			<a href="{{ route('agent.property.create') }}" class="button border"><i class="icon-feather-plus-circle"></i> <span>Create Property</span></a>
		  </div>
        </div>
      </div>
    </div>
  </header>
  <div class="clearfix"></div>

  @yield('content')

  <!-- Footer -->
  <div id="footer">
    <div class="container">
      <div class="row">
	    <div class="col-md-4 col-sm-12 col-xs-12">
          <a href="{{ url('/') }}"><img class="footer-logo" src="{{ theme_asset('jomidar/public/assets2/images/footer_logo.jpg') }}" alt=""></a>
          <p>About OZBAN Real Rstate Marketing helped thousands of clients to find the right property for their needs.</p>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Useful Links</h4>
          <ul class="utf-footer-links-item">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="javascript:void(0);">About Us</a></li>
            <li><a href="javascript:void(0);">Services</a></li>
            <li><a href="javascript:void(0);">Properties</a></li>
            <li><a href="javascript:void(0);">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>My Account</h4>
          <ul class="utf-footer-links-item">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">My Profile</a></li>
            <li><a href="javascript:void(0);">Add Property</a></li>
			<li><a href="javascript:void(0);">My Listing</a></li>
            <li><a href="javascript:void(0);">Favorites</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Resources</h4>
          <ul class="utf-footer-links-item">
            <li><a href="javascript:void(0);">My Account</a></li>
            <li><a href="javascript:void(0);">Support</a></li>
            <li><a href="javascript:void(0);">How It Work</a></li>
            <li><a href="javascript:void(0);">Privacy Policy</a></li>
			<li><a href="javascript:void(0);">Term & Condition</a></li>
          </ul>
        </div>
		<div class="col-md-2 col-sm-3 col-xs-6">
          <h4>Pages</h4>
          <ul class="utf-footer-links-item">
            <li><a href="javascript:void(0);">Our Partners</a></li>
            <li><a href="javascript:void(0);">How It Work</a></li>
			<li><a href="javascript:void(0);">FAQ Page</a></li>
            <li><a href="javascript:void(0);">Privacy Policy</a></li>
			<li><a href="javascript:void(0);">Term & Condition</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="copyrights">Copyright © {{ \Carbon\Carbon::now()->format('Y') }} All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
<div id="backtotop"><a href="#"></a></div>
</div>

<!-- Sign In Popup -->
<div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <div class="utf-signin-form-part">
      <ul class="utf-popup-tabs-nav-item">
        <li><a href="#login">Log In</a></li>
        <li><a href="#register">Register</a></li>
      </ul>
      <div class="utf-popup-container-part-tabs">
        <!-- Login -->
        <div class="utf-popup-tab-content-item" id="login">
          <div class="utf-welcome-text-item">
            <h3>Welcome Back Sign in to Continue</h3>
            <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span>
          </div>
          <form action="{{ route('login') }}" method="POST" id="login-form">
              @csrf
            <div class="utf-no-border">
              <input type="text" name="email" id="emailaddress" placeholder="Email Address" required/>
            </div>
            <div class="utf-no-border">
              <input type="password" name="password" id="password" placeholder="Password" required/>
            </div>
            <div class="checkbox margin-top-0">
              <input type="checkbox" id="two-step">
              <label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
            </div>
            <a href="forgot_password.html" class="forgot-password">Forgot Password?</a>
          </form>
          <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-feather-chevrons-right"></i></button>
          <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
          <div class="utf-social-login-buttons-block">
            <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
            <button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google</button>
            <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
          </div>
        </div>

        <!-- Register -->
        <div class="utf-popup-tab-content-item" id="register">
            <div class="utf-welcome-text-item">
              <h3>Create your Account!</h3>
              <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span>
            </div>
            <form action="{{ route('user.register') }}" method="POST" id="utf-register-account-form">
                @csrf
              <div class="utf-no-border margin-bottom-20">
                <select name="role_id" class="utf-chosen-select-single-item utf-with-border" title="User">
                    <option value="3">User</option>
                    <option value="2">Agent</option>
                </select>
              </div>
              <div class="utf-no-border">
                <input type="text" name="name" id="name" placeholder="User Name" required/>
              </div>
              <div class="utf-no-border">
                <input type="text" name="email" id="emailaddress-register" placeholder="Email Address" required/>
              </div>
              <div class="utf-no-border">
                <input type="password" name="password" id="password-register" placeholder="Password" required/>
              </div>
              <div class="utf-no-border">
                <input type="password" name="password_confirmation" id="password-repeat-register" placeholder="Repeat Password" required/>
              </div>
              <div class="checkbox margin-top-0">
                <input type="checkbox" name="term_condition" required id="two-step0">
                <label for="two-step0"><span class="checkbox-icon"></span> By Registering You Confirm That You Accept <a href="javascript:void(0);">Terms & Conditions</a> and <a href="javascript:void(0);">Privacy Policy</a></label>
              </div>
            </form>
            <button class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" type="submit" form="utf-register-account-form">Register <i class="icon-feather-chevrons-right"></i></button>
          </div>
      </div>
    </div>
  </div>
<!-- Sign In Popup / End -->
@php
    $get_currency_info=get_currency_info();
    $name=$get_currency_info['name'] ?? 'USD';
    $icon=$get_currency_info['icon'] ?? '$';
    $rate=$get_currency_info['rate'] ?? 1;
    $position=$get_currency_info['position'] ?? 'left';
    @endphp

    <input type="hidden" class="currency_name" value="{{ $name }}">
    <input type="hidden" class="currency_icon" value="{{ $icon }}">
    <input type="hidden" class="currency_rate" value="{{ $rate }}">
    <input type="hidden" class="currency_position" value="{{ $position }}">
    <input type="hidden" id="asset_url" value="{{ asset('/') }}">
    <input type="hidden" id="base_url" value="{{ asset('/') }}">
    <input type="hidden" value="{{ route('property.favourite') }}" id="favourite_property_url">
    <input type="hidden" id="favourite_check_url" value="{{ route('favourite.check') }}">

<!-- Scripts -->
<script src="{{ theme_asset('jomidar/public/assets2/scripts/jquery-3.3.1.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/js/helper.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/js/jquery.selectric.js') }}"></script>

<script src="{{ theme_asset('jomidar/public/assets2/scripts/bootstrap.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/chosen.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/magnific-popup.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/owl.carousel.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/rangeSlider.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/sticky-kit.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/slick.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/masonry.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/mmenu.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/tooltips.min.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/typed.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/custom_jquery.js') }}"></script>
<script src="{{ theme_asset('jomidar/public/assets2/scripts/toastr.js') }}"></script>

<script>
var typed = new Typed('.typed-words', {
	strings: ["Dream Home."," Apartments."," Residential."," Commercial."],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>
@stack('js')
@yield('js')
</body>
</html>
