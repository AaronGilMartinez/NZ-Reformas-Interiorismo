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