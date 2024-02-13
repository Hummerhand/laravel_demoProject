@extends('layout.app')

@section('title', $photo->name)

@section('content')

    @include('layout.partials.header')

    <section class="gallery_section layout_padding2">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2>
                    {{ $photo->name }}
                </h2>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-3 px-0">
                    <div class="box">
                        <div class="img-box">

                            <img src="/storage/photos/{{ $photo->image }}">

                        </div>
                    </div>
                </div>

            </div>
            
            <div class="btn-box">
                <a href="{{ route('photos.photo') }}">
                    {{ __("Back") }}
                </a>
            </div>

        </div>
    </section>


    @include('layout.partials.info')

    @include('layout.partials.footer')


    <!-- jQery -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <!-- lightbox Gallery-->
    <script src="{{ asset('assets/js/ekko-lightbox.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

@endsection
