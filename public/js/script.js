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

    // compteur js
    String.prototype.toDate = function (format) {
        format = format || "dmy";
        var separator = this.match(/[^0-9]/)[0];
        var components = this.split(separator);
        var day, month, year;
        for (var key in format) {
            var fmt_value = format[key];
            var value = components[key];
            switch (fmt_value) {
                case "d":
                    day = parseInt(value);
                    break;
                case "m":
                    month = parseInt(value) - 1;
                    break;
                case "y":
                    year = parseInt(value);
            }
        }
        return new Date(day, month, year);
    };


    var concerts = variableAPasser.value;
    var concert = concerts.toDate();
    console.log(concert);
    var launch = new Date(concert);
    console.log(launch);
    var days = $('#days');
    var hours = $('#hours');
    var minutes = $('#minutes');
    var seconds = $('#seconds');
    setDate();

    function setDate() {
        var now = new Date();
        var s = (((launch.getTime() - now.getTime()) / 1000) - now.getTimezoneOffset() * 60) + 75600;
        var d = Math.floor(s / 86400);
        days.html('<strong>' + d + '</strong><br>Jour' + (d > 1 ? 's' : ''));
        s -= d * 86400;

        var h = Math.floor(s / 3600);
        hours.html('<strong>' + h + '</strong><br>Heure' + (h > 1 ? 's' : ''));
        s -= h * 3600;

        var m = Math.floor(s / 60);
        minutes.html('<strong>' + m + '</strong><br>Minute' + (m > 1 ? 's' : ''));
        s -= m * 60;

        s = Math.floor(s);
        seconds.html('<strong>' + s + '</strong><br>Seconde' + (s > 1 ? 's' : ''));

        setTimeout(setDate, 1000);
    }

});