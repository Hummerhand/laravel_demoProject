<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                {{ __('Сервисы') }}
            </h2>
        </div>

        <div class="row">

            @include('services.partials.item', compact('services'))

        </div>



    </div>
</section>
