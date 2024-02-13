<section class="gallery_section layout_padding2">
    <div class="container-fluid">
        <div class="heading_container heading_center">
            <h2>
                {{ __('Галерея') }}
            </h2>
        </div>
        <div class="row">

            @include('photos.partials.item', compact('photos'))

        </div>

        <div class="btn-box">
            <a href="{{ route('photos.photo') }}">
                {{ __("View All") }}
            </a>
        </div>
    </div>
</section>
