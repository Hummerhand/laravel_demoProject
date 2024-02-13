<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/gif" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">


        <title>@yield('title')</title>

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

        <!-- lightbox Gallery-->
        <link rel="stylesheet" href="{{ asset('assets/css/ekko-lightbox.css') }}" />

        <!-- font awesome style -->
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    </head>

    <body>

        @yield('content')

        <!-- jQery -->
        <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <!-- lightbox Gallery-->
        <script src="{{ asset('assets/js/ekko-lightbox.min.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    </body>

</html>
