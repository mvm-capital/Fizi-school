@extends('client.layouts.main')
@section('content')
<section class="inner-banner h-500 h-md-400 h-sm-auto py-6 d-flex align-items-center bg-overlay-dark-50 bg-holder"  style="background-image: url(images/bg/10.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 col-md-12 text-center pt-md-5">
            <h1 class="text-white mb-2">Donate</h1>
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="{{route('client.home')}}"><i class="fa fa-home pr-2"></i>Home</a></li>
              <li class="breadcrumb-item active"><span>Donate</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center">
            <div class="section-title">
              <h2 class="title">Make a Donation</h2>
              <p class="lead">We all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="donation-form shadow p-4 p-md-5">
              <div class="mb-4 mb-md-5">
                <form class="mt-4">
                </form>
              </div>
              <div class="mb-4">
                <h4 class="mb-4">Donner Details</h4>
                <form>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="First Name">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Last Name">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="text" class="form-control" placeholder="Email">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="text" class="form-control" placeholder="Number">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="text" class="form-control" placeholder="Country">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="City">
                          </div>
                      </div>
                      <div class="col-lg-12">
                          <div class="form-group mb-0">
                              <input type="text" name="name" class="form-control" placeholder="Address">
                          </div>
                      </div>
                  </div>
                </form>
              </div>
              <h4 class="mb-4">Payment Method</h4>
              <ul class="payment-select">
                <li><input id="6" type="radio" name="size">
                    <label for="6"><img class="img-fluid" src="images/checkout/img-1.png" alt=""></label>
                </li>
                <li><input id="7" type="radio" name="size">
                    <label for="7"><img class="img-fluid" src="images/checkout/img-2.png" alt=""></label>
                </li>
                <li><input id="8" type="radio" name="size">
                    <label for="8"><img class="img-fluid" src="images/checkout/img-3.png" alt=""></label>
                </li>
                <li><input id="9" type="radio" name="size">
                    <label for="9"><img class="img-fluid" src="images/checkout/img-4.png" alt=""></label>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
