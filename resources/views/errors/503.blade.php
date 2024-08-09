<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Maintenance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons CSS -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .bg-image {
            position: relative;
            background-image: url('{{ asset('admin/images/IMG_0247.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff; /* Text color */
        }

        .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent overlay */
            z-index: 1; /* Place the overlay below the content */
        }

        .container {
            position: relative;
            z-index: 2; /* Ensure the content is above the overlay */
            text-align: center;
        }

        .logo-txt-large {
            font-size: 50px; /* Adjust the font size here */
        }

        .btn-outline-primary {
            border-color: #fff; /* Button border color */
            color: #fff; /* Button text color */
        }

        .btn-outline-primary:hover {
            background-color: #fff; /* Button background color on hover */
            color: #000; /* Button text color on hover */
        }
    </style>
</head>

<body>
    <!-- Page background -->
    <div class="bg-image">
        <div class="container">
            <div class="mb-4">
                <a href="#">
                    <span class="logo-txt text-light logo-txt-large">Fizi School</span>
                </a>
            </div>
            <h3 class="mt-4 text-light">Site is Under Maintenance</h3>
            <p>We're currently undergoing maintenance to improve our website. In the meantime, you can still reach out to us for any urgent inquiries or assistance.</p>
            
            <p>Please contact us at <a href="mailto:contact@fizischool.com">contact@fizischool.com</a> or call us at (+254)(0)757 205 459.</p>
        </div>
    </div>
    <!-- end -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('admin/libs/pace-js/pace.min.js') }}"></script>
</body>
</html>
