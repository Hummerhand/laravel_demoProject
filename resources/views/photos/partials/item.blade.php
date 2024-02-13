@foreach($photos as $key => $photo)

    <div class=" {{ $key == 0 ? 'col-sm-8 col-md-6 px-0' : 'col-sm-4 col-md-3 px-0'}}">

            <div class="img-box">
                <img src="/storage/photos/{{ $photo->image }}" alt="">
                <a href="/storage/photos/{{ $photo->image }}" data-toggle="lightbox" data-gallery="gallery">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </a>

                <a href="{{ route('photos.show', $photo->id) }}">
                    {{ __("Read More") }}
                </a>
            </div>

    </div>
@endforeach
