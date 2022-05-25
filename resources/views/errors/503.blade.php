<!doctype html>
<html lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 16:11:38 GMT -->

<head>
    <title>:: My MED :: Maintenance</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="MYMED">
    <meta name="author" content="Otmane AMAL & Mehdi ELMIR - MEDYOUIN">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('primary/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/css/color_skins.css') }}">
</head>

<body class="theme-cyan">

    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img
                    src="{{ asset('landing/assets/img/logo-.png') }}" width="128"
                    height="72" alt="MyMED"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle maintenance">
                <div class="text-center">
                    <article>
                        <h1>We&rsquo;ll be back soon!</h1>
                        <div>
                            <p>Sorry for the inconvenience<br> but we&rsquo;re performing some maintenance at the
                                moment.<br> If you need to you can always <a
                                    href="{{ route('landing-contact') }}">contact us</a>,
                                otherwise we&rsquo;ll be back online shortly!</p>
                            <p>&mdash; The Team</p>
                        </div>
                    </article>
                    <div class="margin-top-30">
                        <a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i>
                            <span>Go Back</span></a>
                        <a href="{{ route('landing-home') }}" class="btn btn-info"><i class="fa fa-home"></i> <span>Home</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('primary/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('primary/assets/bundles/mainscripts.bundle.js') }}"></script>

</body>


</html>