
$(document).ready(function () {

//        if (GBrowserIsCompatible()) {
//            var map = new GMap2(document.getElementById("map"));
//            map.setCenter(new GLatLng(37.4419, -122.1419), 15);
//        }
});


$(document).ready(function () {

    $('nav li a[href$="/' + location.pathname.split("/")[1] + '"]').addClass('active');
    $(document).click(function (e) {
        if ($('.menu-button > img, .back-button img').is(e.target)) {
            $("header.navigation > nav > ul").toggleClass('active');
        }
    });

    // Botón de ir arriba

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
//var jump = function (e) {
//    if (e) {
//        e.preventDefault();
//        var target = $(this).attr("href");
//    } else {
//        var target = location.hash;
//    }
//
//    if ($('.menu-button').is(':hidden'))
//        altura = 85;
//    else
//        altura = 0;
//
//    $('html,body').animate(
//            {
//                scrollTop: $(target).offset().top - altura
//            }, 1000, function ()
//    {
//        location.hash = target;
//    });
//
//}
//
//$('html, body').hide();
//
//$(document).ready(function () {
//    $('a[href^=#]').bind("click", jump);
//
//    if (location.hash) {
//        setTimeout(function () {
//            $('html, body').scrollTop(0).show();
//            jump();
//        }, 0);
//    } else {
//        $('html, body').show();
//    }
//});
$(document).ready(function () {

    var ul = $(".slider ul");
    var slide_count = ul.children().length;
    var slide_width_pc = 100.0 / slide_count;
    var slide_index = 0;

    ul.find("li").each(function (indx) {
        var left_percent = (slide_width_pc * indx) + "%";
        $(this).css({"left": left_percent});
        $(this).css({width: (100 / slide_count) + "%"});
    });

// Listen for click of prev button
    $(".slider .prev").click(function () {
        console.log("prev button clicked");
        slide(slide_index - 1);
    });

// Listen for click of next button
    $(".slider .next").click(function () {
        console.log("next button clicked");
        slide(slide_index + 1);
    });

    slideShowInterval = setInterval(change, 4000);

    function change() {
        if (slide_index == slide_count - 1) {
            slide_index = 0;
        } else {
            slide_index++;
        }
        slide(slide_index);
    }

    function slide(new_slide_index) {

        var margin_left_pc = (new_slide_index * (-100)) + "%";

        ul.animate({"margin-left": margin_left_pc}, 700, function () {

            slide_index = new_slide_index;

        });
    }
});