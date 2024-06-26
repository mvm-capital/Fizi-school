@extends('client.layouts.main')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-70 bg-holder" style="background-image: url(images/bg/15.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
                <h1 class="text-white mb-2">Blog Detail</h1>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home pr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Blog Detail</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <!-- blog detail START -->
                <div class="blog-detail">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <img class="img-fluid b-radius-bottom-none w-100" src="images/blog/01.jpg" alt="">
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
                            <p class="mb-4">Imagine that a few more steps ahead there is a place where the path splits, where is goes off to the left and off to the right. Pause here for a few moments and have a think. Here, there are two different pathways, two possibilities, two ways that you could choose to go.</p>
                            <p class="mb-4">You carry on doing the same things, living the same way and dealing with this thing in the same way as you have been doing. If you were choose the path to the right, the right path, there are new possibilities, achievement, freedom of mind, positive and progressive implications. Think about that as you stand at this place where the path splits. You want to make a decision and commit to one of these paths. Before you make that decision, we are going to see what each path holds for your future.</p>
                            <div class="d-sm-flex bg-light border-radius p-4 p-md-5 mb-4">
                                <i class="fas fa-quote-left pr-4 fa-6x text-primary"></i>
                                <p class="mb-0 text-dark">Politics can be attributed to his perseverance to overcome his personal liabilities, and his desire to constantly become better. Next time you really want to achieve something, take time to focus on your own personal journal. What is your temptation that is standing in your wayv to greatness.</p>
                            </div>
                            <ul class="list list-unstyled">
                                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Use a past defeat as a motivator. Remind yourself you have nowhere to go except</span></li>
                                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Give yourself the power of responsibility. </span></li>
                                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Remind yourself the only thing stopping you is yourself.</span></li>
                                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Make a list of your achievements toward your long-term</span></li>
                                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>goal and remind yourself that intentions don’t count, only action’s.</span></li>
                            </ul>
                            <div class="d-md-flex align-items-center mt-4">
                                <div class="post-tags d-flex mb-4 mb-md-0">
                                    <span class="text-dark font-weight-bold">Tag: </span>
                                    <ul class="list-inline mb-0 ml-3">
                                        <li class="list-inline-item"><a href="#">Furniture,</a></li>
                                        <li class="list-inline-item"><a href="#">Interior,</a></li>
                                        <li class="list-inline-item"><a href="#">Modern,</a></li>
                                        <li class="list-inline-item"><a href="#">Photo</a></li>
                                    </ul>
                                </div>
                                <div class="social-icon d-flex align-items-center ml-md-auto">
                                    <p class="text-dark font-weight-bold mb-0 pr-3">Share:</p>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4 mt-sm-5">
                                <nav class="navigation post-navigation">
                                    <div class="nav-links">
                                        <div class="nav-previous">
                                            <a href="#"><span class="pagi-text"> PREV</span><span class="nav-title">How to find the best Marketing sites in the UK</span></a>
                                        </div>
                                        <div class="nav-next">
                                            <a href="#"><span class="nav-title">Strategies to market new-age businesses</span> <span class="pagi-text">NEXT</span></a>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="mt-4 mt-md-5">
                            <h4 class="mb-4">Related Posts</h4>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <!-- blog-post-01 START -->
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
                                            <div class="blog-post-date"></div>
                                            <h4 class="blog-post-title"><a href="blog-detail.html">How to stay ahead of the digital transformation</a></h4>
                                            <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although successful.</p>
                                            <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                                        </div>
                                    </div>
                                    <!-- blog-post-01 END -->
                                </div>
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <!-- blog-post-01 START -->
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
                                            <div class="blog-post-date"></div>
                                            <h4 class="blog-post-title"><a href="blog-detail.html">Five initial steps you must do to increase your</a></h4>
                                            <p>Do it today. Remind yourself of someone you know who died suddenly and the fact that there is no guarantee will come.</p>
                                            <a href="#" class="btn btn-md btn-primary btn-round">Read More</a>
                                        </div>
                                    </div>
                                    <!-- blog-post-01 END -->
                                </div>
                            </div>
                        </div>
                        <div class="comments mt-4 mt-md-5">
                            <h4 class="mb-4">Comments</h4>
                            <div class="media mb-4">
                                <div class="avatar avatar-md">
                                    <img src="images/avatar/01.jpg" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                                    <div class="d-flex">
                                        <h6 class="mt-0">Alice Williams</h6>
                                        <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                                    </div>
                                    <p>Then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan.</p>
                                </div>
                            </div>
                            <div class="media mb-4 ml-5">
                                <div class="avatar avatar-md">
                                    <img src="images/avatar/06.jpg" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                                    <div class="d-flex">
                                        <h6 class="mt-0">Mellissa Doe</h6>
                                        <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                                    </div>
                                    <p>Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
                                </div>
                            </div>
                            <div class="media mb-4 ml-5">
                                <div class="avatar avatar-md">
                                    <img src="images/avatar/06.jpg" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                                    <div class="d-flex">
                                        <h6 class="mt-0">Mellissa Doe</h6>
                                        <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                                    </div>
                                    <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <div class="avatar avatar-md">
                                    <img src="images/avatar/01.jpg" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="media-body ml-3 border b-radius p-3 p-sm-4">
                                    <div class="d-flex">
                                        <h6 class="mt-0">Alice Williams</h6>
                                        <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                                    </div>
                                    <p>Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting SMART goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mt-md-5">
                            <h4 class="mb-4">Leave a Reply</h4>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="Website" placeholder="Website URL">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <a class="btn btn-primary btn-round" href="#">Send Message</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- blog detail END -->
            </div>
        </div>
    </div>
</section>
@endsection
