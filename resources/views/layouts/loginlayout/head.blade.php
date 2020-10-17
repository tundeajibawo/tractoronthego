<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
        content="Find a tractor, service your farming needs, join a farming cluster and much more...">
  <meta name="author" content="Osi">
  <meta name="theme-color" content="#dd3e00">
  <meta name="msapplication-navbutton-color" content="#dd3e00">
  <meta name="apple-mobile-web-app-status-bar-style" content="#dd3e00">
  <meta name="keywords" content="tractors, tractor booking, find a tractor, book a tractor, tractor clusters">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <meta name="google-site-verification" content="uuQGF7FG6atIXaSy35esG7BaWOihaDcm_9wd6zCjS54"/>
  <meta name="description"
        content="Your #1 Tractor Booking and Management Portal. Join a Tractor Cluster today, list your tractor.">
  <meta name="keywords"
        content="tractors, tractor booking, search, tractor clusters, tractors, tractor service providers, services, farmers, farming services, tractor services, ploughing, tractorization, Nigeria, Lagos">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


        <title> @yield('title')</title>

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/user/js/rangeslider.min.js')}}"></script>
    <script src="{{asset('assets/user/js/parsley.min.js')}}"></script>

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtVa7UEITPJrdU6rrXGbaOltsD70lxhEY&libraries=places"
            async defer></script>

    <link rel="icon" href="{{asset('assets/img/fav.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" type="image/x-icon"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/user/home.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/user/rangeslider.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body:before {
            content: "";
            display: block;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -10;
            /*background: url('/assets/img/header-bg.jpg')*/
            no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

       /*  video#bgvid { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url(assets/img/header-bg.jpg) no-repeat;
    background-size: cover; 
} */

video#bgvid { 
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
  transform: translate(-50%, -50%);
}

    </style>
</head>
