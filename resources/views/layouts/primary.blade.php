<!doctype html>
<html lang="en">


<head>
    <title> MyMED Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="MyMED">
    <meta name="author" content="Otmane AMAL & Mehdi Elmir - MEDYOUIN">
    <link rel="icon" href="{{ asset('landing/assets/img/faviconMymed.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('primary/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/toastr/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('primary/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/sweetalert/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('primary/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    @livewireStyles
</head>

<body class="{{ Auth::user()->theme }}">

    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img src="{{ asset('landing/assets/img/mymed_logo_light.png') }}" width="128" height="64"
                    alt="MyMed">
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <div class="navbar-brand">
                    <a href="{{ Auth::user()->utype == 'ADM' ? route('landing-home') : route('landing-home') }}">
                        <img src="{{ asset('landing/assets/img/logo_mymed_new.png') }}" width="128" height="34"
                            alt="My MED" class="img-responsive logo"></a>
                </div>
                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i
                                        class="icon-calendar"></i></a>
                            </li>
                            <li>
                                <a href="#" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                            </li>
                            <li>
                                <a href="#" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span
                                        class="notification-dot"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="header"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Campaign <strong>Holiday Sale</strong> is
                                                        nearly
                                                        reach budget limit.</p>
                                                    <span class="timestamp">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-like text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Your New Campaign <strong>Holiday
                                                            Sale</strong> is
                                                        approved.</p>
                                                    <span class="timestamp">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-pie-chart text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Website visits from Twitter is 27% higher
                                                        than last
                                                        week.</p>
                                                    <span class="timestamp">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Error on website analytics configurations
                                                    </p>
                                                    <span class="timestamp">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="footer"><a href="javascript:void(0);" class="more">See
                                            all
                                            notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu"
                                    data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                                <ul class="dropdown-menu user-menu menu-icon">
                                    <li class="menu-heading">ACCOUNT SETTINGS</li>
                                    <li><a href="javascript:void(0);"><i class="icon-note"></i>
                                            <span>Basic</span></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="icon-equalizer"></i>
                                            <span>Preferences</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-lock"></i>
                                            <span>Privacy</span></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="icon-bell"></i>
                                            <span>Notifications</span></a></li>
                                    <li class="menu-heading">BILLING</li>
                                    <li><a href="javascript:void(0);"><i class="icon-credit-card"></i>
                                            <span>Payments</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-printer"></i>
                                            <span>Invoices</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-refresh"></i>
                                            <span>Renewals</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();$('#logout-form').submit();"
                                    class="icon-menu"><i class="icon-login"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="left-sidebar" class="sidebar">
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="{{ asset('primary/assets/images/users/') }}/{{ Auth::user()->profile_photo_path }}"
                        class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>{{ __('language.welcome') }},</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                            <strong>DR. {{ Auth::user()->name }} </strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="doctor-profile.html"><i
                                        class="icon-user"></i>{{ __('language.profile') }}</a></li>
                            <li><a href="app-inbox.html"><i
                                        class="icon-envelope-open"></i>{{ __('language.messages') }}</a></li>
                            <li><a href="javascript:void(0);"><i
                                        class="icon-settings"></i>{{ __('language.settings') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();$('#logout-form').submit();"><i
                                        class="icon-power"></i>{{ __('language.logout') }}</a></li>
                        </ul>
                    </div>
                    <hr>
                    <ul class="row list-unstyled">
                        <li class="col-4">
                            <small>Users</small>
                            <h6>14</h6>
                        </li>
                        <li class="col-4">
                            <small>Contacts</small>
                            <h6>13</h6>
                        </li>
                        <li class="col-4">
                            <small>Appointment</small>
                            <h6>213</h6>
                        </li>
                    </ul>
                </div>

                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu"><i
                                class="icon-grid"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i
                                class="icon-book-open"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i
                                class="icon-settings"></i></a></li>
                </ul>

                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane active" id="menu">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">

                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->utype = 'ADM')
                                            <li class="{{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">
                                                <a href="{{ route('admin-dashboard') }}"><i class="icon-home"></i>
                                                    <span>Dashboard</span></a>
                                            </li>
                                            <li class="@if(request()->routeIs('admin-demandes-all') || request()->routeIs('admin-demandes-show')) {{ 'active' }} @endif">
                                                <a href="{{ route('admin-demandes-all') }}"><i
                                                        class="icon-docs"></i>Manage Demandes</a>
                                            </li>
                                            <li
                                                class="@if (request()->routeIs('admin-users')) {{ 'active' }}@elseif(request()->routeIs('admin-addUser')){{ 'active' }}@elseif(request()->routeIs('admin-editUser')){{ 'active' }} @endif">
                                                <a href="javascript:void(0);"
                                                    aria-expanded="@if (request()->routeIs('admin-users')) {{ 'true' }}@elseif(request()->routeIs('admin-addUser')){{ 'true' }}@else{{ 'false' }} @endif"
                                                    class="has-arrow"><i
                                                        class="icon-users"></i><span>Users</span> </a>
                                                <ul aria-expanded="@if (request()->routeIs('admin-addUser')) {{ 'true' }}@elseif(request()->routeIs('admin-users')){{ 'true' }}@else{{ 'false' }} @endif"
                                                    class="{{ request()->routeIs('admin-users') ? 'collapse in' : '' }}{{ request()->routeIs('admin-addUser') ? 'collapse in' : '' }}">
                                                    <li class="@if (request()->routeIs('admin-users') || request()->routeIs('admin-editUser'))  {{ 'active' }} @endif">
                                                        <a href="{{ route('admin-users') }}">All Users</a>
                                                    </li>
                                                    <li
                                                        class="{{ request()->routeIs('admin-addUser') ? 'active' : '' }}">
                                                        <a href="{{ route('admin-addUser') }}">Add User</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li
                                                class="@if(request()->routeIs('admin-add-cabinet') || request()->routeIs('admin-cabinets-all') || request()->routeIs('admin-edit-cabinet') ){{'active'}} @endif">
                                                <a href="javascript:void(0);"
                                                    aria-expanded="@if(request()->routeIs('admin-add-cabinet') || request()->routeIs('admin-cabinets-all') || request()->routeIs('admin-edit-cabinet') ){{'true'}}@endif"
                                                    class="has-arrow"><i class="fa fa-hospital-o"></i><span>Type
                                                        Cabinets</span> </a>
                                                <ul aria-expanded="@if(request()->routeIs('admin-add-cabinet') || request()->routeIs('admin-cabinets-all') || request()->routeIs('admin-edit-cabinet') ){{'true'}}@endif"
                                                    class="{{ request()->routeIs('admin-cabinets-all') ? 'collapse in' : '' }}{{ request()->routeIs('admin-add-cabinet') ? 'collapse in' : '' }}">
                                                    <li
                                                        class="@if(request()->routeIs('admin-cabinets-all') || request()->routeIs('admin-edit-cabinet') ){{'active'}}@endif">
                                                        <a href="{{ route('admin-cabinets-all') }}">All Type cabinets</a>
                                                    </li>
                                                    <li
                                                        class="{{ request()->routeIs('admin-add-cabinet') ? 'active' : '' }}">
                                                        <a href="{{ route('admin-add-cabinet') }}">Add Type Cabinet</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                    @endauth


                                @endif





                                <li class="{{ request()->routeIs('admin-rendez_vous') ? 'active' : '' }}"><a
                                        href="{{ route('admin-rendez_vous') }}"><i
                                            class="icon-calendar"></i>Appointment</a></li>

                                <li><a href="#"><i class="icon-bubbles"></i>Contacts</a></li>
                                <li class="{{ request()->routeIs('admin-blogs') ? 'active' : '' }}"><a
                                        href="{{ route('admin-blogs') }}"><i class="icon-puzzle"></i>Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane" id="sub_menu">
                        <nav class="sidebar-nav">

                        </nav>
                    </div>
                    <div class="tab-pane" id="Chat">

                    </div>
                    <div class="tab-pane p-l-15 p-r-15" id="setting">
                        <h6>Choose Skin</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple"> <a href="{{ route('change-color', 'theme-purple') }}">
                                    <div class="purple"></div>
                                    <span>Purple</span>
                                </a>

                            </li>
                            <li data-theme="blue"> <a href="{{ route('change-color', 'theme-blue') }}">
                                    <div class="blue"></div>
                                    <span>Blue</span>
                                </a>

                            </li>
                            <li data-theme="cyan"><a href="{{ route('change-color', 'theme-cyan') }}">
                                    <div class="cyan"></div>
                                    <span>Cyan</span>
                                </a>

                            </li>
                            <li data-theme="green"><a href="{{ route('change-color', 'theme-green') }}">
                                    <div class="green"></div>
                                    <span>Green</span>
                                </a>

                            </li>
                            <li data-theme="orange"> <a href="{{ route('change-color', 'theme-orange') }}">
                                    <div class="orange"></div>
                                    <span>Orange</span>
                                </a>

                            </li>
                            <li data-theme="blush"><a href="{{ route('change-color', 'theme-blush') }}">
                                    <div class="blush"></div>
                                    <span>Blush</span>
                                </a>

                            </li>
                        </ul>

                        <hr>
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{ $slot }}


    </div>

    <script src="{{ asset('primary/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/knob.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/flotscripts.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('primary/assets/vendor/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/js/index.js') }}"></script>
    <script src="{{ asset('primary/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('primary/assets/js/pages/ui/dialogs.js') }}"></script>
    <script src="{{ asset('primary/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('primary/assets/js/pages/forms/dropify.js') }}"></script>
    <script src="{{ asset('primary/assets/vendor/dropify/js/dropify.min.js') }}"></script>


    @if (request()->routeIs('admin-dashboard'))
        <script>
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.info('Bonjour {{ Auth::user()->name }}, Bienvenue sur MyMED.');
        </script>
    @endif

    @livewireScripts

    <script>
        window.livewire.on('userDeleted', () => {
            $('#confirmationDelete').modal('hide');
        });
    </script>
    <script>
        window.livewire.on('demandeDeleted', () => {
            $('#confirmationDelete').modal('hide');
        });
    </script>
    <script>
        window.livewire.on('rdvDeleted', () => {
            $('#confirmationDelete').modal('hide');
        });
    </script>

    <script>
        window.livewire.on('rdvConfirme', () => {
            $('#afficherRdv').modal('hide');
        });
    </script>
     <script>
        window.livewire.on('rdvRefuse', () => {
            $('#afficherRdv').modal('hide');
        });
    </script>




</body>


</html>
