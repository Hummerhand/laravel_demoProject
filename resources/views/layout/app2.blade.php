<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title')</title>

            <link href="https://cdn.tailwindcss.com" rel="stylesheet">

        </head>

        <body>

            @yield('content')

            <script src="https://cdn.tailwindcss.com"></script>

        </body>
    </html>
