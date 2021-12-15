@extends('theme::layouts.app2')

@section('title', 'Create Property')

@section('content')
<link rel="stylesheet" href="{{asset('admin/css/image_uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Wrapper -->
    <div id="wrapper">

        <!-- Titlebar -->
        <div class="parallax titlebar" data-background="images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)"
            data-color-opacity="0.8" data-img-width="800" data-img-height="505">
            <div id="titlebar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Add New Property</h2>
                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>Add New Property</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .chosen-container-single .chosen-single span {
                color: #181818!important;
            }
            .checkboxes.in-row label {
                color: #0a0a0a!important;
            }
        </style>
        <!-- Content -->
        <div class="container">
            <div class="row">
                @include('view::layouts.agent.partials.sidebar2')
                <!-- Submit Page -->
                <div class="col-md-9">
                    <div class="submit-page">
                        <!-- Section -->
                        <form action="{{ route('agent.property.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="utf-submit-page-inner-box">
                                <h3>Property Basic Information</h3>
                                <div class="content with-padding">
                                    <div class="col-md-12">
                                        <h5>Property Title</h5>
                                        <input name="title" class="search-field" placeholder="Property Title" type="text" />
                                    </div>

                                    <?php
                                    $features = \App\PostCategory::with('category')->where('type','features')->get()->unique('category_id');
                                    $statuses = \App\PostCategory::with('category')->where('type','status')->get();
                                    $facilities=\App\Category::where('type','facilities')->get();
                                     ?>
                                    <div class="col-md-6">
                                        <h5>Status</h5>
                                        <select name="status[]" class="utf-chosen-select-single-item">
                                            <option label="blank"></option>
                                            @foreach($statuses as $status)
                                            <option value="{{$status->category_id}}">{{$status->category->name}}</option>
                                            @endforeach
                                            {{-- <option>For Rent</option> --}}
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <h5>Type</h5>
                                        <?php
                                            $categories=DB::table('categories')->where('type','category')->get();
                                        ?>
                                        <select name="category[]" class="utf-chosen-select-single-item">
                                            @foreach($categories as $row)
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <h5>Price</h5>
                                        <div class="select-input disabled-first-option">
                                            <input name="min_price" type="text" placeholder="00000" data-unit="USD">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <h5>Area</h5>
                                        <div class="select-input disabled-first-option">
                                            <input name="area" type="text" placeholder="00000" data-unit="Sq Ft">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <h5>Rooms</h5>
                                        <select name="room" class="utf-chosen-select-single-item">
                                            <option label="blank"></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>More than 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="utf-submit-page-inner-box">
                                <h3>Property Gallery</h3>
                                <div class="content with-padding">
                                    <div class="col-md-12 submit-section">
                                        <div 
                                            class="image-uploader"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Section / End -->
                            <?php
                                $states = App\Category::where('type','states')->where('status', 1)->get();
                                $cities = App\Category::where('type','cities')->where('status', 1)->get();
                            ?>
                            <!-- Section -->
                            <div class="utf-submit-page-inner-box">
                                <h3>Property Location</h3>
                                <div class="content with-padding">
                                    <div class="col-md-6">
                                        <h5>Address</h5>
                                        <input name="address" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>State</h5>
                                        <select name="state[]" id="" class="form-control">
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>City Name</h5>
                                        <select name="city" id="" class="form-control">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Zip-Code</h5>
                                        <input name="zip_code" type="text" placeholder="000000">
                                    </div>
                                </div>
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="utf-submit-page-inner-box">
                                <h3>Property Information</h3>
                                <div class="content with-padding">
                                    <div class="col-md-12">
                                        <h5>Property Description</h5>
                                        <textarea name="property_description" cols="20" rows="2" id="summary"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Building Age</h5>
                                        <select name="building_age" class="utf-chosen-select-single-item">
                                            <option label="blank"></option>
                                            <option>0 - 1 Years</option>
                                            <option>0 - 5 Years</option>
                                            <option>0 - 10 Years</option>
                                            <option>0 - 20 Years</option>
                                            <option>0 - 50 Years</option>
                                            <option>50 + Years</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <h5>Bed Rooms</h5>
                                        <select name="input_option[]" class="utf-chosen-select-single-item">
                                            <option label="blank"></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <h5>Bath Rooms</h5>
                                        <select name="input_option[]" class="utf-chosen-select-single-item">
                                            <option label="blank"></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <h5 class="margin-top-15">Other Features <span>(optional)</span></h5>
                                        <div class="checkboxes in-row margin-bottom-20">
                                            @foreach($features as $feature)
                                            <input name="features[]" value="{{$feature->category_id}}" id="check{{$feature->category_id}}" type="checkbox">
                                            <label for="check{{$feature->category_id}}">{{$feature->category->name}}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="margin-top-15">Facilities</h5>
                                        <div class="checkboxes in-row margin-bottom-20">
                                            @foreach($facilities as $facility)
                                            <input name="facilities[]" value="{{$facility->id}}" id="facility{{$facility->id}}" type="checkbox">
                                            <label for="facility{{$facility->id}}">{{$facility->name}}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="utf-submit-page-inner-box">
                                <h3>Property Contact Details</h3>
                                <div class="content with-padding">
                                    <div class="col-md-4">
                                        <h5>Full Name</h5>
                                        <input name="full_name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Email Address</h5>
                                        <input name="email" type="text" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Phone Number</h5>
                                        <input name="phone" type="text" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="utf-centered-button button">Submit Property</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script src="{{ theme_asset('jomidar/public/assets2/scripts/dropzone.js') }}"></script> -->
        
        {{-- <script>
            $(".dropzone").dropzone({
                dictDefaultMessage: "<i class='sl sl-icon-cloud-upload'></i> Drag & Drop Files Here",
            });
        </script> --}}
        
    @endsection

    @section('js')
    <script src="{{asset('admin/js/image_uploader.min.js')}}"></script>
    <script>
           $(".image-uploader").imageUploader();
        </script>
        <script>
            function commingSoon() {
                toastr.success('Coming Soon!');
            }
        </script>
    @endsection
