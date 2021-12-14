<div class="col-md-3">
    <div class="margin-bottom-20">
        <div class="utf-edit-profile-photo-area">
            {{-- <img src="{{ theme_asset('jomidar/public/assets2/images/agent-02.jpg') }}" alt=""> --}}
            <img src="{{ Auth::user()->avatar }}" alt="">
            <div class="utf-change-photo-btn-item">
                <div class="utf-user-photo-upload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
                    <input type="file" class="upload tooltip top" title="Upload Photo" />
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="sidebar margin-top-20">
        <div class="user-smt-account-menu-container">
            <ul class="user-account-nav-menu">
                <li><a class="{{ Request::is('agent/profile/settings') ? 'active current' : '' }}" href="{{ route('agent.profile.settings') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                @if (Auth::user()->role_id == 2)
                    <li><a href="javascript:void(0);"><i class="sl sl-icon-star"></i> Bookmark Listing</a></li>
                    <li><a class="{{ Request::is('agent/property') ? 'active current' : '' }}" href="{{ route('agent.property.index') }}"><i class="sl sl-icon-docs"></i> My Property</a></li>
                    <li><a class="{{ Request::is('agent/property/create') ? 'active current' : '' }}" href="{{ route('agent.property.create') }}"><i class="sl sl-icon-action-redo"></i> New Property</a></li>
                @endif
                <li><a href="javascript:void(0);"><i class="sl sl-icon-lock"></i> Change Password</a></li>
                <li><a href="{{ route('agent.logout') }}"><i class="sl sl-icon-power"></i> Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="widget utf-sidebar-widget-item">
        <div class="utf-detail-banner-add-section">
            <a href="javascript:void(0);">
                <img src="{{ theme_asset('jomidar/public/assets2/images/banner-add-2.jpg') }}" alt="banner-add-2">
            </a>
        </div>
    </div>
</div>

{{-- <div class="account-siderbar-area">
    <div class="author-image text-center">
        <img src="{{ asset(Auth::user()->avatar) }}" alt="">
    </div>
    <div class="author-name text-center">
        <h4>{{ Auth::user()->name }}</h4>
        <span>{{ __('Credits') }} <b>{{ Auth::user()->credits }}</b></span>
    </div>
    <div class="dashboard-menu">
        <nav>
            <ul>
                <li><a class="{{ Request::is('agent/dashboard') ? 'active' : '' }}" href="{{ route('agent.dashboard') }}"><span class="iconify" data-icon="feather:home" data-inline="false"></span> <span>{{ __('Dashboard') }}</span></a></li>

                <li><a class="{{ Request::is('agent/property*') ? 'active' : '' }}" href="{{ route('agent.property.index') }}"><span class="iconify" data-icon="teenyicons:search-property-outline" data-inline="false"></span> <span>{{ __('My properties') }}</span></a></li>
                <li><a class="{{ Request::is('agent/review') ? 'active' : '' }}" href="{{ route('agent.review.index') }}"><span class="iconify" data-icon="bx:bx-heart" data-inline="false"></span> <span>{{ __('My Reviews') }}</span></a></li>
                <li><a class="{{ Request::is('agent/favourites') ? 'active' : '' }}" href="{{ route('agent.favourite.index') }}"><span class="iconify" data-icon="bx:bx-heart" data-inline="false"></span> <span>{{ __('My Favorites') }}</span></a></li>

                <li><a class="{{ Request::is('agent/package') ? 'active' : '' }}" href="{{ route('agent.package.index') }}"><span class="iconify" data-icon="octicon:package-24" data-inline="false"></span> {{ __('Packages') }}</span></a></li>

                <li><a class="{{ Request::is('agent/agency') ? 'active' : '' }}" href="{{ route('agent.agency.index') }}"><span class="iconify" data-icon="feather:users" data-inline="false"></span>  <span>{{ __('Agency') }}</span></a></li>

                <li><a class="{{ Request::is('agent/profile/settings') ? 'active' : '' }}" href="{{ route('agent.profile.settings') }}"><span class="iconify" data-icon="ant-design:user-outlined" data-inline="false"></span> <span>{{ __('My Profile') }}</span></a></li>

                <li><a class="{{ Request::is('agent/transaction') ? 'active' : '' }}" href="{{ route('agent.transaction') }}"><span class="iconify" data-icon="uil:transaction" data-inline="false"></span> <span>{{ __('Transactions') }}</span></a></li>

                <li><a href="{{ route('agent.logout') }}"><span class="iconify" data-icon="ant-design:logout-outlined" data-inline="false"></span> <span>{{ __('Logout') }} </span></a></li>
            </ul>
        </nav>
    </div>
</div> --}}
