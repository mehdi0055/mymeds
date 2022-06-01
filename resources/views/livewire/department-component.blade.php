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
                <h1>{{ __('language.department') }}</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i>{{ __('language.home') }}</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">{{ __('language.department') }}</li>
                    <li class="active">{{ __('language.department') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


    <!-- Start Services
    ============================================= -->
    <div class="department-area bg-gray solid-thumb carousel-shadow default-padding bottom-less">
        <div class="container-fluid">
            <div class="department-items text-center">
                <div class="row">


                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/specialiste.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="title">
                                    <i class="flaticon-doctor"></i>
                                    <h4><a href="{{ route('register') }}">{{ __('language.specialiste') }}</a></h4>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus.
                                </p>
                                <a class="btn circle btn-sm btn-gradient" href="{{ route('register') }}"><i class="fas fa-angle-right"></i>
                                    {{ __('language.sign-up') }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/generaliste.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="title">
                                    <i class="flaticon-paramedic"></i>
                                    <h4><a href="#">{{ __('language.generaliste') }}</a></h4>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus.
                                </p>
                                <a class="btn circle btn-sm btn-gradient" href="#"><i class="fas fa-angle-right"></i>
                                    {{ __('language.sign-up') }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('landing/assets/img/dentist.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="title">
                                    <i class="flaticon-tooth-1"></i>
                                    <h4><a href="#">{{ __('language.dentistes') }}</a></h4>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit amet luctus.
                                </p>
                                <a class="btn circle btn-sm btn-gradient" href="#"><i class="fas fa-angle-right"></i>
                                    {{ __('language.sign-up') }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


</section>

