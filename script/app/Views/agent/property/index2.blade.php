@extends('theme::layouts.app2')

@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/fontawesome.min.css') }}">
@endpush

@section('title', 'All Properties')

@section('content')
    <!-- Wrapper -->
    <div id="wrapper">
        <div class="parallax titlebar" data-background="images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)"
            data-color-opacity="0.8" data-img-width="800" data-img-height="505">
            <div id="titlebar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>My Property</h2>
                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>My Property</li>
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
                @include('view::layouts.agent.partials.sidebar2')
                <div class="col-md-9">
                    <div class="col-sm-12 mt-1">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close text-dark" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    <table class="manage-table responsive-table">
                        <tr>
                            <th>Property</th>
                            <th>Date</th>
                            <th style="text-align:right">Action</th>
                        </tr>
                        <!-- Item #1 -->
                        @foreach ($posts as $row)
                            <tr>
                                <td class="utf-title-container">
                                    <img src="{{ asset($row->post_preview->media->url ?? '') }}" alt="">
                                    <div class="title">
                                        <h4><a href="javascript:void(0);">{{ $row->title }}</a></h4>
                                        <span>{{ $row->post_city->value ?? '' }}</span>
                                        <span class="table-property-price">
                                            ${{ $row->min_price->price ?? '' }} -
                                            ${{ $row->max_price->price ?? '' }}/month
                                        </span>
                                    </div>
                                </td>
                                <td class="utf-expire-date">
                                    {{ \Carbon\Carbon::parse($row->created_at)->format('d M, Y') }}</td>
                                <td class="action">
                                    {{-- <a href="javascript:void(0);" class="view tooltip left" title="View"><i class="icon-feather-eye"></i></a> --}}
                                    <a href="javascript:void(0);" class="edit tooltip left" title="Edit"><i class="icon-feather-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteConfirmation({{ $row->id }})" class="delete tooltip left" title="Delete"><i class="icon-feather-trash-2"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('agent.property.create') }}" class="utf-centered-button margin-top-30 button">Submit New Property</a>
                </div>
            </div>
        </div>
        </section>
        <!-- dashboard area end -->
    @endsection
    @push('js')
        <script src="{{ asset('admin/js/sweetalert2.all.min.js') }}"></script>
        {{-- <script src="{{ asset('admin/assets/js/custom.js') }}"></script> --}}
        <script type="text/javascript">
            function deleteConfirmation(id) {
                swal.fire({
                    title: "Are you sure?",
                    text: "You want to delete this POST!",
                    icon: "warning",
                    showCloseButton: true,
                    // showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Delete`,
                    // dangerMode: true,
                }).then((result) => {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    if (result.value == true) {
                        swal.fire({
                            title: 'Success',
                            text: 'Property is deleted Successfully!',
                            icon: 'success'
                        }).then(function() {
                            location.reload();
                            $.ajax({
                                url: "/agent/delete/property/" + id,
                                method: 'POST',
                                data: {
                                    id: id,
                                    "_token": "{{ csrf_token() }}"
                                },
                                dataType: 'json',
                                success: function(results) {
                                    if (results.success === true) {
                                        swal.fire("Done!", results.message, "success");
                                        setTimeout(function() {
                                            location.reload();
                                        }, 2000);
                                    } else {
                                        swal.fire("Error!", results.message, "error");
                                    }
                                }
                            })
                        })
                    } else if (result.value == false) {
                        swal.fire("Cancelled", "Property is safe :)", "error");
                    }
                })
            }
        </script>
    @endpush
