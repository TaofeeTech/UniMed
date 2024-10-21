@extends('frontend.frontend_masters')

@section('title', 'UniMed - Home')

@section('main')
    <!--================================= banner -->
    <section class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 order-lg-2">
                    <img class="d-none d-lg-block" src="{{ asset('frontend/images/bg/01.jpg') }}" alt=""
                        style="width: 850px; height:734px; object-fit:cover;">
                    <img class="img-fluid d-block d-lg-none" src="{{ asset('frontend/images/bg/01.jpg') }}" alt=""
                        style="object-fit:cover;">
                </div>
                <div class="col-12 col-lg-6 order-lg-1 mb-5 position-relative">
                    <div class="banner-content py-5 py-xl-6 me-lg-5">
                        <h1 class="">A family of hospitals for your family.</h1>
                        <p class="mb-5">A Great Place to Work. A Great Place to Receive Care.</p>
                        <a class="btn btn-primary" href="{{ url('contact') }}">Discover More</a>
                        <div class="banner-img1 position-absolute top-0 left-0">
                            <!-- SVG START -->
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/01.svg') }}" alt="">
                            <!-- SVG END -->
                        </div>
                        <div class="banner-img2 position-absolute top-0 right-0">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/02.svg') }}" alt="">
                        </div>
                        <div class="banner-img3 position-absolute bottom-0 left-0">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/03.svg') }}" alt="">
                        </div>
                        <div class="banner-img4 position-absolute bottom-0 right-0">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/04.svg') }}" alt="">
                        </div>
                        <div class="banner-img5 position-absolute">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/05.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                        banner -->

    <!--=================================
                                        Schedule -->
    <section class="mt-xl-n5">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center mx-auto" style="width: 349px">
                <div class="schedule position-left-bg bg-white mb-0">
                    <div class="row g-0">
                        <div class="col-md-4 col-4 col-lg-4" style="width: 100%">
                            <div class="schedule-morden">
                                <div class="icon">
                                    <i class="flaticon-emergency-call" style="color: #0D6CB6"></i>
                                </div>
                                <div class="schedule-morden-content">
                                    <h6>Emergency Case</h6>
                                    <span class="phone-number h4">+(704) 279-1249 </span>
                                    <p class="mb-0">Positive pleasure-oriented goals are much more powerful motivators
                                        than negative fear-based ones. Although each is successful separately.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                        Schedule -->

    <!--=================================
                                        About -->
    <section class="space-ptb  half-overlay left-position position-relative mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-lg-6">
                    <div class="position-relative">
                        <div class="position-absolute top-0 left-0 mt-n5 ms-n5">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/06.svg') }}" alt="">
                        </div>
                        <img class="" style="object-fit: cover" src="{{ asset('frontend/images/about/01.jpg') }}"
                            alt="" width="478px" height="665px">
                        <div class="position-absolute bottom-0 right-0 mb-n5 me-lg-n5 z-index-n1">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/08.svg') }}" alt="">
                        </div>
                        <div class="position-absolute bottom-0 right-0 m-3">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/07.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="section-title left-divider">
                        <span>The Chief Medical Director</span>
                        <h2>Meet the Chief Medical Director</h2>
                        <p class="mb-0 text-capitalize" style="text-align: justify">born 2nd nov 1970 at ikoya in okitipupa
                            lga of ondo state. attended st augustine
                            rcm primary school ilutitun osooro between 1976 and 1982. attended comprehensive high school,
                            ilutitun osooro from 1982 to 1988 where he obtained the west african school certificate (wasc)
                            in 1988. gained admisiion into the university of lagos and obtained the mbbs degree (medicine &
                            surgery) in 1998.</p>
                    </div>
                    <p class="text-capitalize" style="text-align: justify">he had internship at the state specialist
                        hospital akure between 1999 and 2000 and the mandatory nysc
                        in enugu state where he served as the medical officer in charge of catholic hospital ngbowow in agwu
                        lga of enugu state,
                        he joined the ondo state hospitals management board as a medical officer in 2002 and was posted to
                        general hospital idanre between 2002 and 2005.
                        he had his residency training in o & g at the university college ibadan and obtained fellowship of
                        the west african college of surgeons in 2010
                        he was posted to the mother and child hospital (mcha) akure as a consultant obstetrician and
                        gynaecologist in 2010.
                        he was hod, dept of o & g at mcha between 2010 and 2012 and was appointed cmd, mcha between 2012 and
                        2017.
                    </p>
                    <div class="d-sm-flex align-items-center mt-5">
                        <div class="author-text ps-3">
                          <a href="">
                              <h5 class="text-primary">Michael Jordan</h5>
                              <p class="mb-0 text-secondary">Chief Medical Director</p>
                          </a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                        About -->

    <!--=================================
                                        Service -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-10">
                    <div class="section-title left-divider">
                        <span>Our services</span>
                        <h2>We believe the heart of healthcare is service to others</h2>
                    </div>
                    <div class="row mt-lg-5">
                        @foreach ($services as $item)
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="feature-items pr-lg-5">
                                    <div class="feature-icon">
                                        <i class="{{ $item->icon }}"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6>{{ $item->name }}</h6>
                                        <p class="mb-0">{{ $item->short_description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-center mt-2">
                        <a href="{{ route('service') }}" class="btn btn-primary">Show More</a>
                    </div>

                </div>
                <div class="stethoscope-img d-none d-xl-block">
                    <img class="img-fluid" src="{{ asset('frontend/images/stethoscope_02.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                        Service -->

    <!--=================================
                                        Feature -->
    <section class="choose-people bg-primary-half-lg z-index-n9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10 text-center position-relative">
                    <div class="section-title center-divider mb-4 mb-md-0">
                        <span class="text-white">Why Our Hospital Stands Out?</span>
                        <h2 class="text-white mb-0">We offer exceptional care through our state-of-the-art departments,
                            ensuring your health and well-being.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-pb mt-n5 mt-lg-n7">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($departments as $item)
                    <div class="col-lg-4 col-md-6 text-center mb-4 mb-lg-0">
                        <div class="service-items">
                            <div class="service-img">
                                <img class="" style="object-fit: cover; object-position: top;" width="356"
                                    height="291" src="{{ asset($item->image) }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>{{ $item['departmentCategory']['name'] }}</span>
                                <h5><a href="{{ route('department.details', $item->id) }}">{{ $item->name }}</a></h5>
                                <p>{{ $item->short_description }}</p>
                                <a class="icon-btn" href="{{ route('department.details', $item->id) }}"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=================================
                                        Feature -->

    <!--=================================
                                        Counter -->
    <section class="space-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-xl-4 mb-4 mb-lg-0">
                    <div class="section-title left-divider">
                        <span>Enhancing life. excelling in care.</span>
                        <h2>We’re committed to delivering outstanding healthcare.</h2>
                        <p class="mb-0">Although each is successful separately, the right combination of both is the most
                            powerful motivational force known to humankind.</p>
                    </div>
                    <div class="position-relative bg-overlay-black-50">
                        <img class="w-100" src="images/about/02.jpg" alt="">
                        <div class="popup-video">
                            <a class="video-btn popup-icon popup-youtube"
                                href="https://www.youtube.com/watch?v=aBoaCHKJKd8"><i class="fas fa-play fa-1x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-xl-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-hospital-bed"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="1790" data-speed="10000">1790</span>
                                    <label>What made each of these people so successful? Motivation.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-electrocardiogram"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="245" data-speed="10000">245</span>
                                    <label>We can look a bit further back in time to Albert Einstein or even further</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter mb-sm-0">
                                <div class="counter-icon">
                                    <i class="flaticon-hospital"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="491" data-speed="10000">491</span>
                                    <label>I truly believe Augustine’s words are true and if you look at history you know it
                                        is true.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter mb-0">
                                <div class="counter-icon">
                                    <i class="flaticon-electrocardiogram-1"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="1090" data-speed="10000">1090</span>
                                    <label>Who realize only a small percentage of their potential. We all know people who
                                        live this truth.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                        Counter -->

    <!--=================================
                                        Testimonial -->
    <section class="mt-xl-n6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Owl-carousel -->
                    <div class="owl-carousel testimonial" data-nav-arrow="false" data-items="1" data-md-items="1"
                        data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoheight="true"
                        style="background-image: url(images/pattern.png);">
                        <!-- Testimonial-01 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-avatar">
                                    <img class="img-fluid rounded-circle" src="images/avatar/09.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    I have gotten at least 50 times the value from Medileaf. I will let my mum know about
                                    this, she could really make use of Medileaf! Wow what great service, I love it! Medileaf
                                    is the real deal!
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <h6 class="mb-1">Alice Williams</h6>
                                        <span>- Mother.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-01 END -->

                        <!-- Testimonial-02 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-avatar">
                                    <img class="img-fluid rounded-circle" src="images/avatar/04.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    We were treated like royalty. Needless to say we are extremely satisfied with the
                                    results. Thank you for making it painless, pleasant and most of all hassle free! It fits
                                    our needs perfectly.
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <h6 class="mb-1">Felica Queen</h6>
                                        <span>- Cancer client.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-02 END -->

                        <!-- Testimonial-03 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-avatar">
                                    <img class="img-fluid rounded-circle" src="images/avatar/03.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    We've seen amazing results already. Since I invested in Medileaf I made over 100,000
                                    dollars profits. It's the perfect solution for our business. I was amazed at the quality
                                    of Medileaf.
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <h6 class="mb-1">Paul Flavius</h6>
                                        <span>- Heather.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-03 END -->

                        <!-- Testimonial-04 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-avatar">
                                    <img class="img-fluid rounded-circle" src="images/avatar/05.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    I love Medileaf. I have gotten at least 50 times the value from Medileaf. I STRONGLY
                                    recommend Medileaf to EVERYONE interested in running a successful online business!
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <div class="testimonial-quote">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <h6 class="mb-1">Harry Russell</h6>
                                        <span>- Surgery client.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-04 END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                        Testimonial -->
@endsection
