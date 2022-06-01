<section>
    <!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area bg-gradient text-center">
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-image: url({{ asset('landing/assets/img/shape/9.png') }});"></div>
    <!-- Fixed BG -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ __('language.about') }}</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i>{{ __('language.home') }}</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">{{ __('language.about') }}</li>
                    <li class="active">{{ __('language.about') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start About
============================================= -->
<div class="about-area bg-gray default-padding relative">

     <!-- Shape -->
    <div class="shape-left-top shape">
        <img src="{{ asset('landing/assets/img/shape/1.png') }}" alt="Shape">
    </div>
    <!-- End Shape -->

    <div class="container">
        <div class="row">

            <div class="col-lg-6 thumb">
                <div class="thumb-box">
                    <img src="{{ asset('landing/assets/img/aboutMymed.png') }}" alt="Thumb">
                    <div class="intro-video">
                        <div class="video">
                            <a href="https://www.youtube.com/watch?v=5vY-D42NFP4" class="popup-youtube relative theme video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h5>{{ __('language.Intro-Video') }}</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 info">
                  <h2>{{ __('language.about') }} <strong>MYMED .</strong></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor, finibus et neque ut, tempus porttitor velit. Ut venenatis condimentum nisi, ultrices dignissim dui tincidunt sit amet. Donec laoreet.
                        </p>

                         <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor, finibus et neque ut, tempus porttitor velit. Ut venenatis condimentum nisi, ultrices dignissim dui tincidunt sit amet. Donec laoreet.
                        </p>

                        <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> {{ __('language.sign-up') }}</a>
            </div>

        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Services
============================================= -->
<div class="department-area icon-only carousel-shadow default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Services</h4>
                    <h2>{{ __('language.Solution-profession') }}</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor, finibus et neque ut, tempus porttitor velit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="item-box text-center">
            <div class="department-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="item">
                    <div class="info">
                        <h4>
                            <a href="#">{{ __('language.dentistes') }}</a>
                        </h4>
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis.
                        </p>
                        <a class="btn btn-sm circle btn-theme border" href="{{ route('register') }}"><i class="fas fa-angle-right"></i>  {{ __('language.sign-up') }}</a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="info">
                        <h4>
                            <a href="#">{{ __('language.generaliste') }}</a>
                        </h4>
                        <div class="icon">
                            <i class="flaticon-paramedic"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis.
                        </p>
                        <a class="btn btn-sm circle btn-theme border" href="{{ route('register') }}"><i class="fas fa-angle-right"></i>  {{ __('language.sign-up') }}</a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="info">
                        <h4>
                            <a href="#">{{ __('language.specialiste') }}</a>
                        </h4>
                        <div class="icon">
                            <i class="flaticon-doctor"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis.
                        </p>
                        <a class="btn btn-sm circle btn-theme border" href="{{ route('register') }}"><i class="fas fa-angle-right"></i>  {{ __('language.sign-up') }}</a>
                    </div>
                </div>
                <!-- End Single Item -->


            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Start Choose Us
=============================================
<div class="choose-us-area relative inc-list">
    <div class="row">
        <div class="col-lg-6 thumb bg-cover" style="background-image: url({{ asset('landing/assets/img/2440x1578.png') }});"></div>
        <div class="col-lg-6 info">
            <div class="info-box">
                <h5>Why Choose Us</h5>
                <h2>At Our Clinic Our <br> Doctors Specialize in you.</h2>
                <ul>
                    <li>
                        <h5>More Experience</h5>
                        <p>
                            Be confident in the treatment plan and your doctor’s abilities.
                        </p>
                    </li>
                    <li>
                        <h5>The right answers?</h5>
                        <p>
                            Get the answers and assurance you deserve and you can trust.
                        </p>
                    </li>
                    <li>
                        <h5>Seamless care</h5>
                        <p>
                            We’re committed to delivering  compassionate healthcare.
                        </p>
                    </li>
                    <li>
                        <h5>Unparalleled expertise</h5>
                        <p>
                            Don’t doubt that you are getting the expert care that you deserve.
                        </p>
                    </li>
                </ul>
                <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> About Us</a>
            </div>
        </div>
    </div>
</div>  -->
<!-- End Choose Us -->

<!-- Start Team
=============================================
<div class="team-default-area bg-gray default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Doctors</h4>
                    <h2>Meet our Experts</h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="team-items text-center">
            <div class="row">

                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('landing/assets/img/800x800.png') }}" alt="Thumb">
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-phone"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Dr. Jonathom Doe</h5>
                            <span>Dentist</span>
                        </div>
                    </div>
                </div>

                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('landing/assets/img/800x800.png') }}" alt="Thumb">
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-phone"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Prof. Sakaoat Amir</h5>
                            <span>Neurologist</span>
                        </div>
                    </div>
                </div>

                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('landing/assets/img/800x800.png') }}" alt="Thumb">
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-phone"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Dr. Andro kuria</h5>
                            <span>Dermatologists</span>
                        </div>
                    </div>
                </div>

                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('landing/assets/img/800x800.png') }}" alt="Thumb">
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-phone"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Prof. Matori Pulas</h5>
                            <span>Medicine Specialists</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->
<!-- End Team -->

<!-- Start Testomonials
=============================================
<div class="testimonials-area overflow-hidden carousel-shadow default-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-4 text-light">
                <div class="heading">
                    <h5>Testimonials</h5>
                    <h2>Whay people says <br> about our services</h2>
                    <a class="btn btn-sm btn-light effect" href="#"><i class="fas fa-angle-right"></i>Viewl All</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonials-carousel text-center owl-carousel owl-theme">

                    <div class="item">
                        <div class="provider">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/100x100.png') }}" alt="Thumb">
                            </div>
                            <div class="bio">
                                <h5>Jonathom Doe</h5>
                                <span>patient of <strong>surgery</strong></span>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                                Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="provider">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/100x100.png') }}" alt="Thumb">
                            </div>
                            <div class="bio">
                                <h5>Jonathom Doe</h5>
                                <span>patient of <strong>surgery</strong></span>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                                Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="provider">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/100x100.png') }}" alt="Thumb">
                            </div>
                            <div class="bio">
                                <h5>Jonathom Doe</h5>
                                <span>patient of <strong>surgery</strong></span>
                            </div>
                        </div>
                        <div class="info">
                            <p>
                                Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Testomonials Area -->
</section>
