@extends('frontend.frontend_masters')
@section('title', 'UniMed - Services')
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
                            <i class="fas fa-chevron-right"></i> <span>Service</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              banner -->

    <!--=================================
              Service -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-10">
                    <div class="section-title left-divider">
                        <span>Our Services</span>
                        <h2>We Believe The Heart Of Healthcare Is Service To Others</h2>
                    </div>
                    <div class="row mt-lg-5">
                        @foreach ($services as $item)
                            <div class="col-md-4 mb-5">
                                <div class="feature-items pe-lg-5">
                                    <div class="feature-icon">
                                        <i class="{{ $item->icon }}"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6>{{ $item->name }}</h6>
                                        <p class="mb-0">
                                            {{ $item->short_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="stethoscope-img">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('frontend/images/stethoscope_02.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              Service -->

    <!--=================================
              How it Works -->
    <section class="space-ptb bg-primary" style="background-image: url(images/pattern.png)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 text-center">
                    <div class="section-title center-divider mb-5">
                        <span class="text-white">How it Works</span>
                        <h2 class="text-white">
                            We do our best to provide excellent service
                        </h2>
                        <p class="text-white">
                            You will begin to realise why this exercise is called the
                            Dickens Pattern as you notice that the idea of this exercise is
                            to hypnotize yourself to be aware of two very real possibilities
                            for your future.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="feature-step text-center">
                        <div class="feature-step-icon">
                            <span class="feature-step-number">01</span>
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title mb-2 text-white">
                                We care about you
                            </h6>
                            <p class="text-white mb-0">
                                Then with that thing in mind, follow these simple steps. Step
                                One: Get yourself nice and relaxed and settled.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="feature-step text-center">
                        <div class="feature-step-icon">
                            <span class="feature-step-number">02</span>
                            <i class="flaticon-insurance"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title mb-2 text-white">
                                Healing Advice
                            </h6>
                            <p class="text-white mb-0">
                                Imagine reaching deep inside you for all the strength and
                                wisdom that you need to make this decision today.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-step text-center">
                        <div class="feature-step-icon">
                            <span class="feature-step-number">03</span>
                            <i class="flaticon-24-hours"></i>
                        </div>
                        <div class="feature-info-content">
                            <h6 class="feature-info-title mb-2 text-white">24/7 Support</h6>
                            <p class="text-white mb-0">
                                What is the exact sequence of events that will take you to
                                where you want to be? Have a think consciously of what you
                                need to do.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              How it Works -->

    <!--=================================
              Feature -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10 text-center">
                    <div class="section-title center-divider mb-5">
                        <span class="text-secondary">Why choose people like Medleaf</span>
                        <h2 class="text-dark">
                            Our Equipped Team Is Able To Support You!
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($departments as $item)
                    <div class="col-lg-4 col-md-6 text-center mb-4 mb-lg-0">
                        <div class="service-items">
                            <div class="service-img">
                                <img class="" style="object-fit: cover; object-position: top;" width="356" height="291" src="{{ asset($item->image) }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>{{ $item['departmentCategory']['name'] }}</span>
                                <h5><a href="{{ route('department.details', $item->id) }}">{{ $item->name }}</a></h5>
                                <p>{{ $item->short_description }}</p>
                                <a class="icon-btn" href="{{ route('department.details', $item->id) }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=================================
              Feature -->
@endsection
