@extends('Website.layouts.master')
@section('content')
    <!-- Main Slider Three -->
    <section class="main-slider-three">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for
                                        your ideas, 100% delivery guaranteed.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span
                                                class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{ asset('Website/images/main-slider/hospital.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for
                                        your ideas, 100% delivery guaranteed.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span
                                                class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{ asset('Website/images/main-slider/3.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for
                                        your ideas, 100% delivery guaranteed.</div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span
                                                class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{ asset('Website/images/main-slider/3.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->


    <!-- Health Section -->
    <section id="about" class="health-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="border-line"></div>
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>Who We Are <br> Pioneering in Health.</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="text">Where you are at the heart of our mission. We hope you will
                                consider us as your medical home—the place where you feel safe, comfortable and
                                cared for. As a multi-specialty medical group,</div>

                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('Website/images/resource/aboutus.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Health Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon flaticon-doctor-stethoscope"></div>
                            <h3><a href="#">Medical Treatment</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon flaticon-ambulance-side-view"></div>
                            <h3><a href="#">Emergency Help</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-user-md"></div>
                            <h3><a href="#">Qualified Doctors</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-briefcase-medical"></div>
                            <h3><a href="#">Medical Professionals</a></h3>
                        </div>
                        <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Department Section Three -->
    <section id="department" class="department-section-three">
        <div class="image-layer" style="background-image:url({{ asset('Website/images/background/dpartments.jpg') }})">
        </div>
        <div class="auto-container">
            <!-- Department Tabs-->
            <div class="department-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <h2>Health <br> Department</h2>
                            <div class="separator"></div>
                        </div>
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            @foreach ($services as $service)
                                <li data-tab="#tab-{{ str_replace(' ', '-', $service->name) }}"
                                    class="tab-btn current {{ $loop->index == 1 ? 'active-btn' : '' }}">
                                    {{ $service->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">

                            @foreach ($services as $service)
                                <!-- Tab -->
                                <div class="tab {{ $loop->index == 1 ? 'active-tab' : '' }}"
                                    id="tab-{{ str_replace(' ', '-', $service->name) }}">
                                    <div class="content">
                                        <h2>{{ $service->name }} Department</h2>
                                        <div class="title">Department of {{ $service->name }}</div>
                                        <div class="text">
                                            <p>{{ $service->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Department Section -->

    <!-- Team Section -->
    <section id="doctor" class="team-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>The Medical Specialists</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                @foreach ($doctors as $doctor)
                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('website/images/resource/doctor1.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    {{-- <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul> --}}
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. {{ $doctor->name }}</a></h3>
                                <div class="designation">{{ $doctor->section->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- Video Section -->
    <section class="video-section"
        style="background-image:url({{ asset('website/images/background/vidoeSection.jpg') }})">
        <div class="auto-container">
            <div class="content">
                <a href="#" class="lightbox-image play-box"><span class="flaticon-play-button"><i
                            class="ripple"></i></span></a>
                <div class="text">WE ARE CARE ABOUT YOUR HEALTH</div>
                <h2>We Care About You</h2>
            </div>
        </div>
    </section>
    <!-- End Video Section -->

    <!-- Appointment Section Two -->
    <section id="appointment" class="appointment-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('Website/images/resource/appoinements.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>Appointment Form</h2>
                                <div class="separator"></div>
                            </div>

                            <!-- Appointment Form -->
                            <div class="appointment-form">
                                <form method="POST" action="{{ route('store') }}">
                                    @csrf
                                    @method('post')
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                            <span class="icon fa fa-user"></span>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <span class="icon fa fa-envelope"></span>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="tel" name="phone" placeholder="Phone No" required="">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <select id="section" class="form-select"
                                                aria-label="Default select example" name="section" required>
                                                <option selected disabled>Select The Department </option>
                                                @foreach ($sections as $section)
                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                                            <select id="doctor" class="form-select"
                                                aria-label="Default select example" name="doctor" required>
                                                <option selected disabled>Select The Doctor</option>
                                            </select>

                                        </div>


                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="description" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-two" type="submit"
                                                name="submit-form"><span class="txt">Book
                                                    Appointment</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-section "
        style="background-image: url({{ asset('website/images/background/pattern-3.png') }})">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter style-two">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500"
                                        data-stop="{{ App\Models\dashboard\Patient::count() }}">0</span>
                                </div>
                                <h4 class="counter-title">Satisfied Patients</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box alternate">
                                    +<span class="count-text" data-speed="3000"
                                        data-stop="{{ App\Models\dashboard\doctor::count() }}">0</span>
                                </div>
                                <h4 class="counter-title">Doctor’s Team</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000"
                                        data-stop="{{ App\Models\dashboard\Invoice::count() }}">0</span>
                                </div>
                                <h4 class="counter-title">Success Mission</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->


    <!-- Cotact us Section -->
    <section id="contact" class="newsletter-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Subscribe Our Newsletter</h2>
                        <div class="text">To receive email releases, simply provide us with your email address below.
                        </div>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Your Email Address"
                                        required="">
                                    <button type="submit" class="theme-btn btn-style-two"><span
                                            class="txt">subscribe</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cotact us Section -->
@endsection


@section('js')
    <script>
        // alert("Hello! I am an alert box!!");
        $(document).ready(function() {
            $('select[name = "section"]').on('change', function() {
                var section_id = $(this).val();
                if (section_id) {
                    $.ajax({
                        url: "{{ URL::to('/get_doctor') }}/" + section_id,
                        typ: "GET",
                        dataType: "json",

                        success: function(data) {

                            $('select[name="doctor"]').empty();

                            $('select[name = "doctor"]').append(
                                '<option selected disabled >Select The Doctor</option>'
                            );
                            $.each(data, function(key, doctor) {
                                $('select[name = "doctor"]').append('<option value="' +
                                    doctor['id'] + '" >' + doctor['name'] +
                                    '</option>');
                            });
                        },

                    });
                }
            });
        });
    </script>
@endsection
