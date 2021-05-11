(function ($) {
	"use strict";

    $(window).on('load', function () {
        // remove preloader
        $('.nm-ripple').fadeOut(500, function () {
            $('#nm-preloader').fadeOut(500);
        });
    });
})(jQuery)
