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

    <section class="about photography video">
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
                <div class="colm colm-1" id="videoBox">
                    <div class="box-vid">
                        <div class="left-desc">
                            <div class="text">
                                <h1>MANSIO PROJECT</h1>
                                <p></p>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="right-vid">
                            <a href="/video/mansio" target="__blank">
                                <img src="{{asset('assets/images/gallery/12.jpg')}}" alt="" class="w-100">
                                <span>play <br> film</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-vid">
                        <div class="left-desc">
                            <div class="text">
                                <h1>MATHIS COLLECTION</h1>
                                <p>Co-founder of secret retreats Asia</p>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="right-vid">
                            <a href="/video/mathis" target="__blank">
                                <img src="{{asset('assets/images/gallery/13.jpg')}}" alt="" class="w-100">
                                <span>play <br> film</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-vid">
                        <div class="left-desc">
                            <div class="text">
                                <h1>TUGU HOTELS, BALI</h1>
                                <p>"World's Very Best Luxury Hotels &amp; Resorts" - Forbes</p>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="right-vid">
                            <a href="/video/tugu" target="__blank">
                                <img src="{{asset('assets/images/gallery/11.jpg')}}" alt="" class="w-100">
                                <span>play <br> film</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-vid" id="spec-video">
                        <div class="left-desc">
                            <div class="text">
                                <h1></h1>
                                <p></p>
                            </div>
                        </div>
                        <div class="right-vid">
                            <a href="/video/" target="__blank">
                                <img src="" alt="" class="w-100">
                                <span><br></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
