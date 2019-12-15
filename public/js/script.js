$(document).ready(function () {
    $(".input").focus(function () {
        $(this).parent().addClass("focus");
    });
      $('#rgpd').show(function () {
          setTimeout(function () {
              $('#rgpd').hide();
          }, 20000);
      });
      $('.toggleRGPD').on('click', function (e) {
          e.preventDefault();
          $('#rgpd')
              .hide()

      });
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
    // ViewportChecker
    $('.last').addClass('hidden').viewportChecker({
        classToAdd: 'visible animated fadeInLeft delay-1s',
        offset: 100
    });
    $('.box').addClass('hidden').viewportChecker({
        classToAdd: 'visible animated bounceIn delay-1s',
        offset: 100
    });

    // compteur js
    String.prototype.toDate = function (format) {
        format = format || "dmyHis";
        var separator = this.match(/[^0-9]/)[0];
        var components = this.split(separator);
        var day, month, year, hours, minutes, seconds;
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
                    break;
                case "H":
                    hours = parseInt(value) - 1;
                    break;
                case "i":
                    minutes = parseInt(value);
                    break;
                case "s":
                    seconds = parseInt(value);
            }
        }
        return new Date(day, month, year, hours, minutes, seconds);
    };

    var concert = (variableAPasser.value).toDate();
    var launch = new Date(concert);
    var days = $('#days');
    var hours = $('#hours');
    var minutes = $('#minutes');
    var seconds = $('#seconds');
    setDate();

    function setDate() {
        var now = new Date();
        var s = (((launch.getTime() - now.getTime()) / 1000) - now.getTimezoneOffset() * 60);
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

    

    // $('#datetimepicker').datetimepicker(
      
    // );
});