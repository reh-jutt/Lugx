<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lugx Gaming - Product Detail</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/templatemo-lugx-gaming.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
{{--
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}

    @include('front.layers.composer.header')

    @yield('content')

    @include('front.layers.composer.footer')

    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('assets/js/counter.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
