
<section class="blog_section ">
    <div class="container-fluid">
        <div class="heading_container">
            <h2>
                {{ __("Статьи") }}
            </h2>
        </div>
        <div class="row">

            @include('posts.partials.item', compact('posts'))

        </div>
    </div>
</section>

