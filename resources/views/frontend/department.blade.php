@extends('frontend.frontend_masters')
@section('title', 'UniMed - ' . $category->name . ' Departments')
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
                            <i class="fas fa-chevron-right"></i> <span> Departments </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              banner -->

    <!--=================================
              Departments -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <!-- Departments-01 START -->
                @foreach ($groupedDepartments as $letter => $items)
                    <div class="col-12 col-lg-12 col-md-12">
                        <p class="display-6">{{ $letter }}</p> <br>
                    </div>
                    @foreach ($items as $item)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="departments-items h-100">
                                <div class="departments-img">
                                    <img class="" src="{{ asset($item->image) }}" alt=""
                                        style="object-fit: cover; object-position: top;" width="356" height="291" />
                                </div>
                                <div class="departments-content">
                                    <a href="{{ route('department.details', $item->id) }}">
                                        <h5 class="text-primary">{{ $item->name }}</h5>
                                    </a>
                                    <p class="mb-0">
                                        {{ $item->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr>
                @endforeach
                <!-- Departments-01 END -->
            </div>
        </div>
    </section>
    <!--=================================
              Departments -->

    <!--=================================
              Testimonial -->
    <section class="space-pb">
        <div class="container" style="background-image: url(images/pattern.png)">
            <div class="row align-items-center">
                <div class="col-lg-12">
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

    <!--=================================
@endsection
