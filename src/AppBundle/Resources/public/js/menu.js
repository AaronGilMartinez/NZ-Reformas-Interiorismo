
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