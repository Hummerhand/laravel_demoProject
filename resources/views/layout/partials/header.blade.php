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

                            <a href="{{ route('photos.photo') }}">{{ __('Gallery') }}</a>
                            <a href="{{ route('services.service') }}">{{ __('Service') }}</a>
                            @auth('web')
                                <a href="{{ route('logout') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">{{ __('Выйти') }}</a>
                            @endauth

                            @guest('web')
                                <a href="{{ route('login') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">{{ __('Войти') }}</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->
