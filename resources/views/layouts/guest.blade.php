{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}
<!doctype html>
<html lang="en">
<head>
    <title>MyMED</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="MyMED">
    <meta name="author" content="Otmane AMAL & Mehdi Elmir - MEDYOUIN">
    <link rel="icon" href="{{ asset('landing/assets/img/faviconMymed.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/jquery-steps/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('primary/assets/vendor/sweetalert/sweetalert.css') }}">
    @livewireStyles
    
</head>

<body class="theme-cyan">

    {{ $slot }}

    @livewireScripts
    
</body>
</html>