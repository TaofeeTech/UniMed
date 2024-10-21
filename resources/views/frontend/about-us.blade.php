@extends('frontend.frontend_masters')
@section('title', 'UniMed - About Us')
@section('main')
    <!--=================================
                    banner -->
    <section class="inner-banner bg-light">
        <div class="container">
            <div class="row align-items-center intro-title">
                <div class="col-12">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('frontend') }}"> <i class="fas fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-chevron-right"></i> <span> About us </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                      banner -->

    <!--=================================
                      About -->
    <section class="space-ptb half-overlay right-position position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title left-divider">
                        <span>About our company</span>
                        <h2>OVERVIEW OF THE UNIVERSITY OF MEDICAL SCIENCE TEACHING HOSPITAL/SPECIALIST HOSPITAL, AKURE.</h2>
                        <p class="mb-0" style="text-align: justify; text-indent: 30px;">
                            The University of Medical Science Teaching Hospital/Specialists Hospital(UNIMEDTH/SH) in Akure,
                            Ondo State, Nigeria, is a premier healthcare facility established in 1985. Initially starting as
                            a community clinic, it has evolved into a comprehensive medical center with a bed capacity of
                            250 and a workforce of over 500 employees. This includes medical professionals, administrative
                            staff, and support personnel, all dedicated to delivering high-quality healthcare to Akure’s
                            residents and the surrounding communities.
                        </p>
                    </div>
                    <p style="text-align: justify">
                        UNIMEDTH/SH is recognized for its commitment to excellence, evident through its state-of-the-art
                        facilities. The hospital boasts advanced diagnostic equipment, modern operating theatres, and
                        specialized units like intensive care, neonatal care, and oncology. These resources allow the
                        institution to provide a wide range of specialized medical services.
                    </p>

                    <p style="text-align: justify">
                        In addition to healthcare delivery, the hospital is a hub for medical research and education. It
                        engages in robust research programs and collaborates with both local and international medical
                        institutions to further its mission of advancing medical knowledge and improving patient care. The
                        hospital also serves as a training ground for students and professionals.
                    </p>

                    <p style="text-align: justify">
                        Recently, UNIMEDTH/SH has embarked on an ambitious expansion project aimed at increasing its
                        capacity and introducing new specialized services. This project has created a dynamic environment
                        that emphasizes the importance of financial and project management, making the institution an
                        attractive site for internships that focus on bridging these disciplines.
                    </p>

                    <p style="text-align: justify">
                        Under the leadership of a committed management team and with the dedication of its staff,
                        UNIMEDTH/SH continues to experience significant growth and development.
                    </p>

                    <p style="text-align: justify">
                        The hospital remains patient-centric, with a focus on ensuring that patient satisfaction is at the
                        heart of its services
                    </p>

                    <div class="row my-4 mb-lg-5">
                        <div class="col-md-6">
                            <p><strong><small><u>The Vision Statement of UNIMEDTH/SH Akure</u></small></strong></p>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="far fa-plus-square pe-2 text-primary mt-1"></i>Provide quality and qualitative
                                    medical and clinical services
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="far fa-plus-square pe-2 text-primary mt-1"></i>Provide medical training to
                                    future medical and health professionals
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p><strong><small><u>MISSION STATEMENT</u></small></strong></p>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="far fa-plus-square pe-2 text-primary mt-1"></i>To become a world-class
                                    Teaching Hospital
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="far fa-plus-square pe-2 text-primary mt-1"></i>Rendering the best life-saving
                                    services to the people.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-sm-flex align-items-center">
                        <img class="img-fluid me-3" src="images/sign.png" alt="" />
                        <div class="author-text ps-3">
                            <h5 class="text-primary">Michael Jordan</h5>
                            <p class="mb-0 text-secondary">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-6 mt-5 mt-lg-0">
                    <div class="position-relative">
                        <div class="position-absolute top-0 right-0 right-dot-shape">
                            <img class="img-fluid fa-flip-horizontal" src="{{ asset('frontend/images/svg/06.svg') }}"
                                alt="" />
                        </div>
                        <img class="" src="{{ asset('frontend/images/about/01.jpg') }}" alt="" width="478px"
                            height="665px" style="object-fit: cover" />
                        <div class="position-absolute bottom-0 left-0 mb-n5 ms-n5 z-index-n1">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/08.svg') }}" alt="" />
                        </div>
                        <div class="position-absolute bottom-0 left-0 m-3">
                            <img class="img-fluid" src="{{ asset('frontend/images/svg/07.svg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                      About -->

    <!--=================================
                      Counter -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-xl-4">
                    <div class="section-title left-divider">
                        <span>Enhancing life. excelling in care.</span>
                        <h2>We’re Committed To Delivering Outstanding Healthcare.</h2>
                        <p class="mb-0">
                            One of the main areas that I work on with my clients is shedding
                            these non-supportive beliefs and replacing them with beliefs
                            that will help them to accomplish their desires.
                        </p>
                    </div>
                    <div class="position-relative bg-overlay-black-50">
                        <img class="w-100" src="images/about/02.jpg" alt="" />
                        <div class="popup-video">
                            <a class="video-btn popup-icon popup-youtube"
                                href="https://www.youtube.com/watch?v=aBoaCHKJKd8"><i class="fas fa-play fa-1x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-hospital-bed"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="1790" data-speed="10000">1790</span>
                                    <label>This is perhaps the single biggest obstacle that all of
                                        us must overcome.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-electrocardiogram"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="245" data-speed="10000">245</span>
                                    <label>Commitment is something that comes from understanding
                                        that everything has its price.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter mb-md-0">
                                <div class="counter-icon">
                                    <i class="flaticon-hospital"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="491" data-speed="10000">491</span>
                                    <label>Along with your plans, you should consider developing an
                                        action orientation.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter mb-0">
                                <div class="counter-icon">
                                    <i class="flaticon-electrocardiogram-1"></i>
                                </div>
                                <div class="counter-content">
                                    <span class="timer" data-to="1090" data-speed="10000">1090</span>
                                    <label>This requires a little self-discipline, but is a crucial
                                        component to achievement.</label>
                                    <img class="img-fluid plus-svg" src="images/svg/09.svg" alt="" />
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
                      Team -->
    <section class="choose-people bg-primary-half-lg z-index-n9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10 text-center position-relative">
                    <div class="section-title center-divider mb-4 mb-md-0">
                        <span class="text-white">Why Our Hospital Stands Out?</span>
                        <h2 class="text-white mb-0">We offer exceptional care through our state-of-the-art departments, ensuring your health and well-being.</h2>
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
                      Team -->

    <!--=================================
                      Testimonial -->
    <section class="space-pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12" style="background-image: url(images/pattern.png)">
                    <!-- Owl-carousel -->
                    <div class="owl-carousel testimonial" data-nav-arrow="false" data-items="1" data-md-items="1"
                        data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoheight="true"
                        style="background-image: url(images/pattern.png)">
                        <!-- Testimonial-01 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-avatar">
                                    <img class="img-fluid rounded-circle" src="images/avatar/09.jpg" alt="" />
                                </div>
                                <div class="testimonial-content">
                                    I have gotten at least 50 times the value from Medileaf. I
                                    will let my mum know about this, she could really make use
                                    of Medileaf! Wow what great service, I love it! Medileaf is
                                    the real deal!
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
                                    <img class="img-fluid rounded-circle" src="images/avatar/04.jpg" alt="" />
                                </div>
                                <div class="testimonial-content">
                                    We were treated like royalty. Needless to say we are
                                    extremely satisfied with the results. Thank you for making
                                    it painless, pleasant and most of all hassle free! It fits
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
                                    <img class="img-fluid rounded-circle" src="images/avatar/03.jpg" alt="" />
                                </div>
                                <div class="testimonial-content">
                                    We've seen amazing results already. Since I invested in
                                    Medileaf I made over 100,000 dollars profits. It's the
                                    perfect solution for our business. I was amazed at the
                                    quality of Medileaf.
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
                                    <img class="img-fluid rounded-circle" src="images/avatar/05.jpg" alt="" />
                                </div>
                                <div class="testimonial-content">
                                    I love Medileaf. I have gotten at least 50 times the value
                                    from Medileaf. I STRONGLY recommend Medileaf to EVERYONE
                                    interested in running a successful online business!
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
