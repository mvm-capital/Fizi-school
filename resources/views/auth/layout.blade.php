<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Fizi| Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">

    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons CSS -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">


    @yield('css')

</head>

<body>

    <!-- <body data-layout="horizontal"> -->

    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="{{route('auth.login')}}" class="d-block auth-logo">
                                        <span class="logo-txt">Fizi School</span>
                                    </a>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7" style="background-image: url('/admin/images/image00033.JPEG'); background-size: cover; background-position: center;">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-transparent"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">

                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                    <h5 class="mt-4 fw-medium lh-base text-white">“Fizi is a transformative organization nestled in the heart of Nairobi, Kenya, founded in 2014 dedicated to empowering refugee children to rebuild their lives through education. With a steadfast commitment to fostering hope and resilience, Fizi provides a safe haven where these young minds can flourish. Through a holistic approach, Fizi offers educational programs tailored to meet the unique needs of refugee children, encompassing academic learning, psychosocial support, and life skills development.”</h5>

                                                </div>
                                            </div>
                                            <!-- Add other carousel items here -->
                                        </div>
                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>



    @yield('scripts')
    <!-- jQuery -->
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle -->
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- MetisMenu -->
    <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>

    <!-- SimpleBar -->
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Waves -->
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>

    <!-- Feather Icons -->
    <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>

    <!-- Pace JS -->
    <script src="{{ asset('admin/libs/pace-js/pace.min.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

</body>
</html>
