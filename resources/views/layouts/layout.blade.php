<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Born by curiosity and wistfulness, our visual stories interlace the enigmatic realms of architecture, space, travel.">
    <meta name="keywords" content="architecture, space, travel">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Twitter cards and open graphs -->
    <meta property="og:title" content="Mansio">
    <meta property="og:description"
          content="Born by curiosity and wistfulness, our visual stories interlace the enigmatic realms of architecture, space, travel.">
    <meta property="og:image" content="{{asset('assets/images/logo/fin-black.jpg')}}">
    <meta property="og:url" content="http://www.mansio.me/">
    <meta property="og:type" content="article" />

    <meta name="twitter:title" content="Mansio">
    <meta name="twitter:description"
          content="Born by curiosity and wistfulness, our visual stories interlace the enigmatic realms of architecture, space, travel.">
    <meta name="twitter:image" content="{{asset('assets/images/logo/fin-black.jpg')}}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Twitter cards and open graphs -->

    <title>Mansio</title>
    <link rel="canonical" href="http://www.mansio.me">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="{{asset('sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/slick.min.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

    <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "Architecture",
            "name": "Mansio",
            "description": "Born by curiosity and wistfulness, our visual stories interlace the enigmatic realms of architecture, space, travel. Mansio has established an international clientele with world-renowned names and magazines.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Milano",
                "addressCountry": "Italy"
            }
        }
    </script>
</head>

<body>

<div class="preloader">
    <img src="{{asset('assets/images/loader.gif')}}" alt="">
</div>

<header class="nav-hamburger @if(Illuminate\Support\Facades\Route::current()->uri() == '/' || Illuminate\Support\Facades\Route::current()->uri() == 'video/{name}') homepage-nav @endif" onclick="realMuteVideo()">
    <div class="nav-icon float-right">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<nav class="navigation">
    <div class="full-menu">
        <div class="row">
            <div class="col-5 left">
                <div class="logo">
                    <!-- <div class="overlay"></div> -->
                    <img src="{{asset('assets/images/logo/png-white2.png')}}" alt="">
                </div>
                <img src="{{asset('assets/images/logo/png-white2.png')}}" alt="">
                <div class="drops">
                    <div class="drop"></div>
                </div>
            </div>
            <div class="col-3 main">
                <div class="wrapp">
                    <ul class="menu menu-1">
                        <li><a class="active" href="/">Homepage</a></li>
                        <li><a href="/photography">Photography</a></li>
                        <li><a href="/video">Video</a></li>
                        <li><a href="/architecture">Architecture</a></li>
                    </ul>
                    <ul class="menu menu-2">
                        <li><a href="/about">About</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4 right">
                <div class="drops">
                    <div class="drop"></div>
                </div>
                <div class="p">
                    <p>2019 &copy; mansio all right reserved | legal notice</p>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')




<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<script src="{{asset('assets/js/email.js')}}"></script>


</body>
</html>
