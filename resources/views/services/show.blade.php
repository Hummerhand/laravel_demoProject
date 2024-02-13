@extends('layout.app')

@section('title', $service->title)

@section('content')

    @include('layout.partials.header')

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    {{ $service->title }}
                </h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">

                            <img src="/storage/services/{{ $service->thumbnail }}">

                        </div>
                        <div class="detail-box">
                            <p>
                                {!! $service->description !!}
                            </p>

                            <a href="{{ route('services.service') }}">
                                {{ __("Back") }}
                            </a>
                        </div>
                    </div>
                </div>

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
