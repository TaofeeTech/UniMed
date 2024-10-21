<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'UNIMED')</title>

    @php
        $getSystemSettingsApp = App\Models\settings::getSingle();
    @endphp
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url($getSystemSettingsApp->favicon) }}">
    {{-- color: #01487E; --}}

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <script src="https://kit.fontawesome.com/706f90924a.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--=================================
    header -->
    <header class="header header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topbar">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="me-0 me-sm-3 mb-3 mb-md-0 d-block d-sm-inline-block">
                                <a href="#"><i
                                        class="far fa-envelope me-2"></i>{{ $getSystemSettingsApp->email2 }}</a>
                            </div>
                            <div class="me-auto mb-3 mb-md-0 d-block d-sm-inline-block">
                                <a href="tel:{{ $getSystemSettingsApp->phone1 }}"><i
                                        class="fa fa-phone me-2 fa fa-flip-horizontal"></i>{{ $getSystemSettingsApp->phone1 }}</a>
                            </div>
                            <div class="social d-block d-sm-inline-block">
                                <ul class="list-unstyled">
                                    <li><a href="{{ $getSystemSettingsApp->facebook }}"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $getSystemSettingsApp->twitter }}"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $getSystemSettingsApp->linkedin }}"><i
                                                class="fab fa-linkedin"></i></a></li>
                                    <li><a href="{{ $getSystemSettingsApp->instagram }}"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg">
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ url($getSystemSettingsApp->logo) }}" alt="logo">
                    </a>
                    <div class="navbar-collapse collapse justify-content-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown active">
                                <a class="nav-link" href="{{ url('/') }}" id="navbarDropdown"aria-haspopup="true"
                                    aria-expanded="false">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('about') }}" aria-haspopup="true"
                                    aria-expanded="false">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('service') }}" aria-haspopup="true"
                                    aria-expanded="false">Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('gallery') }}" aria-haspopup="true"
                                    aria-expanded="false">Gallery</a>
                            </li>
                            {{-- <li class="dropdown nav-item">
                  <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Pages<i class="far fa-plus-square"></i></a>
                  <ul class="dropdown-menu megamenu dropdown-menu-lg">
                    <li>
                      <div class="row">
                        <div class="col-sm-4">
                          <h6 class="mb-3 nav-title">Pages</h6>
                          <ul class="list-unstyled mt-lg-3">
                            <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                            <li><a class="dropdown-item" href="team.html">Team</a></li>
                            <li><a class="dropdown-item" href="team-single.html">Team Single</a></li>
                            <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                            <li><a class="dropdown-item" href="before-after.html">Before After</a></li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <h6 class="mb-3 nav-title">Pages</h6>
                          <ul class="list-unstyled mt-lg-3">
                            <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                            <li><a class="dropdown-item" href="faqs.html">Faqs</a></li>
                            <li><a class="dropdown-item" href="appointment.html">Appointment</a></li>
                            <li><a class="dropdown-item" href="cost-calculator.html">Cost Calculator</a></li>
                            <li><a class="dropdown-item" href="timetable.html">Timetable</a></li>
                            <li><a class="dropdown-item" href="working-hours.html">Working Hours</a></li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <h6 class="mb-3 nav-title">Pages</h6>
                          <ul class="list-unstyled mt-lg-3">
                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                            <li><a class="dropdown-item" href="register.html">Register</a></li>
                            <li><a class="dropdown-item" href="error-404.html">Error 404</a></li>
                            <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                            <li><a class="dropdown-item" href="terms-and-conditions.html">T&C</a></li>
                            <li><a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> --}}
                            {{-- <li class="dropdown nav-item">
                  <a href="properties.html" class="nav-link" data-toggle="dropdown">Services<i class="far fa-plus-square"></i></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="service.html">Service</a></li>
                    <li><a class="dropdown-item" href="departments.html">Departments</a></li>
                    <li><a class="dropdown-item" href="service-detail.html">Service Detail</a></li>
                  </ul>
                </li> --}}
                            <li class="dropdown nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">Departments<i
                                        class="far fa-plus-square"></i></a>
                                @php
                                    $dept = App\Models\category::all();
                                @endphp
                                <ul class="dropdown-menu">
                                    @foreach ($dept as $item)
                                        <li><a class="dropdown-item text-uppercase"
                                                href="{{ route('department', $item->id) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="add-listing d-none d-sm-block">
                        <a class="btn btn-outline-primary" href="#"><i class="fa fa-address-book"></i>Get a
                            quote</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--=================================
    header -->

    @yield('main')

    <!--=================================
    footer -->
    <footer class="space-pt footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html" class="footer-logo"><img class="img-fluid" src="{{ $getSystemSettingsApp->logo }}"
                            alt="" width="173px" height="48px"></a>
                    <p>{{ $getSystemSettingsApp->footer_description }}</p>
                    <div class="social-icon mt-3 mt-md-5">
                        <ul>
                            <li><a href="{{ $getSystemSettingsApp->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="{{ $getSystemSettingsApp->twitter }}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="{{ $getSystemSettingsApp->linkedin }}"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $getSystemSettingsApp->instagram }}"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <h6 class="text-primary">Useful Links</h6>
                    <div class="footer-useful-List">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('service') }}">Services</a></li>
                            <li><a href="cost-calculator.html">Contact Us</a></li>
                        </ul>
                        <ul class="list-unstyled mb-0">
                            @foreach ($dept as $item)
                                <li><a class="text-capitalize" href="{{ route('department', $item->id) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h6 class="text-primary">Our Newsletter</h6>
                    <div class="footer-contact-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-fw fa-map-marker-alt text-primary"></i><span>{{ $getSystemSettingsApp->address }}</span></li>
                            <li><i class="fas fa-fw fa-phone-alt text-primary"></i><span>{{ $getSystemSettingsApp->phone1 }}</span></li>
                        </ul>
                    </div>
                    <div class="footer-subscribe">
                        <p>Sign up to our newsletter to get the latest news and offers.</p>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary"><i
                                    class="far fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h6 class="text-primary">Opening Hours</h6>
                    <div class="opening-time">
                      <ul class="list-unstyled">
                        <li><i class="far fa-clock pe-1 text-primary"></i> Mon - Tue<span class="float-end">08:30 - 18:30</span></li>
                        <li><i class="far fa-clock pe-1 text-primary"></i> Wed- Thu<span class="float-end">08:30 - 18:30</span></li>
                        <li><i class="far fa-clock pe-1 text-primary"></i> Friday<span class="float-end">08:30 - 18:30</span></li>
                        <li><i class="far fa-clock pe-1 text-primary"></i> Saturday<span class="float-end">08:30 - 18:30</span></li>
                        <li><i class="far fa-clock pe-1 text-primary"></i> Sunday<span class="float-end">09:30 - 15:30</span></li>
                        <li class="text-primary">Emergency<span class="float-end">24 hours</span></li>
                      </ul>
                    </div>
                  </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center copyright text-md-start mb-3 mb-md-0">
                        <p class="mb-0"> &copy; Copyright <span id="copyright">
                                <script>
                                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                                </script>
                            </span> <a href="index.html"> medileaf </a> All Rights Reserved</p>
                    </div>
                    {{-- <div class="col-md-6 text-center text-md-end">
                        <div class="">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item mb-0"><a href="terms-and-conditions.html">Terms &
                                        Conditions</a></li>
                                <li class="list-inline-item mb-0"><a href="#">FAQ</a></li>
                                <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
    footer -->

    <!--=================================
    back to top-->
    <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-up"></i> </a>
    <!--=================================
    back to top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
