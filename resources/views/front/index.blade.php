@extends('front.master')
@section('content')
    <!-- Newsletter Start -->
    <div class="my-6 container-xxl bg-primary wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    <div class="mt-3 position-relative w-100">
                        <input class="border-0 form-control rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="top-0 mt-1 shadow-none btn position-absolute end-0 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
                <div class="text-center col-md-6 mb-n5 d-none d-md-block">
                    <img class="mt-5 img-fluid" style="max-height: 250px;"
                        src="{{ asset('asset_front') }}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->




    <!-- Features Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Features</div>
                    <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                    <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata
                        amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea
                        accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd
                    </p>
                    <a class="px-5 py-3 mt-2 btn btn-primary rounded-pill" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-cubes"></i>
                                </div>
                                <h6 class="mb-0">Best In Industry</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-percent"></i>
                                </div>
                                <h6 class="mb-0">99% Success Rate</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-award"></i>
                                </div>
                                <h6 class="mb-0">Award Winning</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-smile-beam"></i>
                                </div>
                                <h6 class="mb-0">100% Happy Client</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-user-tie"></i>
                                </div>
                                <h6 class="mb-0">Professional Advisors</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="text-white fa fa-headset"></i>
                                </div>
                                <h6 class="mb-0">24/7 Customer Support</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Client Start -->
    <div class="py-5 my-6 container-xxl bg-primary wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-1.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-2.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-3.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-4.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-5.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-6.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-7.png" alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('asset_front') }}/img/logo-8.png"
                        alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client End -->


    <!-- Testimonial Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('asset_front') }}/img/testimonial-1.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('asset_front') }}/img/testimonial-2.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('asset_front') }}/img/testimonial-3.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded testimonial-item">
                    <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('asset_front') }}/img/testimonial-4.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('asset_front') }}/img/team-1.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('asset_front') }}/img/team-2.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('asset_front') }}/img/team-3.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="mb-4 img-fluid rounded-circle w-100" src="{{ asset('asset_front') }}/img/team-4.jpg"
                            alt="">
                        <div class="d-flex justify-content-center">
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="m-1 bg-white btn btn-square text-primary" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
