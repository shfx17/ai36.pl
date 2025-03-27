<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="author" content="InsiteMedia"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="description" content="Kompedium wiedzy o 36 narzędziach AI, prompty oraz jak wdrożyć AI w swój biznes."/>
        <title> Kompedium wiedzy o 36 narzędziach AI </title>
        <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet"/>
        <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    </head>
    <body class="body-scroll">

        @yield('content')

        <script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
    </body>
</html>
