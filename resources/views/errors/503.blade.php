<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Maintenance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->


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
            background-image: url('/admin/images/IMG_0247.JPG');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            /* Text color */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Semi-transparent overlay */
            z-index: 1;
            /* Place the overlay below the content */
        }

        .container {
            position: relative;
            z-index: 2;
            /* Ensure the content is above the overlay */
            text-align: center;
        }

        .logo-txt-large {
            font-size: 50px;
            /* Adjust the font size here */
        }

        .btn-outline-primary {
            border-color: #fff;
            /* Button border color */
            color: #fff;
            /* Button text color */
        }

        .btn-outline-primary:hover {
            background-color: #fff;
            /* Button background color on hover */
            color: #000;
            /* Button text color on hover */
        }


        .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Semi-transparent overlay */
            z-index: 1;
            /* Place the overlay below the content */
        }

        .container {
            position: relative;
            z-index: 2;
            /* Ensure the content is above the overlay */
            text-align: center;
        }

        .logo-txt-large {
            font-size: 50px;
            /* Adjust the font size here */
        }

        .btn-outline-primary {
            border-color: #fff;
            /* Button border color */
            color: #fff;
            /* Button text color */
        }

        .btn-outline-primary:hover {
            background-color: #fff;
            /* Button background color on hover */
            color: #000;
            /* Button text color on hover */
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
            <div class="countdown">

                <div id="timer">
                    <div id="days">00</div> Days
                    <div id="hours">00</div> Hours
                    <div id="minutes">00</div> Minutes
                    <div id="seconds">00</div> Seconds
                </div>
            </div>
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
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Aug 15, 2024 15:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get the current date and time
            var now = new Date().getTime();

            // Calculate the remaining time
            var distance = countDownDate - now;

            // Time calculations
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the countdown is over, display a message
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").innerHTML = "Maintenance completed!";
            }
        }, 1000);
    </script>
</body>

</html>
