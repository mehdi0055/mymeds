<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyMed -  Logiciel de gestion de votre cabinet médical">
    <meta name="author" content="Otmane AMAL & Mehdi Elmir - MEDYOUIN">
    <!-- ========== Page Title ========== -->
    <title>{{ $title }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('landing/assets/img/faviconMymed.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('landing/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/css/responsive.css') }}" rel="stylesheet" />


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('landing/assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('landing/assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">
    @livewireStyles
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area bg-dark text-light inc-pad p-2">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    <div class="info">
                        <ul>
                            <li>
                                <a href="{{ route('change-language', ['local' => 'fr']) }}">
                                    <img src="{{ asset('landing/assets/img/icon/fr.svg') }}" alt="Français"
                                        width="30" height="20">
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('change-language', ['local' => 'en']) }}">
                                    <img src="{{ asset('landing/assets/img/icon/us.svg') }}" alt="English" width="30"
                                        height="20">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('landing-home') }}">
                        <img src="{{ asset('landing/assets/img/logo_mymed_new.png') }}" width="140"
                            class="img-responsive logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="{{ route('landing-home') }}">{{ __('language.home') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('landing-department') }}">Department</a>
                        </li>
                        <li>
                            <a href="{{ route('landing-about') }}">{{ __('language.about') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('landing-contact') }}">{{ __('language.contact') }}</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-user-md"></i> {{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        @if (Auth::user()->utype === 'ADM')
                                            <li>
                                                <a href="{{ route('admin-dashboard') }}">
                                                    <i class="fas fa-tachometer-alt"></i> {{ __('language.dashboard') }}
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('user-dashboard') }}">
                                                    <i class="fas fa-tachometer-alt"></i> {{ __('language.dashboard') }}
                                                </a>
                                            </li>
                                        @endif
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST">@csrf</form>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();$('#logout-form').submit();">
                                                <i class="fas fa-sign-in-alt"></i> {{ __('language.logout') }}
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}"><i class="fas fa-lock"></i>
                                        {{ __('language.login') }}</a>
                                </li>
                            @endauth
                        @endif

                        <div id="langue" style="display: none">

                            <li>
                                <a href="{{ route('change-language', ['local' => 'fr']) }}">
                                    <img src="{{ asset('landing/assets/img/icon/fr.svg') }}" alt="Français" width="30"
                                        height="20"> Français
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('change-language', ['local' => 'en']) }}">
                                    <img src="{{ asset('landing/assets/img/icon/us.svg') }}" alt="English" width="30"
                                        height="20"> English
                                </a>
                            </li>


                        </div>



                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    {{ $slot }}

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 item">
                        <div class="f-item about">
                            <img src="{{ asset('landing/assets/img/mymed_logo_light.png') }}" alt="Logo" width="128">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod euismod enim sit
                                amet luctus. Vivamus pretium lorem at posuere facilisis.
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="info">
                                            <h5>{{ __('language.Email') }}:</h5>
                                            <span>support@validtemplates.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="info">
                                            <h5>{{ __('language.Phone') }}:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-item col-lg-4 col-md-4 col-xl-4 col-sm-12 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Department</h4>
                            <ul>
                                <li>
                                    <a href="#">{{ __('language.dentistes') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ __('language.generaliste') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ __('language.specialiste') }}</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Ambulance</a>
                                </li>
                                <li>
                                    <a href="#">Emergency</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <div class="single-item col-lg-4 col-md-4 col-xl-4 col-sm-12 item">
                        <div class="f-item branches">
                            <div class="branches">
                                <ul>
                                    <li>
                                        <strong>USA Branches:</strong>
                                        <span>4992 Bryan Avenue, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                    <li>
                                        <strong>Central Branches:</strong>
                                        <span>2001 Kia Magentis, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <p>Copyright &copy; 2022. Designed by <a href="#">MYI</a></p>
                    </div>
                    <div class="col-lg-6 text-right social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i> Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('landing/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('landing/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/count-to.js') }}"></script>
    {{-- <script src="{{ asset('landing/assets/js/jquery.nice-select.min.js') }}"></script> --}}
    <script src="{{ asset('landing/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @livewireScripts

    @stack('scripts')
</body>

</html>
