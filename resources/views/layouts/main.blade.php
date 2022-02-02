<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script> <!-- Instalacion de Bootstrap@v5.1.3  - JS [laravel/ui] -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Instalacion de Bootstrap@v5.1.3 - CSS [laravel/ui] -->

        <title> @yield('title') </title>
    </head>

    <body>
        <x-header />
        <x-navbar />
        @yield('content')
    </body>
</html>