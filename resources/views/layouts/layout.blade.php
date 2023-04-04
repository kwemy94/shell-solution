<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=" Shell Solution Développement d'application web au Cameroun,
        Choix sur les solutions d'entreprise, choix d'hebergement en ligne, assistance, mise à jours application web..."/>

        <title>Shell-Solution</title>
        <link rel="canonical" href="http://www.grant-shell.com/">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <link href="/images/logo iOS.png" size="72*72" rel="apple-touch-icon">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .ftco-navbar-light .navbar-nav > .nav-item.active > a {
    background: #518ce8 !important;
    color: #fff; }
    </style>

        
    </head>
    <body>
        @if(session()->has('confirmation_newsletter'))
            <div class="alert alert-success" role="alert" style="text-align:center">
                {{ session()->get('confirmation_newsletter') }}
            </div>
        @endif

        @include('layouts/partials/_header')

        @include('layouts/partials/_navbar')

        @yield('slider')
        
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert" style="text-align:center">
                {{ session()->get('message') }}
            </div>
        @endif

        @yield('content')

        @include('testimonies')

        @include('layouts/partials/_footer')

         <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
