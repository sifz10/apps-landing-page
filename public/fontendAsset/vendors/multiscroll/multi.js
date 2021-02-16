;
(function ($) {
    "use strict";
    $(window).on('load', function () {
        var onMobile = false;

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            onMobile = true;
        }

        if ((onMobile === false)) {
            $('#multiscroll').multiscroll({
                verticalCentered: true,
                scrollingSpeed: 1200,
                easing: 'easeInOutQuint',
                menu: '#navigation',
                sectionsColor: [],
                navigation: true,
                navigationPosition: 'right',
                navigationColor: '#fff',
                navigationTooltips: [],
                loopTop: true,
                loopBottom: true,
                touchSensitivity: 5,
                responsiveWidth: 992,
                responsiveExpand: true,

            });
        } else {
            $('#multiscroll').multiscroll({
                loopTop: true,
                loopBottom: true,
            });
            $('#multiscroll').multiscroll.destroy();
        }
        $('.prev').on('click',function(){
            $.fn.multiscroll.moveSectionDown();
        });
        $('.next').on('click',function(){
            $.fn.multiscroll.moveSectionUp();
        });
    });
})(jQuery)