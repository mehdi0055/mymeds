<!doctype html>
<html lang="en">

<head>
    <title>:: My MED :: 404</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="MYMED">
    <meta name="author" content="Otmane AMAL & Mehdi ELMIR - MEDYOUIN">
    <link rel="icon" href="{{ asset('landing/assets/img/logo.png') }}" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('primary/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/css/color_skins.css') }}">
</head>

<body class="theme-cyan">

    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="{{ asset('landing/assets/img/mymed_logo_light.png') }}" alt="MYMED">
                    </div>
                    <div class="card">
                        <div class="header">
                            <h3>
                                <span class="clearfix title">
                                    <span class="number left">404</span> <span class="text">Oops! <br />Page Not
                                        Found</span>
                                </span>
                            </h3>
                        </div>
                        <div class="body">
                            <p>The page you were looking for could not be found, please
                                 <a href="{{ route('landing-contact') }}">contact us </a>to report this issue.
                            </p>
                            <div class="margin-top-30">
                                <a href="javascript:history.go(-1)" class="btn btn-default">
                                    <i class="fa fa-arrow-left"></i> <span>Go Back</span>
                                </a>
                                <a href="{{ route('landing-home') }}" class="btn btn-primary">
                                    <i class="fa fa-home"></i> <span>Home</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
