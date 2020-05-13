<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/ico" href="{!! asset('favicon.ico') !!}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/vue-style.css') }}"> --}}

    <title> @yield('title') </title>
  </head>
  <body>

    @include('shared.navbar')

    @yield('content')

    <!-- App JS -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

     @include('sweet::alert')
  </body>
</html>
