@extends('layouts.layout')

@section('content')
    <div class="video-single">
        <div class="top">
            <img src="{{asset('assets/images/logo/png-white2.png')}}" alt="">
        </div>
        <div class="main">
            <iframe src="https://player.vimeo.com/video/{{$link}}" width="640" height="268" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>
    @endsection
