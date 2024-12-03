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
    <div class="contact-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="section-heading">
                                <h6>Login</h6>
                            </div>
                            <div class="col-lg-12">
                                <form id="contact-form" action="{{ route('postlogin') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        {{-- <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name"
                                                    placeholder="Your Name..." autocomplete="on">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="surname" name="surname" id="surname"
                                                    placeholder="Your Surname..." autocomplete="on">
                                                @error('surname')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </fieldset>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                    placeholder="Your E-mail..."="">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </fieldset>
                                        </div>
                                        <fieldset>
                                            <input type="password" name="password" id="password"
                                                placeholder="Your password..." autocomplete="on">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </fieldset>
                                        {{-- <div class="col-lg-6">
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                                    autocomplete="on">
                                                @error('subject')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </fieldset>
                                        </div> --}}
                                        {{-- <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                                @error('message')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </fieldset>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="orange-button">Login</button>
                                            </fieldset>
                                            <fieldset>
                                                <p>Create Account <a href="{{route('user.registration')}}">new registration</a></p>
                                            </fieldset>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('front.layers.composer.footer')

    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('assets/js/counter.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
</body>
</html>
