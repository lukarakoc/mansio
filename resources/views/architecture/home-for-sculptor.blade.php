@extends('layouts.layout')

@section('content')

    <section class="mobile-wrapp photo">
        <div class="navbar mob-nav py-0">
            <div class="hamburger">
                <button class="navbar-toggler">
                    <div class="menu-btn_burger"></div>
                </button>
            </div>
            <div class="back">
                <a href="javascript:history.back()">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                         xml:space="preserve">
                        <g>
                            <g>
                                <path d="M423.542,333.792c-4.167-4.167-10.917-4.167-15.083,0L266.667,475.583V10.667C266.667,4.771,261.896,0,256,0
                                       s-10.667,4.771-10.667,10.667v464.917L103.542,333.792c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083
                                       l160,160c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125l160-160C427.708,344.708,427.708,337.958,423.542,333.792z
                                       " />
                            </g>
                        </g>
                    </svg>
                </a>
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
                    <a href="javascript:history.back()">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                             xml:space="preserve">
                        <g>
                            <g>
                                <path d="M423.542,333.792c-4.167-4.167-10.917-4.167-15.083,0L266.667,475.583V10.667C266.667,4.771,261.896,0,256,0
                                       s-10.667,4.771-10.667,10.667v464.917L103.542,333.792c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083
                                       l160,160c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125l160-160C427.708,344.708,427.708,337.958,423.542,333.792z
                                       "/>
                            </g>
                        </g>
                    </svg>
                    </a>
                    <div class="back-icon">
                        <a href="javascript:history.back()">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                 xml:space="preserve">
                        <g>
                            <g>
                                <path d="M423.542,333.792c-4.167-4.167-10.917-4.167-15.083,0L266.667,475.583V10.667C266.667,4.771,261.896,0,256,0
                                       s-10.667,4.771-10.667,10.667v464.917L103.542,333.792c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083
                                       l160,160c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125l160-160C427.708,344.708,427.708,337.958,423.542,333.792z
                                       "/>
                            </g>
                        </g>
                    </svg>
                        </a>
                    </div>
                </div>
                <p>2019 &copy; mansio all right reserved | legal notice</p>
            </div>
            <div class="drops">
                <div class="drop left-drop"></div>
                <div class="drop right-drop"></div>
            </div>
            <div class="col-sm-12 col-lg-8 right">
                <div class="colm dynamic-width">
                    <div class="box-img" style="height: 20%">
                        <h1 class="custom-text-design" style="text-align: justify">The house is designed especially for a sculptor whose experience in the studio changes during the year. The position if the inner and outer walls is constantly changing. Thanks to the carefully designed mechanism the object is rotated depending on climatic conditions meeting the main problem that arises when mountain and Mediterranean climates colide. The house consists of seven individual units, steel cages, only two of which are fixed.</h1>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/GLAVNA1.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/GLAVNA1.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/2.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/2.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="box-img">
                        <a href="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/3.jpg')}}" data-lightbox="example-1">
                            <img src="{{asset('assets/images/arhitektura/HOME-FOR-SCULPTOR/3.jpg')}}" alt="" class="w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
