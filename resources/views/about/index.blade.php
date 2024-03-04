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
                        {{ $about->preview }}
                    </p>
                    <a href="{{ route('about.about', $about->id) }}">
                        {{__("Read More")}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->
