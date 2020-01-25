<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/ico" href="{!! asset('favicon.ico') !!}">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap-material-design.min.css') !!}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('css/all.min.css') !!}">

    <title> @yield('title') </title>
  </head>
  <body>
    @include('shared.navbar')

    @yield('content')

    <script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-material-design.min.js') !!}"></script>
    <script>
    $(document).ready(function() {
        $('body').bootstrapMaterialDesign();
    });
    </script>
  </body>
</html>
