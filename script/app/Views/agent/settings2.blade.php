@extends('theme::layouts.app2')

@section('title', 'Edit Profile')

@section('content')
    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)"
        data-color-opacity="0.8" data-img-width="800" data-img-height="505">
        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>My Profile</h2>
                        @if (Auth::user()->role_id == 2)
                            <span>(Agent)</span>
                        @elseif(Auth::user()->role_id == 3)
                            <span>(Customer)</span>
                        @endif
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>My Profile</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <!-- Widget -->
            @php
                $info = json_decode(Auth::User()->usermeta->content ?? '');
            @endphp
            @include('view::layouts.agent.partials.sidebar2')
            <div class="col-md-9">
                <div class="utf-user-profile-item">
                    <form action="{{ route('agent.profile.settings.update') }}" method="POST">
                        @csrf
                        <div class="utf-submit-page-inner-box">
                            <h3>My Account</h3>
                            <div class="content with-padding">
                                <div class="col-md-6">
                                    <label>Your Name</label>
                                    <input name="name" value="{{ Auth::User()->name }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Your Title</label>
                                    <input name="title" value="Agent In Afghanistan" disabled type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Phone Number</label>
                                    <input name="phone" value="{{ $info->phone ?? '' }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Email Address</label>
                                    <input name="email" value="{{ Auth::User()->email }}" type="text">
                                </div>
                                <div class="col-md-12 margin-bottom-0">
                                    <label>Address</label>
                                    <textarea name="address" id="about" cols="20"
                                        rows="5">{{ $info->address ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="utf-submit-page-inner-box">
                            <h3>Social Accounts</h3>
                            <div class="content with-padding">
                                <div class="col-md-6">
                                    <label><i class="icon-brand-facebook"></i> Facebook</label>
                                    <input name="facebook" value="{{ $info->facebook ?? '' }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label><i class="icon-brand-twitter"></i> Twitter</label>
                                    <input name="twitter" value="{{ $info->twitter ?? '' }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label><i class="icon-brand-linkedin"></i> Linkedin</label>
                                    <input name="linkedin" value="{{ $info->linkedin ?? '' }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label><i class="icon-brand-youtube"></i> Youtube</label>
                                    <input name="youtube" value="{{ $info->youtube ?? '' }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label><i class="icon-brand-pinterest"></i> Pinterest</label>
                                    <input name="pinterest" value="{{ $info->pinterest ?? '' }}" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label><i class="icon-feather-instagram"></i> Instagram</label>
                                    <input name="instagram" value="{{ $info->instagram ?? '' }}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="utf-centered-button button margin-top-0 margin-bottom-20">Save
                                    Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('js')
    <script src="{{ asset('admin/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ theme_asset('jomidar/public/assets/js/agent/settings.js') }}"></script>
@endpush --}}
