@extends('layout.app')

@section('title', 'Service OD')

@section('content')

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    {{__("Service OD")}}
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/s3.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{__("Office Decoration")}}
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio aspernatur officiis exercitationem asperiores praesentium
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae consequatur ducimus est minus, nemo pariatur quaerat qui reprehenderit voluptas? A aliquid facilis fugiat itaque, obcaecati quod reprehenderit saepe vel.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium at commodi consequuntur eaque eius eum explicabo illo, magnam mollitia, natus nulla pariatur, quasi quis ratione repellat sunt ut veritatis?
                            </p>
                            <a href="{{ route('home') }}">
                                {{__('Back')}}
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- end service section -->

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
