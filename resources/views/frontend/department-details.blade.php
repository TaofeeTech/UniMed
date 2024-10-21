@extends('frontend.frontend_masters')
@section('title', 'UniMed - ' . $department->name)
@section('main')
    @php
        $getSystemSettingsApp = App\Models\settings::getSingle();
    @endphp
    <!--=================================
                            banner -->
    <section class="inner-banner bg-light">
        <div class="container">
            <div class="row align-items-center intro-title">
                <div class="col-12">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('frontend') }}"> <i class="fas fa-home"></i> </a></li>
                        <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a
                                href="service.html">Department</a>
                        </li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Department Detail
                            </span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                              banner -->

    <!--=================================
                              Service-->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Service-detail -->
                    <div class="service-detail">
                        <div class="section-title left-divider">
                            <span class="text-primary">{{ $department->departmentCategory->name }}</span>
                            <h3 class="text-dark">{{ $department->name }}</h3>
                        </div>
                        <div class="service-img mb-4">
                            <img class="" style="object-fit: cover; object-position:top;"
                                src="{{ asset($department->image) }}" alt="" width="736px" height="520px">
                        </div>
                        <div class="service-content mb-4 mb-md-5">
                            <p class="mb-4">{!! $department->description !!}</p>

                        </div>
                        <!-- Testimonial -->
                    </div>
                    <!-- Service-detail -->
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- HOD -->
                        <div class="widget">
                            <p class="text-capitalize h6">head of department (H.O.D)</p>
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset($department->hod_image) }}" height="180px"
                                    style="object-fit: cover; object-position:top;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $department->hod_name }} <small class="text-mutted" style="font-size: 12px; color:#6c757d;">({{ $department->hod_degrees }})</small></h5>
                                </div>
                            </div>
                        </div>
                        <!-- HOD -->

                        <!-- Our Teams -->
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Our Team Members</h4>
                            </div>
                            <div class="widget-services">
                                <ul class="list-unstyled list-style list-style-underline mb-0">
                                    @foreach ($department_team as $item)
                                        <li>
                                            <a href="javascript: void(0);" class="d-flex align-items-center gap-3">
                                                <img src="{{ asset($item->image) }}" alt="" width="50px"
                                                    height="50px" style="object-fit: cover; object-position: top;"
                                                    class="rounded-circle">
                                                <span>{{ $item->name }} <br> <small
                                                        class="text-mutted">{{ $item->role }}</small> </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Our Teams -->

                        <!-- Contact Info -->
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Contact Info</h4>
                            </div>
                            <div class="widget-contact-info">
                                <ul class="list-unstyled list-style mb-0">
                                    <li><i class="fas fa-map-marker-alt text-primary"></i><span>{{ $getSystemSettingsApp->address }}</span></li>
                                    <li><i class="fas fa-phone-alt text-primary"></i><span>{{ $getSystemSettingsApp->phone1 }}</span></li>
                                    <li><i
                                            class="fas fa-envelope-open-text text-primary"></i><span>{{ $getSystemSettingsApp->email2 }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contact Info -->

                        <!-- Care Services -->
                        <div class="widget bg-primary" style="background-image: url(images/pattern.png);">
                            <div class="widget-services-care text-center">
                                <div class="services-care-icon mb-3"><i class="flaticon-support"></i></div>
                                <h3 class="services-care-title text-white mb-4">Medical Care Services</h3>
                                <a href="{{ route('contact') }}" class="btn btn-white">Contact us</a>
                            </div>
                        </div>
                        <!-- Care Services -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                              Service-->
@endsection
