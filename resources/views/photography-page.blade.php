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
                                <p>approved by</p>
                                <img src="{{asset('assets/images/logo/VOGUE-WHITE.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('photography-images/small.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/small.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('photography-images/3.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/3.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('photography-images/2.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/2.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('photography-images/5.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/5.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                </div>
                <div class="colm colm-2">
                    <div class="box-img">
                        <a href="{{asset('photography-images/6.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/6.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('photography-images/7.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/7.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('photography-images/1.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('photography-images/1.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
{{--                    <div class="box-img">--}}
{{--                        <a href="{{asset('photography-images/1648157F-B14D-4433-B1E0-60383752C816-7F97B12F-2BBF-4758-9905-3F11D1F27978.jpg')}}" data-lightbox="example-1">--}}
{{--                            <img src="{{asset('photography-images/1648157F-B14D-4433-B1E0-60383752C816-7F97B12F-2BBF-4758-9905-3F11D1F27978.jpg')}}" alt="" class="w-100">--}}
{{--                        </a>--}}
{{--                    </div>--}}

                    <div class="box-img" style="height: 150px">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="photo-vogue">
            <div class="wrapp">
                <p>approved by</p>
                <img src="{{asset('assets/images/logo/VOGUE-WHITE.png')}}" alt="">
            </div>
        </div>
    </section>
@endsection
