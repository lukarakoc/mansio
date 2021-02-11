@extends('layouts.layout')

@section('content')
    <section class="about faq">
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
                <div class="bck-overlay"></div>
                <div class="wrapp-1">
                    <div class="text">
                        <h2><span>FAQ</span>'s: <span>V</span>ideo &amp; <span>P</span>hotography</h2>
                        <h3>What can we expect to pay for both videography and photography coverage?</h3>
                        <p class="nine-px">Prices refer to the full coverage, and depending on what you would like included, prices can
                            range.
                            Discounts and custom packages are available for last minute bookings, projects that take
                            place through
                            the week, destination projects or smaller intimate events. For a more detailed brochure,
                            please reach out
                            throught the contact form and we will be happy to talk to you!</p>
                        <h3>Do you offer custom packages for destination projects?</h3>
                        <p class="nine-px">Yes! We love to travel and have custom packages for those kind of projects. Lets start the
                            adventure.</p>
                        <h3>How and when do we receive our material?</h3>
                        <p class="nine-px">You will receive between 200-800 edited (depending on package you choose and event itself),
                            high
                            resolution images and video delivered to you in special packaging. Post production typically
                            takes around
                            two weeks.</p>
                        <h3>Can you hold a date for me?</h3>
                        <p class="nine-px">We are very sorry, but we can not hold a date without a signed contract and a booking fee to
                            reserve your
                            date. Most of comissions contact us within a year or half a year of the event/project, but
                            you can always
                            contact us to check the availability. If you have any concerns about the payment schedule,
                            we'd love to
                            chat with you about them!</p>
                    </div>
                </div>
                <div class="wrapp-2"></div>
            </div>
        </div>
    </section>

    <section class="mobile-wrapp homepage-nav">
        <div class="navbar mob-nav py-0">
            <div class="hamburger">
                <button class="navbar-toggler">
                    <div class="menu-btn_burger"></div>
                </button>
            </div>
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
        <section class="faq-desc">
            <div class="containerr">
                <div class="col-12 top p-0">
                    <div class="wrapp">
                        <h2><span>FAQ</span>'s: <span>V</span>ideo &amp; <span>P</span>hotography</h2>
                        <h3>What can we expect to pay for both videography and photography coverage?</h3>
                        <p>Prices refer to the full coverage, and depending on what you would like included, prices can
                            range.
                            Discounts and custom packages are available for last minute bookings, projects that take
                            place through
                            the week, destination projects or smaller intimate events. For a more detailed brochure,
                            please reach out
                            throught the contact form and we will be happy to talk to you!</p>
                        <h3>Do you offer custom packages for destination projects?</h3>
                        <p>Yes! We love to travel and have custom packages for those kind of projects. Lets start the
                            adventure.</p>
                        <h3>How and when do we receive our material?</h3>
                        <p>You will receive between 200-800 edited (depending on package you choose and event itself),
                            high
                            resolution images and video delivered to you in special packaging. Post production typically
                            takes around
                            two weeks.</p>
                        <h3>Can you hold a date for me?</h3>
                        <p>We are very sorry, but we can not hold a date without a signed contract and a booking fee to
                            reserve your
                            date. Most of comissions contact us within a year or half a year of the event/project, but
                            you can always
                            contact us to check the availability. If you have any concerns about the payment schedule,
                            we&#39;d love to
                            chat with you about them!</p>
                    </div>
                    <div class="img">
                        <img src="{{asset('assets/images/logo/png-white2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>

    @endsection
