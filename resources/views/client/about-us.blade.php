@extends('client.layouts.main')
@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder" style="background-image: url('images/bg/01.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
                <h1 class="text-white mb-2">About Us</h1>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home pr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>About us</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="position-relative pb-md-0 h-100">
                    <img class="img-fluid b-radius pb-sm-6" src="{{ asset('images/about/04.jpg') }}" alt="">
                    <div class="position-absolute right-0 bottom-0 d-none d-sm-block">
                        <img class="img-fluid b-radius" src="{{ asset('images/about/05.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-title mb-4">
                    <h2 class="title">About Fizi</h2>
                    <p>Fizi is a transformative organization nestled in the heart of Nairobi, Kenya, founded in 2014 dedicated to empowering refugee children to rebuild their lives through education. With a steadfast commitment to fostering hope and resilience, Fizi provides a safe haven where these young minds can flourish. Through a holistic approach, Fizi offers educational programs tailored to meet the unique needs of refugee children, encompassing academic learning, psychosocial support, and life skills development.</p>

                </div>
                <p class="mb-4 mb-md-5">At Fizi, every child is valued and nurtured, regardless of their past experiences or circumstances. Through innovative teaching methods and a culturally sensitive curriculum, Fizi equips its students with the knowledge and skills they need to thrive in a rapidly changing world. Beyond the classroom, Fizi fosters a sense of community and belonging, creating a supportive environment where children can heal, grow, and dream of a brighter future.</p>

                <p class="mb-4 mb-md-5">Through its tireless efforts, Fizi is not just an organization; it's a beacon of hope for refugee children in Kenya, offering them a pathway to a better tomorrow. With education as its cornerstone, Fizi is building a future where every child has the opportunity to reach their full potential, regardless of the challenges they may face.</p>
            </div>
        </div>
    </div>
</section>



<section class="space-ptb bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 pb-lg-3">
                <div class="section-title text-center">
                    <h2 class="text-white">Discover What We Love to Learn and Explore!</h2>
                    <p class="lead text-white">Explore the wonderful world of learning with us at our primary school.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-n5 mt-lg-n6">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-item bg-white p-4 p-md-5 feature-item-shadow text-center h-100">
                    <div class="feature--item-icon">
                        <i class="flaticon-school-bus text-primary"></i>
                    </div>
                    <div class="feature-item-content">
                        <h4 class="mb-3">Fun School Trips</h4>
                        <p class="mb-0">Exploring new places and learning exciting things together!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-item bg-white p-4 p-md-5 feature-item-shadow text-center h-100">
                    <div class="feature--item-icon">
                        <i class="flaticon-reading-book text-primary"></i>
                    </div>
                    <div class="feature-item-content">
                        <h4 class="mb-3">Storytime Adventures</h4>
                        <p class="mb-0">Let's dive into magical worlds through stories and imagination!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item bg-white p-4 p-md-5 feature-item-shadow text-center h-100">
                    <div class="feature--item-icon">
                        <i class="flaticon-paint-palette text-primary"></i>
                    </div>
                    <div class="feature-item-content">
                        <h4 class="mb-3">Creative Arts</h4>
                        <p class="mb-0">Express yourself through colors, shapes, and lots of creativity!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <div class="section-title">
                    <h2 class="title">Our Pioneers</h2>
                    <p class="lead">Meet the amazing individuals who dreamed of creating a special place for us to learn and grow!</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="team">
                    <div class="team-img">
                        <img class="img-fluid" src="images/team/01.jpg" alt="">
                    </div>
                    <div class="team-content b-radius-top-none">
                        <h4>
                            <a href="#">Michael Bean</a>
                        </h4>
                        <span>Head teacher</span>
                        <ul class="team-social">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="team">
                    <div class="team-img">
                        <img class="img-fluid" src="images/team/02.jpg" alt="">
                    </div>
                    <div class="team-content b-radius-top-none">
                        <h4>
                            <a href="#">Manasseh Mabuya</a>
                        </h4>
                        <span>Support</span>
                        <ul class="team-social">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="team">
                    <div class="team-img">
                        <img class="img-fluid" src="images/team/03.jpg" alt="">
                    </div>
                    <div class="team-content b-radius-top-none">
                        <h4>
                            <a href="#">Paula</a>
                        </h4>
                        <span>Head of academics</span>
                        <ul class="team-social">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
