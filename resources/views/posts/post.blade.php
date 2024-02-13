@extends('layout.app')

@section('title', 'Posts')

@section('content')

    @include('layout.partials.header')

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Posts
                </h2>
            </div>

            <div class="row">
                @include('posts.partials.item', compact('posts'))
            </div>

            <div class="box">
                <a href="{{ route('home') }}">
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
