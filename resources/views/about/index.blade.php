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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="{{ route('about') }}">
                        {{__("Read More")}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->
