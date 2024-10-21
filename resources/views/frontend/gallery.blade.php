@extends('frontend.frontend_masters')

@section('title', 'Gallery')

@section('main')
    <script src="{{ asset('frontend/js/shuffle/shuffle.min.js') }}"></script>
    <style>
        .img-def {
            object-fit: cover;
            object-position: top;
        }
    </style>
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
                            <i class="fas fa-chevron-right"></i> <span> Gallery </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              banner -->

    <!--=================================
              Gallery -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 text-center">
                    <div class="section-title">
                        <h2 class="title">Let's have a look at what creativity is!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-shuffle-container popup-gallery full-screen row">
                        <!-- Gallery-item-01 START -->
                        @foreach ($gallery as $item)
                            <div class="col-3 col-lg-3 col-md-3 mb-3"
                                data-groups='{{ $item->gCategory->gallery_category }}'>
                                <div class="portfolio-item">
                                    <img class=" rounded img-def" src="{{ $item->image }}" alt="" width="263px"
                                        height="175px" />
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-description portfolio-img" href="{{ $item->image }}">
                                            <div class="portfolio-info">
                                                <span class="portfolio-title text-capitalize">{{ $item->title }}</span>
                                                <span class="icon-btn"><i class="fas fa-plus"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Gallery-item-01 END -->

                        <div class="row">
                            {{ $gallery->links('vendor.pagination.custom') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              Gallery -->

    <!--=================================
              Schedule -->
    <section class="mb-lg-n6 mb-md-n5 pb-0 pb-sm-4 pb-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="schedule shadow">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <div class="schedule-morden bg-white">
                                    <div class="icon">
                                        <i class="flaticon-emergency-call"></i>
                                    </div>
                                    <div class="schedule-morden-content">
                                        <h6>Emergency Case</h6>
                                        <span class="phone-number h4">+(704) 279-1249 </span>
                                        <p class="mb-0">
                                            Commitment is something that comes from understanding
                                            that everything has its price and then having the
                                            willingness to pay that price.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="schedule-morden bg-white">
                                    <div class="icon">
                                        <i class="flaticon-clock"></i>
                                    </div>
                                    <div class="schedule-morden-content">
                                        <h6>Opening Hours</h6>
                                        <div class="opening-hourse">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Monday – Friday</span>
                                                    <div class="time">08.30 - 18.30</div>
                                                </li>
                                                <li>
                                                    <span>Saturday</span>
                                                    <div class="time">09.30 - 17.30</div>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <div class="time">09.30 - 15.30</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="schedule-morden last bg-white">
                                    <div class="icon">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <div class="schedule-morden-content">
                                        <h6>Doctors Timetable</h6>
                                        <p class="mb-4">
                                            This is important because nobody wants to put
                                            significant effort into something, only to find out
                                            after the fact that the price was too high.
                                        </p>
                                        <a class="btn btn-outline-primary" href="timetable.html"><i
                                                class="fa fa-address-book"></i>View Timetable</a>
                                    </div>
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
@endsection
