@extends('theme::layouts.app2')
@push('css')
    <link rel="stylesheet" href="{{ theme_asset('jomidar/public/assets/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    <section class="fullwidth" data-background-color="#ffffff">
        <div id="featured_properties">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                            <h3 class="headline"> Search Result</h3>
                        </div>
                    </div>

                    <div id="latest_data">
                        <div class="col-md-12">
                            <div class="carousel">
                                @foreach ($posts as $post)
                                    <div class="utf-carousel-item-area">
                                        <div class="utf-listing-item">
                                            <a href="{{ route('property.show',['slug'=>$post->slug]) }}" class="utf-smt-listing-img-container">
                                                <div class="utf-listing-badges-item">
                                                    <span class="featured">Featured</span>
                                                    <span class="for-sale">For Sale</span>
                                                </div>
                                                <div class="utf-listing-img-content-item">
                                                    <img class="utf-user-picture" src="{{ asset($post->post_preview->media->url ?? '') }}" alt="user_1" />
                                                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                                                    <span class="compare-button with-tip"
                                                        data-tip-content="Add to Compare"></span>
                                                    <span class="video-button with-tip" data-tip-content="Video"></span>
                                                </div>
                                                <div class="utf-listing-carousel-item">
                                                    <div><img src="{{ asset($post->post_preview->media->url ?? '') }}" alt=""></div>
                                                    <div><img src="{{ asset($post->post_preview->media->url ?? '') }}" alt=""></div>
                                                    <div><img src="{{ asset($post->post_preview->media->url ?? '') }}" alt=""></div>
                                                </div>
                                            </a>
                                            <div class="utf-listing-content">
                                                <div class="utf-listing-title">
                                                    <span class="utf-listing-price">BDT - ৳{{ $post->min_price->price ?? '' }} - ৳{{ $post->max_price->price ?? '' }}/mo</span>
                                                    <h4><a href="{{ route('property.show',['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                                                    </h4>
                                                    <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i>  {{ $post->post_city->value ?? '' }}  </span>
                                                </div>
                                                <ul class="utf-listing-features">
                                                    <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                                                    <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                                                    <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                                                    <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                                                </ul>
                                                <div class="utf-listing-user-info"><a href="asset_urlagent/value.user.slug/show">
                                                    <i class="icon-line-awesome-user"></i> {{ $post->user->name ?? '' }}</a>
                                                    <span>{{ \Carbon\Carbon::parse($post->created_at)->diff(\Carbon\Carbon::now())->format('%m month %d')}} Days Ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <input type="hidden" value="{{ route('latest.property') }}" id="f_properties_url"> --}}
        </div>
    </section>
@endsection
