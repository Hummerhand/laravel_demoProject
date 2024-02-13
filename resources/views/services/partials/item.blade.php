
@foreach($services as $service)

    <div class="col-md-6 col-lg-4 mx-auto">
        <div class="box">
            <div class="img-box">

                    <img src="/storage/services/{{ $service->thumbnail }}">

            </div>
            <div class="detail-box">
                <h5>
                    {{ $service->title }}
                </h5>
                <p>
                    {!! $service->preview !!}
                </p>

                <a href="{{ route('services.show', $service->id) }}">
                    {{ __("Read More") }}
                </a>
            </div>
        </div>
    </div>

@endforeach
