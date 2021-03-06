<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="{{asset('https://use.fontawesome.com/releases/v5.15.1/js/all.js')}}" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700')}}" rel="stylesheet" />
    <link href="{{asset('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic')}}" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css')}}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
<body id="page-top">


    @include('partials.nav2')
    @yield('content')
    @include('partials.footer')

     <!-- Bootstrap core JS-->
     <script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>
     <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js')}}"></script>
     <!-- Third party plugin JS-->
     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js')}}"></script>
     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js')}}"></script>
     <!-- Core theme JS-->
     <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>