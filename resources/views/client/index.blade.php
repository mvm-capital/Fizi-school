@extends('client.layouts.main')
@section('styles')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection
@section('content')
<section class="slider-01">
    <div id="main-slider" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide align-items-center d-flex bg-overlay-dark-50" style="background-image: url(images/slider/home-01/02.jpg); background-size: cover; background-position: center center;">
                <div class="swipeinner container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-8 col-md-9 col-sm-10">
                            <div class="slider-1">
                                <h1 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="2s" data-delay="0.75s">Welcome to Fizi School</h1>
                                <p class="animated text-white" data-swiper-animation="fadeInUp" data-duration="2s" data-delay="0.75s">Fizi, founded in 2014 in Nairobi, Kenya, is dedicated to empowering refugee children through education. It provides a safe haven where young minds flourish, offering tailored educational programs that include academic learning, psychosocial support, and life skills development, fostering hope and resilience.</p>
                                <!-- <a href="#" class="animated btn btn-primary btn-round mt-2" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="2s">Donate Now</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-left"></i>
    </div>
    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-right"></i></div> -->
</section>



<section id="about-section" class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="section-title">
                    <h2 class="title">About Fizi School</h2>

                    <p>Fizi is a transformative organization nestled in the heart of Nairobi, Kenya, founded in 2014 dedicated to empowering refugee children to rebuild their lives through education. With a steadfast commitment to fostering hope and resilience, Fizi provides a safe haven where these young minds can flourish. Through a holistic approach, Fizi offers educational programs tailored to meet the unique needs of refugee children, encompassing academic learning, psychosocial support, and life skills development.</p>
                </div>
                <a href="{{route('client.about-us')}}" class="btn btn-primary btn-round">Read More</a>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img class="img-fluid b-radius" src="images/about/01.jpg" alt="">
                    <div class="position-absolute bottom-0 left-0 m-4">
                        <div class="bs-primary p-4 p-md-5">
                            <h3 class="text-white">Most people believe that success is difficult.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-lg-ptb bg-overlay-dark-80" style="background-image: url(images/bg/07.jpg); background-size: cover; background-position: center center; background-attachment: fixed;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="text-center">
                    <h2 class="text-white mb-4 display-6">We need Volunteers to support our course</h2>
                    <button type="button" class="btn btn-primary btn-round mx-0 mx-md-3" data-toggle="modal" data-target="#volunteerModal">Become a Volunteer</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 ">
                <div class="section-title text-center">
                    <h2 class="title">Latest news and inspirational stories</h2>
                    <p class="lead">Check out our latest blog post and stories</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <!-- blog-post-01 START -->
                <div class="blog-post">
                    <div class="blog-post-image">
                        <img class="img-fluid b-radius-bottom-none" src="images/blog/01.jpg" alt="">
                    </div>
                    <div class="blog-post-content b-radius-top-none">
                        <div class="blog-post-meta">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>Sept 11, 2020</a></li>
                                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(05)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog-post-date"></div>
                        <h4 class="blog-post-title"><a href="blog-detail.html">From a small startup to a leading global agency</a></h4>
                        <p>Motivation is not an accident or something that someone else can give you — you are the only one with the motivate you.</p>
                        <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-01 END -->
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- blog-post-02 START -->
                <div class="blog-post">
                    <div class="blog-post-image">
                        <img class="img-fluid b-radius-bottom-none" src="images/blog/02.jpg" alt="">
                    </div>
                    <div class="blog-post-content b-radius-top-none">
                        <div class="blog-post-meta">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>Oct 25, 2020</a></li>
                                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(01)</span></a></li>
                            </ul>
                        </div>
                        <h4 class="blog-post-title"><a href="blog-detail.html">How to stay ahead of the digital transformation</a></h4>
                        <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although successful.</p>
                        <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-02 END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- blog-post-03 START -->
                <div class="blog-post">
                    <div class="blog-post-image">
                        <img class="img-fluid b-radius-bottom-none" src="images/blog/03.jpg" alt="">
                    </div>
                    <div class="blog-post-content b-radius-top-none">
                        <div class="blog-post-meta">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>June 13, 2020</a></li>
                                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(02)</span></a></li>
                            </ul>
                        </div>
                        <h4 class="blog-post-title"><a href="blog-detail.html">Five initial steps you must do to increase your</a></h4>
                        <p>Do it today. Remind yourself of someone you know who died suddenly and the fact that there is no guarantee will come.</p>
                        <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-03 END -->
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
    <a href="{{route('client.blog')}}" class="btn btn-md btn-primary btn-round">Learn More</a>
</div>

</section>
<!---------------------------------------------------------------Modal---------------------------------------------------------------------------------------------------------- -->
<div class="modal fade" id="volunteerModal" tabindex="-1" role="dialog" aria-labelledby="volunteerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="volunteerModalLabel">Volunteer Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form content -->
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Contact</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="text-center"> <!-- Centering the button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection
