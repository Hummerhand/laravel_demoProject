@foreach($posts as $post)

    <div class="col-md-6 col-lg-4 mx-auto">
        <div class="box">
            <div class="img-box">
                <img src="/storage/posts/{{ $post->thumbnail }}">
            </div>
            <div class="detail-box">
                <h5>
                    {{ $post->title }}
                </h5>
                <p>
                    {!! $post->preview !!}
                </p>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ __("Read More") }}
                </a>
            </div>
        </div>
    </div>

@endforeach
