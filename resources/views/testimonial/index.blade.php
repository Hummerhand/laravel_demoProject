
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                {{ __('Отзывы') }}
            </h2>
        </div>
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


                        @include('testimonial.partials.item', compact('testimonials'))



            </div>
            <div class="carousel_btn-container">
                <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
