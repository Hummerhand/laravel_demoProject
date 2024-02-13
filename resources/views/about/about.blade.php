@extends('layout.app')

@section('title', 'Главная страница')

@section('content')


  <!-- about section -->

  <section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('assets/images/about-img.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                  {{ __("О НАС") }}
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur commodi nam nostrum quo sint? A, at atque dignissimos dolore, fuga impedit ipsa magnam modi nemo placeat, quos reprehenderit voluptatibus.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto atque aut consequatur corporis deleniti et hic, illum impedit ipsum laudantium molestias optio possimus qui quod, sapiente unde velit! Quae?
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
