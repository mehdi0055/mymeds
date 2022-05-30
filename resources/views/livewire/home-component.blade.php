<section>
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-less">
        <div id="bootcarousel" class="carousel text-large slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url({{ asset('landing/assets/img/slide8.png') }});"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">

                                            <h2 data-animation="animated slideInRight">{{ __('language.slider1p1') }}
                                                <strong>{{ __('language.slider1p2') }}</strong>
                                            </h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient"
                                                href="{{ route('register') }}"><i
                                                    class="fas fa-angle-right"></i>{{ __('language.sign-up') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover"
                        style="background-image: url({{ asset('landing/assets/img/slide5.png') }});"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">

                                            <h2 class="text-light" data-animation="animated slideInRight">
                                                {{ __('language.slider2p1') }}
                                                <strong>{{ __('language.slider2p2') }}</strong>
                                            </h2>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient"
                                                href="{{ route('register') }}"><i class="fas fa-angle-right"></i>
                                                {{ __('language.sign-up') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control theme" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control theme" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Facilities
    ============================================= -->
    <div class="facilites-area default-padding-bottom">
        <div class="container">
            <div class="facilites-box">
                <div class="row align-center">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-xl-4 col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="info">
                                <h4>{{ __('language.assistance') }}</h4>
                                <p>
                                    {{ __('language.assistanceP') }}
                                </p>
                                <h5><a href="#"><strong>{{ __('language.Phone') }}:</strong> +212 625 214 562</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-xl-4 col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-test"></i>
                            </div>
                            <div class="info">
                                <h4>{{ __('language.insstalation') }}</h4>
                                <p>
                                    {{ __('language.insstalationP') }}
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-xl-4 col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-blood"></i>
                            </div>
                            <div class="info">
                                <h4>{{ __('language.mise-a-jour') }}</h4>
                                <p>
                                    {{ __('language.mise-a-jourP') }}
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Facilities -->

    <!-- Start Choose Us Area
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
                                <a href="https://www.youtube.com/watch?v=5vY-D42NFP4"
                                    class="popup-youtube relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="content">
                                <h5>{{ __('language.Intro-Video') }}</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim
                                    sit amet luctus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <h2>{{ __('language.History-MYMED') }} <strong>MYMED .</strong></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet
                        luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor, finibus et neque ut, tempus
                        porttitor velit. Ut venenatis condimentum nisi, ultrices dignissim dui tincidunt sit amet. Donec
                        laoreet.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet
                        luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor, finibus et neque ut, tempus
                        porttitor velit. Ut venenatis condimentum nisi, ultrices dignissim dui tincidunt sit amet. Donec
                        laoreet.
                    </p>

                    <a class="btn btn-md btn-gradient" href="{{ route('register') }}"><i
                            class="fas fa-angle-right"></i> {{ __('language.sign-up') }}</a>

                </div>

            </div>
        </div>
    </div>


    <!-- <div class="chooseus-area relative default-padding-bottom">
        <div class="container">
            <div class="chooseus-box">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h2>Histoire de <strong>MYMED .</strong></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor, finibus et neque ut, tempus porttitor velit. Ut venenatis condimentum nisi, ultrices dignissim dui tincidunt sit amet. Donec laoreet.
                        </p>

                        <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> {{ __('language.sign-up') }}</a>
                    </div>

                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ asset('landing/assets/img/thumb/4.png') }}" alt="Thumb">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="shape-bottom shape">
            <img src="{{ asset('landing/assets/img/shape/12.png') }}" alt="Shape">
        </div>

    </div> -->
    <!-- End Choose Us Area  -->

    <!-- Start Services
    ============================================= -->
    <div class="department-area carousel-shadow default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Services</h4>
                        <h2>{{ __('language.Solution-profession') }}</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet
                            luctus. Vivamus pretium lorem at posuere facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-items department-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/dentist.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">{{ __('language.dentistes') }}</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim
                                    sit amet luctus.
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jonathom Doe
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="{{ route('register') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/generaliste.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">{{ __('language.generaliste') }}</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim
                                    sit amet luctus.
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="{{ route('register') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/specialiste.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">{{ __('language.specialiste') }}</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim
                                    sit amet luctus.
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Shikla Brotha
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="{{ route('register') }}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Consultation
    ============================================= -->
    <div class="consultation-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 process">
                    <h2>
                        {{ __('language.envie') }}
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet
                        luctus. Vivamus pretium lorem at posuere facilisis. Sed est tortor.
                    </p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-calendar-1"></i>
                                <h5>Make Appointment</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-phone-call"></i>
                                <h5>24/7 <br>Days</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-cardiologist"></i>
                                <h5>Satisfied customer</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form">
                    <div class="appoinment-box text-center wow fadeInRight">
                        <div class="heading">
                            <h4>{{ __('language.Make-Appointment') }}</h4>
                        </div>
                        <form wire:submit.prevent="takeAppointement()">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input wire:model.debounce.1000ms="name" class="form-control" id="f_name"
                                            name="name" placeholder="{{ __('language.Name') }}" type="text">
                                        @error('name')
                                            <span class="text-light">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input wire:model.debounce.1000ms="phone" class="form-control" id="f_phone"
                                            name="phone" placeholder="{{ __('language.Phone') }}" type="text">
                                        @error('phone')
                                            <span class="text-light">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input wire:model.debounce.1000ms="email" class="form-control" id="f_email"
                                            name="email" placeholder="{{ __('language.Email') }}" type="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="text-light nice-select " wire:model="date">
                                            <option style="color: black" value="">select date</option>
                                            <option style="color: black" value="monday">{{ __('language.Monday') }}
                                            </option>
                                            <option style="color: black" value="tuesday">
                                                {{ __('language.Saturday') }}</option>
                                            <option style="color: black" value="wednesday">
                                                {{ __('language.Sunday') }}</option>
                                            <option style="color: black" value="thursday">
                                                {{ __('language.Thursday') }}</option>
                                            <option style="color: black" value="friday">{{ __('language.Friday') }}
                                            </option>
                                        </select>
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="text-light nice-select " wire:model="time">
                                            <option style="color: black" value="">select time</option>
                                            <option style="color: black" value="09:00-10:00">09:00-10:00 am</option>
                                            <option style="color: black" value="10:00-11:00">10:00-11:00 am</option>
                                            <option style="color: black" value="11:00-12:00">11:00-12:00 am</option>
                                            <option style="color: black" value="12:00-13:00">12:00-13:00 am</option>
                                            <option style="color: black" value="14:00-15:00">14:00-15:00 pm</option>
                                            <option style="color: black" value="15:00-16:00">15:00-16:00 pm</option>
                                            <option style="color: black" value="16:00-17:00">16:00-17:00 pm</option>
                                            <option style="color: black" value="17:00-18:00">17:00-18:00 pm</option>
                                        </select>
                                        @error('time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="f_submit">
                                        {{ __('language.Book-Appoinment') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Consultation -->

    <!-- Start Doctos Area
    ============================================= -->
    <div class="doctors-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>{{ __('language.Doctors') }}</h4>
                        <h2>{{ __('language.Meet-Experts') }}</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet
                            luctus. Vivamus pretium lorem at posuere facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="doctor-items">
                <div class="row">

                    <div class="col-lg-4">
                        <ul id="tabs" class="nav nav-tabs">

                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                    <i class="flaticon-tooth-1"></i>
                                    <span>{{ __('language.dentistes') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-paramedic"></i>
                                    <span>{{ __('language.generaliste') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-doctor"></i>
                                    <span>{{ __('language.specialiste') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8">
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">

                            <div id="tab1" class="tab-pane fade active show">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="{{ asset('landing/assets/img/doctor3.png') }}" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Dr. Jonathom Doe</h4>
                                                <span>{{ __('language.dentistes') }}</span>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                                    euismod euismod enim sit amet luctus. Vivamus pretium lorem at
                                                    posuere facilisis.
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i
                                                        class="fas fa-angle-right"></i>
                                                    {{ __('language.Read-more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="{{ asset('landing/assets/img/doctor2.png') }}" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Prof. Hones Park </h4>
                                                <span>{{ __('language.dentistes') }}</span>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                                    euismod euismod enim sit amet luctus. Vivamus pretium lorem at
                                                    posuere facilisis.
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i
                                                        class="fas fa-angle-right"></i>
                                                    {{ __('language.Read-more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="{{ asset('landing/assets/img/doctor1.png') }}" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Professor. Sakaoat Amir</h4>
                                                <span>{{ __('language.generaliste') }}</span>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                                    euismod euismod enim sit amet luctus. Vivamus pretium lorem at
                                                    posuere facilisis.
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i
                                                        class="fas fa-angle-right"></i>
                                                    {{ __('language.Read-more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="{{ asset('landing/assets/img/doctor2.png') }}" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Dr. Andro kuria</h4>
                                                <span>{{ __('language.specialiste') }}</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see
                                                    entreaties. She propriety immediate was improving. He or entrance
                                                    humoured likewise moderate.
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i
                                                        class="fas fa-angle-right"></i>
                                                    {{ __('language.Read-more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Doctos Area -->

    <!--
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
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me.
                                    Unpleasing.
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
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me.
                                    Unpleasing.
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
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me.
                                    Unpleasing.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
     -->



    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">

                    <div class="col-lg-7 wow address-box fadeInUp bg-cover"
                        style="background-image: url({{ asset('landing/assets/img/contact-us.png') }});">
                        <div class="address-info">
                            <ul>
                                <li>
                                    <h5><i class="flaticon-call"></i> {{ __('language.Phone') }}</h5>
                                    <span>+44-20-7328-4499</span>
                                </li>
                                <li>
                                    <h5><i class="flaticon-email"></i> {{ __('language.Email') }}</h5>
                                    <span>mymed@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInLeft contact-form-box">
                        <h2>{{ __('language.Need-help') }} <strong>{{ __('language.Ask-question') }}</strong></h2>
                        <form wire:submit.prevent="takeContactUs()" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input wire:model.debounce.1000ms="nameContact" class="form-control"
                                            id="nameContact" name="nameContact"
                                            placeholder="{{ __('language.Name') }}" type="text">

                                        @error('nameContact')
                                            <span class="alert-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input wire:model.debounce.1000ms="emailContact" class="form-control"
                                            id="emailContact" name="emailContact"
                                            placeholder="{{ __('language.Email') }}*" type="email">
                                        @error('emailContact')
                                            <span class="alert-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input wire:model.debounce.1000ms="phoneContact" class="form-control"
                                            id="phoneContact" name="phoneContact"
                                            placeholder="{{ __('language.Phone') }}" type="text">
                                        @error('phoneContact')
                                            <span class="alert-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea wire:model.debounce.1000ms="message" class="form-control" id="comments" name="comments"
                                            placeholder="{{ __('language.Message') }} *"></textarea>
                                        @error('message')
                                            <span class="alert-error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        {{ __('language.Send-message') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area bottom-less bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>{{ __('language.News') }}</h4>
                        <h2>{{ __('language.Latest-Blog') }}</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet
                            luctus. Vivamus pretium lorem at posuere facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('landing/assets/img/blog/blog1.png') }}"
                                        alt="Thumb"></a>
                                <div class="post-date">
                                    12 Jul
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Health</a>
                                        </li>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Enjoyed me settled mr respect no spirits civilly. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('landing/assets/img/blog/blog1.png') }}"
                                                    alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('landing/assets/img/blog/blog2.png') }}"
                                        alt="Thumb"></a>
                                <div class="post-date">
                                    05 Aug
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Test</a>
                                        </li>
                                        <li>
                                            <a href="#">Doctor</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Suitable settling attended no doubtful feelings.</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('landing/assets/img/blog/blog2.png') }}"
                                                    alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 24 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('landing/assets/img/blog/blog3.png') }}"
                                        alt="Thumb"></a>
                                <div class="post-date">
                                    27 Dec
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Unwilling sportsmen he in questions september. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('landing/assets/img/blog/blog3.png') }}"
                                                    alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 07 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
    <!-- End Contact -->

<!-- Notification -->

    @if (session()->has('success'))
        <script>
            swal('success', '{{ session('success') }}', 'success', {
                Button: "ok",
            });
        </script>
    @endif
    @if (session()->has('addContact'))
        <script>
            swal('success', '{{ session('addContact') }}', 'success', {
                Button: "ok",
            });
        </script>
    @endif

    <!-- End Notification -->


</section>
