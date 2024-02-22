@extends('layout.app')

@section('title', $post->title)

@section('content')

    @include('layout.partials.header')

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    {{ $post->title }}
                </h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">

                            <img src="/storage/posts/{{ $post->thumbnail }}">

                        </div>
                        <div class="detail-box">
                            <p>
                                {!! $post->description !!}
                            </p>

                            <a href="{{ route('posts.post') }}">
                                {{ __("Back") }}
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div>
                <section class="rounded-b-lg mt-4">
                    <form action="{{ route('comment', $post->id) }}" method="post">

                        @csrf

                        <textarea name="text" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl @error('text') border-red-800 @enderror" placeholder="Ваш комментарий..." spellcheck="false"></textarea>

                        @error('text')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">{{ __('Написать') }}</button>
                    </form>

                    <div id="task-comments" class="pt-4">

                        @foreach($post->comments as $comment)

                            <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                                <div class="flex flex-row justify-center mr-2">
                                    <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $comment->user->name }}</h3>
                                </div>


                                <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->text }}</p>
                            </div>

                        @endforeach
                    </div>
                </section>

            </div>

        </div>
    </section>


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
