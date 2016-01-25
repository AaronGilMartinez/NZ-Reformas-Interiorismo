var jump = function (e) {
    if (e) {
        e.preventDefault();
        var target = $(this).attr("href");
    } else {
        var target = location.hash;
    }
    if ($('.menu-button').is(':hidden'))
        altura = 85;
    else
        altura = 0;
    $('html,body').animate(
            {
                scrollTop: $(target).offset().top - altura
            }, 1000, function ()
    {
        location.hash = target;
    });
};

function resizeImages() {

    width = window.innerWidth;
    images = document.getElementsByClassName('resized');

    for (i = 0; i < images.length; i++) {
        url = images[i].src;

        if (width <= 480) {
            quality = "low.jpg";
        }
        else if (width > 480 && width <= 1024) {
            quality = "medium.jpg";
        } else {
            quality = "high.jpg";
        }

        images[i].src = url.replace(url.substring(url.lastIndexOf('-') + 1), quality);
    }
    console.log(width);
}

$(document).ready(function () {
    resizeImages();
    $('a[href^=#]').bind("click", jump);
    if (location.hash) {
        setTimeout(function () {
            $('html, body').scrollTop(0).show();
            jump();
        }, 0);
    } else {
        $('html, body').show();
    }
    $('nav li a[href$="/' + location.pathname.split("/")[1] + '"]').addClass('active');
    $(document).click(function (e) {
        if ($('.menu-button > img, .back-button img').is(e.target)) {
            $("header.navigation > nav > ul").toggleClass('active');
        }
    });
    if ($(this).scrollTop() < 200) {
        $('.up').fadeOut(0);
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.up').fadeIn();
        } else {
            $('.up').fadeOut();
        }
    });
    $('.up > a').click(function () {
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    });
});

$(window).on('resize', function () {
    resizeImages();
});

