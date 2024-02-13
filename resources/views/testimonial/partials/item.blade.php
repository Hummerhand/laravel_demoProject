@foreach($testimonials as $key => $testimonial)

    <div class="{{ $key == 0 ? 'carousel-item active' : 'carousel-item' }}">
        <div class="row">

            <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box" style="width: inherit">
                    <div class="img-box">
                        <img src="/assets/images/{{ $testimonial->thumbnail }}" />
                    </div>
                    <div class="detail-box" style="width: 100%">
                        <div class="name">
                            <h6>
                                {{ $testimonial->fullName }}
                            </h6>
                        </div>
                        <p>
                            {!! $testimonial->description !!}
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endforeach
