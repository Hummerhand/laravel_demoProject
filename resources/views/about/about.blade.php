@extends('layout.app')

@section('title', 'О Нас')

@section('content')


  <!-- about section -->

  <section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="/storage/abouts{{ $about->thumbnail }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                  {{ $about->title }}
              </h2>
            </div>
            <p>
                {{ $about->discription }}
            </p>
            <a href="{{ route('home') }}">
              {{ __("Back") }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


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
