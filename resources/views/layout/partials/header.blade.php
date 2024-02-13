<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('home') }}">
              <span>
                {{ __("Samat's product") }}
              </span>
            </a>
            <div class="" id="">

                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>
                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="{{ route('home') }}">{{ __('Home') }}</a>
                            <a href="{{ route('about') }}">{{ __('About') }}</a>
                            <a href="{{ route('photos.photo') }}">{{ __('Gallery') }}</a>
                            <a href="{{ route('services.service') }}">{{ __('Service') }}</a>
                            <a href="blog.html">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->