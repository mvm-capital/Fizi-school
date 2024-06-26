@extends('client.layouts.main')
@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-70 bg-holder" style="background-image: url(images/bg/12.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
                <h1 class="text-white mb-2">Blog</h1>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('client.home')}}"><i class="fa fa-home pr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Blog</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
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
                        <a href="{{route('client.blog_detail')}}" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-01 END -->
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <!-- blog-post-04 START -->
                <div class="blog-post mb-0">
                    <div class="blog-post-image">
                        <img class="img-fluid b-radius-bottom-none" src="images/blog/04.jpg" alt="">
                    </div>
                    <div class="blog-post-content b-radius-top-none">
                        <div class="blog-post-meta">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>Aug 17, 2020</a></li>
                                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(08)</span></a></li>
                            </ul>
                        </div>
                        <h4 class="blog-post-title"><a href="blog-detail.html">A digital marketing company you can trust</a></h4>
                        <p>So, how can we stay on course with all the distractions in our lives? Willpower is a good start, but it’s very difficult.</p>
                        <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-04 END -->
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <!-- blog-post-05 START -->
                <div class="blog-post mb-0">
                    <div class="blog-post-image">
                        <img class="img-fluid b-radius-bottom-none" src="images/blog/05.jpg" alt="">
                    </div>
                    <div class="blog-post-content b-radius-top-none">
                        <div class="blog-post-meta">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>Step 02, 2020</a></li>
                                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(04)</span></a></li>
                            </ul>
                        </div>
                        <h4 class="blog-post-title"><a href="blog-detail.html">Transforming technology divisions into possibilities</a></h4>
                        <p>Telephones and e-mail, clients and managers, spouses and kids, TV, newspapers and radio – the distractions are everywhere and endless.</p>
                        <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-06 END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- blog-post-06 START -->
                <div class="blog-post mb-0">
                    <div class="blog-post-image">
                        <img class="img-fluid b-radius-bottom-none" src="images/blog/06.jpg" alt="">
                    </div>
                    <div class="blog-post-content b-radius-top-none">
                        <div class="blog-post-meta">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="blog-post-date"><a href="#"><i class="far fa-calendar-alt"></i>July 22, 2020</a></li>
                                <li class="blog-post-comments"><a href="#"><i class="far fa-comments"></i>Comments <span>(07)</span></a></li>
                            </ul>
                        </div>
                        <h4 class="blog-post-title"><a href="blog-detail.html">Enterprise software development</a></h4>
                        <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
                        <a href="" class="btn btn-md btn-primary btn-round">Read More</a>
                    </div>
                </div>
                <!-- blog-post-06 END -->
            </div>
        </div>
    </div>
</section>
@endsection
