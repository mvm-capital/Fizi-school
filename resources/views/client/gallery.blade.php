@extends('client.layouts.main')

@section('content')

<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-70" style="background-image: url(images/bg/04.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
                <h1 class="text-white mb-2">Gallery</h1>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home pr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Gallery</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters-group mb-2 mb-lg-4">
                    <button class="btn-filter active" data-group="all">All</button>
                    <button class="btn-filter" data-group="baby">Children</button>
                    <button class="btn-filter" data-group="senior">Teachers</button>
                    <button class="btn-filter" data-group="pet">Memories</button>

                </div>
                <div class="my-shuffle-container popup-gallery full-screen">
                    <!-- portfolio-item-01 -->
                    <div class="grid-item" data-groups='["senior"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/01.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/01.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-01 -->

                    <!-- portfolio-item-02 -->
                    <div class="grid-item" data-groups='["senior"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/02.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/02.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-02 -->

                    <!-- portfolio-item-03 -->
                    <div class="grid-item" data-groups='["senior"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/03.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/03.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-03 -->

                    <!-- portfolio-item-04 -->
                    <div class="grid-item" data-groups='["baby"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/04.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/04.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-04 -->

                    <!-- portfolio-item-05 -->
                    <div class="grid-item senior" data-groups='["senior"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/05.jpg" alt="">
                            <div class="portfolio-overlay">
                                <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/05.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-05 -->

                    <!-- portfolio-item-06 -->
                    <div class="grid-item " data-groups='["pet"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/06.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/06.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-06 -->

                    <!-- portfolio-item-07 -->
                    <div class="grid-item senior" data-groups='["senior"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/07.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/07.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-07 -->

                    <!-- portfolio-item-08 -->
                    <div class="grid-item" data-groups='["baby"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/08.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/08.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-08 -->

                    <!-- portfolio-item-09 -->
                    <div class="grid-item senior" data-groups='["senior"]'>
                        <div class="portfolio-item">
                            <img class="img-fluid" src="images/gallery/09.jpg" alt="">
                            <div class="portfolio-overlay">
                            <span class="portfolio-description h5">
                                    Minor description
                                </span>
                                <a class="portfolio-img" href="images/gallery/09.jpg">
                                    <i class="fas fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item-09 -->
                </div>
            </div>
        </div>
        <div class="row mt-4 mt-md-5">
            <div class="col-sm-12 text-center">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                    <li class="page-item active" aria-current="page"><span class="page-link active">1 </span> <span class="sr-only">(current)</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="js/jquery.appear.js"></script>
<script src="js/counter/jquery.countTo.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/shuffle/shuffle.min.js"></script>

<!-- Template Scripts (Do not remove)-->
<script src="js/custom.js"></script>

<script>
    $(document).ready(function() {
    $('.portfolio-item').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });
});

</script>
@endsection
