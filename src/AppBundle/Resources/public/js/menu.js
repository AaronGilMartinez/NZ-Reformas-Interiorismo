
$(document).ready(function () {

    $('nav li a[href$="/' + location.pathname.split("/")[1] + '"]').addClass('active');

    $(document).click(function (e) {
        if ($('.menu-button > img, .back-button img').is(e.target)) {
            $("header.navigation > nav > ul").toggleClass('active');
        }
    });
});