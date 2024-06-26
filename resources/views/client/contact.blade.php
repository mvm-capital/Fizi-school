@extends('client.layouts.main')

@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder bg-holder" style="background-image: url('images/bg/01.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
                <h1 class="text-white mb-2">Contact Us</h1>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home pr-2"></i>Home</a></li>
                    <li class="breadcrumb-item active"><span>Contact us</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="space-pt">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-item feature-item-shadow p-5 text-center">
              <div class="feature-item-icon">
                <i class="flaticon-donation text-primary"></i>
              </div>
              <div class="feature-item-content">
                <h4 class="mb-3">Email</h4>
                <span>mainamanasseh02@gmail.com</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-item feature-item-shadow p-5 text-center">
              <div class="feature-item-icon">
                <i class="flaticon-charity-3 text-primary"></i>
              </div>
              <div class="feature-item-content">
                <h4 class="mb-3">Phone</h4>
                <span class="d-block mb-1">(+254)(0)758316403</span>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-item feature-item-shadow p-5 text-center">
              <div class="feature-item-icon">
                <i class="flaticon-volunteer-1 text-primary"></i>
              </div>
              <div class="feature-item-content">
                <h4 class="mb-3">Address</h4>
                <span class="d-block mb-1">Kabiria, Nairobi, Nairobi 00100, KE</span>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-md-6 h-100 mb-4 mb-md-0">
            <div class="bg-white shadow p-4 p-lg-5">
              <div class="section-title">
                <h2 class="title">Let’s Get In Touch!</h2>
                <p class="lead mb-0">Walk out 10 years into your future and feel how it feels to carry on doing the same thing.</p>
              </div>
              <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="first-name" class="form-control" placeholder="First Name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" name="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea placeholder="Enter your massage" class="form-control" rows="5" spellcheck="false"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-3">
                        <div class="causes-details-btn">
                            <a href="#" class="btn btn-primary btn-round">
                                Send Message
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 h-100">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5641.022316984011!2d36.71967097898845!3d-1.2912641803751914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1bb3116c6d0f%3A0xf288093da0a3a203!2sFizi%20School!5e0!3m2!1sen!2ske!4v1719193389697!5m2!1sen!2ske"style="border:0;" allowfullscreen="" height="618px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
