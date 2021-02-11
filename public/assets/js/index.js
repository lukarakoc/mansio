// ======================
// 1. DESKTOP HAMBURGER MENU
// ======================
const menuBtn = $('.nav-hamburger');
let menuOpen = false;
$(document).ready(function () {
    menuBtn.on('click', function () {
        if (!menuOpen) {
            $('.navigation').hasClass('animate__animated animate__zoomOutRight');
            $('.navigation').removeClass('animate__animated animate__zoomOutRight');
            $('.navigation').addClass('animate__animated animate__zoomInRight');
            $('.navigation').attr('style', 'display: block');

            menuOpen = true;
        } else {
            $('.navigation').hasClass('animate__animated animate__zoomInRight')
            $('.navigation').removeClass('animate__animated animate__zoomInRight');
            $('.navigation').addClass('animate__animated animate__zoomOutRight');
            menuOpen = false;
        }
        // $('.navigation').addClass('show');
    });
});

// ==========================
// 2. MOBILE HAMBURGER MENU
// ==========================
const mobMenuBtn = $('.navbar .hamburger');
let mobMenuOpen = false;
$(document).ready(function () {
    mobMenuBtn.on('click', function () {
        if (!mobMenuOpen) {
            $('.navbar .navbar-toggler').addClass('open');
            $('.mobile-wrapp .menu').hasClass('animate__animated animate__zoomOutUp');
            $('.mobile-wrapp .menu').removeClass('animate__animated animate__zoomOutUp');
            $('.mobile-wrapp .menu').addClass('animate__animated animate__zoomInDown');
            $('.mobile-wrapp .menu').attr('style', 'display: block');
            $('body').attr('style', 'overflow-y: hidden');
            mobMenuOpen = true;
        } else {
            $('.navbar .navbar-toggler').removeClass('open');
            $('.mobile-wrapp .menu').hasClass('animate__animated animate__zoomInDown')
            $('.mobile-wrapp .menu').removeClass('animate__animated animate__zoomInDown');
            $('.mobile-wrapp .menu').addClass('animate__animated animate__zoomOutUp');
            $('.mobile-wrapp .menu').attr('style', 'display: none');
            $('body').attr('style', 'overflow-y: unset');
            mobMenuOpen = false;
        }
    });
});

// ==================================
// 3. MOBILE ABOUT US SMOOTH SCROLL
// ==================================

$(document).ready(function () {
    $(".mobile-wrapp .about-mobile .bottom button a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

})

// ==================================
// 4. PRELOADER
// ==================================

$(window).on('load', function () {
    $('.preloader').addClass('complete');
})

// ==================================
// 5. UNMUTE VIDEO ON CLICK
// ==================================

$(document).ready(function () {
    // $("#mansio-homepage-video").play();
    // $('#mansio-homepage-video').on('loadstart', function (event) {
    //     $(this).addClass('background');
    //     $(this).attr("poster", "assets/images/loader.gif");
    // });

    // $('#mansio-homepage-video').on('canplay', function (event) {
    //     $(this).removeClass('background');
    //     $(this).removeAttr("poster");
    // });


    // $("#mansio-homepage-video").prop('muted', true);
    //
    // $("#mansio-homepage-video").click(function () {
    //     $(this).prop('muted', !$(this).prop('muted'));
    // });

});

$(window).on('load resize', function() { //Fires when window is loaded or resized
    var windowWidth = $(window).width();

    var video = $('.c-video');
    video.html(' ');

    var html = '<video class="video" onclick="muteVideo()" id="mansio-homepage-video" autoplay="" loop="" muted="" playsinline="" preload="auto" poster="http://134.122.65.115:8080/assets/images/loader.gif" onclick="">\n' +
        '                    <source src="http://134.122.65.115:8080/assets/images/video/mansio.mp4" type="video/mp4">\n' +
        '                </video>\n' +
        '                <img src="http://134.122.65.115:8080/pngfind.com-sound-png-748701.png" alt="" onclick="muteVideo()" class="sound-icon">\n' +
        '                <p><a href="/video/mansio" target="__blank">click here for full video</a></p>';


    if (windowWidth >= 990) {
        video.html(html);
        $('#mansio-homepage-video').prop('muted', false);
    } else {
        video.html(' ');
    }

    if(window.location.pathname === '/photography' ||
        window.location.pathname === '/video' || window.location.pathname === '/architecture'){
        $('body').attr('style', 'overflow-y: hidden');
    } else {
        $('body').attr('style', 'overflow-y: visible');
    }


});

function muteVideo() {
        $('#mansio-homepage-video').prop('muted', !$('#mansio-homepage-video').prop('muted'));
}

function realMuteVideo() {
    $('#mansio-homepage-video').prop('muted', true);
}
