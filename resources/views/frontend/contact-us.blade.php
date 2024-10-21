@extends('frontend.frontend_masters')

@section('title', 'UniMed - Contact')

@section('main')
    <!--=================================
                        banner -->
    <section class="inner-banner bg-light">
        <div class="container">
            <div class="row align-items-center intro-title">
                <div class="col-12">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('frontend') }}"> <i class="fas fa-home"></i> </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> contact-us</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                          banner -->

    <!--=================================
                          Contact-info-->
    <section class="space-ptb half-overlay left-position position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 position-relative">
                    <!-- Get In Touch -->
                    <div class="contact-info">
                        <div class="section-title text-sm-start text-center">
                            <h3>Get In Touch With Us</h3>
                            <p>We're here to assist you with any inquiries or support you may need regarding our hospital
                                services. Your health and well-being are our top priorities.</p>
                        </div>

                        <!-- Address -->
                        <div class="feature-item d-sm-flex d-block text-sm-start text-center">
                            <div class="feature-item-icon mb-sm-0 mb-4">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="feature-item-content">
                                <h4 class="feature-item-title">Address</h4>
                                <span>{{ $getSystemSettingsApp->address }}</span>
                            </div>
                        </div>
                        <!-- Address -->

                        <!-- Phone -->
                        <div class="feature-item d-sm-flex d-block text-sm-start text-center">
                            <div class="feature-item-icon mb-sm-0 mb-4">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="feature-item-content">
                                <h4 class="feature-item-title">Phone</h4>
                                <span>{{ $getSystemSettingsApp->phone1 }}</span>
                                <span>{{ $getSystemSettingsApp->phone1 }}</span>
                            </div>
                        </div>
                        <!-- Phone -->

                        <!-- Email -->
                        <div class="feature-item mb-0 d-sm-flex d-block text-sm-start text-center">
                            <div class="feature-item-icon mb-sm-0 mb-4">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="feature-item-content">
                                <h4 class="feature-item-title">Email</h4>
                                <span>{{ $getSystemSettingsApp->contact_email }}</span>
                                <span>{{ $getSystemSettingsApp->email2 }}</span>
                            </div>
                        </div>
                        <!-- Email -->
                    </div>
                    <!-- Get In Touch -->
                </div>
                <div class="col-lg-7 col-md-6 mt-md-0 mt-5">
                    <!-- Contact-form -->
                    <div class="contact-form ms-lg-4">
                        <div class="section-title">
                            <h3>We'd love to hear from you</h3>
                            <p>The price is something not necessarily defined as financial. It could be time, effort,
                                sacrifice, money or perhaps, something else.</p>
                        </div>
                        <form action="{{ route('contact.message') }}" method="POST">
                            @csrf
                            <div class="row align-items-center">
                                @if (Session::has('mssg'))
                                    <div class="alert alert-success">

                                        {{ session::get('mssg') }}

                                    </div>
                                @endif
                                <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Phone Number">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                    @error('subject')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-lg-12">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                                    @error('message')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-sm-12 mb-0">
                                    <button type="submit" class="btn btn-outline-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- CSontact-form -->
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                          Contact-info-->

    <!--=================================
                          Map -->
    <section class="">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="map">
                        <!-- iframe START -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96873.54747598754!2d-74.01503722010821!3d40.64535309479206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24416947c2109%3A0x82765c7404007886!2sBrooklyn%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1583241765545!5m2!1sen!2sin"
                            style="border:0; width: 100%; height: 100%" allowfullscreen=""></iframe>
                        <!-- iframe END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                          Map -->
@endsection
