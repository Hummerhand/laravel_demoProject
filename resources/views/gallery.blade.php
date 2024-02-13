@extends('layout.app')

@section('title', 'Главная страница')

@section('content')



  <!-- photos section -->

  <div class="gallery_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Gallery
        </h2>
      </div>
      <div class="row">
        <div class=" col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/g1.jpg') }}" alt="">
            <a href="{{ asset('assets/images/g1.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/g2.jpg') }}" alt="">
            <a href="{{ asset('assets/images/g2.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/g3.jpg') }}" alt="">
            <a href="{{ asset('assets/images/g3.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/g4.jpg') }}" alt="">
            <a href="{{ asset('assets/images/g4.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/g5.jpg') }}" alt="">
            <a href="{{ asset('assets/images/g5.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('assets/images/g6.jpg') }}" alt="">
            <a href="{{ asset('assets/images/g6.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="{{ route('home') }}">
            {{__('Back')}}
        </a>
      </div>
    </div>
  </div>

  <!-- end photos section -->


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
