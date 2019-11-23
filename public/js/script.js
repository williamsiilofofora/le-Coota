$(document).ready(function () {




    //ancre
    $('#scrollDown').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $("#about").offset().top - 90
            }, 1500);
    });
    $('.menuEvent').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $("#event").offset().top - 90
            }, 1500);
    });


    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 150) {
    //         $("#bandeau").css({
    //             "background-color": "black"
    //         });
    //     } else {
    //         $("#bandeau").css({
    //             "background-color": "transparent"
    //         });
    //     }
    // });
});
