@extends('layouts.layout')

@section('content')

    <section class="mobile-wrapp photo">
        <div class="navbar mob-nav py-0">
            <div class="hamburger">
                <button class="navbar-toggler">
                    <div class="menu-btn_burger"></div>
                </button>
            </div>
        </div>
        <div class="logo-mansio">
            <img src="{{asset('assets/images/logo/png-white2.png')}}" alt="">
        </div>
        <div class="menu">
            <div class="wrapp">
                <ul>
                    <li><a class="active" href="/">Homepage</a></li>
                    <li><a href="/photography">Photography</a></li>
                    <li><a href="/video">Video</a></li>
                    <li><a href="/architecture">Architecture</a></li>
                </ul>
                <ul>
                    <li><a href="/about">About</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about photography">
        <div class="row">
            <div class="col-3 left">
                <div class="logo">
                    <!-- <div class="overlay"></div> -->
                    <img src="{{asset('assets/images/logo/png-white2.png')}}" alt="">

                </div>
                <p>2019 &copy; mansio all right reserved | legal notice</p>
            </div>
            <div class="drops">
                <div class="drop left-drop"></div>
                <div class="drop right-drop"></div>
            </div>
            <div class="col-sm-12 col-lg-8 right">
                <div class="colm colm-1">
                    <div class="box-img">
                        <div class="wrapp">
                            <div class="main">
                            </div>
                        </div>
                    </div>
                    <div class="box-img">
                        <div class="wrap">
                            <a href="/architecture/house-for-sculptor">
                                <img src="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/GLAVNA11.jpg')}}" alt=""
                                     class="w-100">
                            </a>
                            <div class="overlay-text">
                                <a href="/architecture/house-for-sculptor">
                                    <div class="h1">
                                        <h1>HOUSE FOR SCULPTOR</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-img">
                        <div class="wrap">
                            <a href="/architecture/kindergarten">
                                <img src="{{asset('assets/images/arhitektura/KINDERGARTEN-MONTENEGRO/GLAVNA-1.jpeg')}}"
                                     alt="" class="w-100">
                            </a>
                            <div class="overlay-text">
                                <a href="/architecture/kindergarten">
                                    <div class="h1">
                                        <h1>KINDERGARTEN, MONTENEGRO</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colm colm-2">
                    <div class="box-img">
                        <div class="wrap">
                            <a href="/architecture/school">
                                <img src="{{asset('assets/images/arhitektura/HIGH-SCHOOL/glavna.jpg')}}" alt=""
                                     class="w-100">
                            </a>
                            <div class="overlay-text">
                                <a href="/architecture/school">
                                    <div class="h1">
                                        <h1>HIGH SCHOOL</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-img">
                        <div class="wrap">
                            <a href="/architecture/vertical-submarine">
                                <img src="{{asset('assets/images/arhitektura/VERTICAL-SUBMARINE-JAPAN/Glavni1.jpg')}}"
                                     alt="" class="w-100">
                            </a>
                            <div class="overlay-text">
                                <a href="/architecture/vertical-submarine">
                                    <div class="h1">
                                        <h1>VERTICAL SUBMARINE, JAPAN</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-img">
                        <div class="wrap">
                            <a href="/architecture/winery">
                                <img src="{{asset('assets/images/arhitektura/WINERY/vinarijaaa.jpg')}}" alt=""
                                     class="w-100">
                            </a>
                            <div class="overlay-text">
                                <a href="/architecture/winery">
                                    <div class="h1" style="">
                                        <h1>WINERY</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-img secret-height" style="">
                        <div class="wrap">
                            <a href="#">
                                <img src="" alt="" class="w-100">
                            </a>
                            <div class="overlay-text">
                                <a href="#">
                                    <div class="h1">
                                        <h1></h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
