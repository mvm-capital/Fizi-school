<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/gracious/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 11:13:26 GMT -->

<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="Fizi School" />
    <meta name="description" content="Fizi School Website" />
    <meta name="author" content="Manasseh Maina" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fizi School</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    @yield('styles')

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400&family=Yantramanav:wght@300;400;500;700;900&display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate/animate.min.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body>

    <header class="header header-transparent">
        <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
            <div class="container">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                <a class=" navbar-brand img-fluid logo-sticky" href="{{route('home')}}">
                    <h3>Fizi School</h3>
                </a>
                <div class="navbar-collapse collapse justify-content-center">
                    <ul class="nav navbar-nav">


                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('client.home')}}">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('client.about-us')}}">About Us</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="{{route('client.gallery')}}">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('client.blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('client.contact')}}">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                        <div class=" navbar-collapse collapse" >
                    <a class="btn btn-primary btn-round nav-item" href="{{route('client.donate')}}">Make a Donation</a>
                </div>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
    </header>
    @yield('content')
    @include('client.layouts.footer')
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('js/swiperanimation/SwiperAnimation.min.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('scripts')

</body>
