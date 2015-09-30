
$(document).ready(function () {

    $('nav li a[href$="/' + location.pathname.split("/")[1] + '"]').addClass('active');

    $(document).click(function (e) {
        if ($('.menu-button > img, .back-button img').is(e.target)) {
            $("header.navigation > nav > ul").toggleClass('active');
        }
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