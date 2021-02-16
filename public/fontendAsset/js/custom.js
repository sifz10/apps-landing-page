;
(function ($) {
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

    //* Navbar Fixed  
    function navbarFixed() {
        if ($('.sticky_nav').length) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll) {
                    $(".sticky_nav").addClass("navbar_fixed");
                } else {
                    $(".sticky_nav").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();

    function active_dropdown() {
        if ($(window).width() < 992) {
            $('.menu li.submenu > a').on('click', function (event) {
                event.preventDefault()
                $(this).parent().find('ul').first().slideToggle(700);
                $(this).parent().siblings().find('ul').hide(700);
            });
        }
    }
    active_dropdown();

    // 5. fullPage
    if ($('#wavescroll').length > 0) {
        $("#wavescroll").fullpage({
            navigation: true,
            navigationPosition: "right",
            autoScrolling: true,
            scrollBar: false,
            scrollOverflow: true,
            animateAnchor: true,
            css3: true,
            verticalCentered: true,
            afterResponsive: function (isResponsive) {},
            afterLoad: function (anchorLink, index) {
                if (index == 6) {
                    $('.header_area, .full_footer').addClass('content-black');
                    $('#fp-nav').addClass('white');
                } else {
                    $('.header_area, .full_footer').removeClass('content-black');
                    $('#fp-nav').removeClass('white');
                }
                if ($('.w_footer_area,.wave_two_section_eight').hasClass('active')) {
                    $("#fp-nav,.full_footer").addClass('hide');
                } else {
                    $('#fp-nav,.full_footer').removeClass('hide');
                }
            }
        });
        $('#moveDown').click(function () {
            $.fn.fullpage.moveSectionDown();
        });
        $('#moveUp').click(function () {
            $.fn.fullpage.moveSectionUp();
        });
    }
    

    /*=============================================== 
	       Parallax Init
	  ================================================*/
    if ($('#wavescroll,.home_three').length > 0) {
        $('#wavescroll,.home_three').parallax({
            scalarX: 10.0,
            scalarY: 0.0,
        });
    }

    function parallax() {
        if ($(".parallaxie").length) {
            $('.parallaxie').parallaxie({
                speed: 0.5,
            });
        }
    }
    parallax();


    if ($('.testimonial_slider').length) {
        $('.testimonial_slider').slick({
            autoplay: true,
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 1000,
            speed: 1000,
            dots: false,
            centerMode: true,
            vertical: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    }

    if ($('.portfolio_info_slider,.pr_details_slider_two').length) {
        $('.portfolio_info_slider,.pr_details_slider_two').slick({
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            speed: 1000,
            dots: false,
            arrows: true,
            prevArrow: ('.prev'),
            nextArrow: ('.next'),
        });
    }


    $(".archive_nav_item a").on('click', function () {
        event.preventDefault();
        var target = $(this).parent().children(".dropdown-menu");
        $(target).slideDown();
        $(this).parent().siblings().find('ul').slideUp(700);
    });

    /*---------gallery isotope js-----------*/
    function galleryMasonry() {
        if ($('#gallery').length) {
            $('#gallery').imagesLoaded(function () {
                // images have loaded
                // Activate isotope in container
                $("#gallery").isotope({
                    itemSelector: ".gallery_item",
                    layoutMode: 'masonry',
                    percentPosition: true,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });

                // Add isotope click function
                $(".gallery_filter li").on('click', function () {
                    $(".gallery_filter li").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    $("#gallery").isotope({
                        filter: selector,
                        animationOptions: {
                            animationDuration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    })
                    return false;
                })
            })
        }
    }
    galleryMasonry();

    // full screen side nav
    $(".burger_menu").on('click', function () {
        $('.hamburger_menu_wrepper').toggleClass("mySideBar");
        $(this).toggleClass("actives");
    });
    $(".close_icon").on('click', function () {
        $('.hamburger_menu_wrepper').removeClass("mySideBar");
        $('.close_icon').removeClass("actives");
    });

    $('.offcanfas_menu .dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
    });
    $('.offcanfas_menu .dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
    });

    /*==========  Header  ==========*/
    $('.offcanfas_menu>li,.header_footer').each(function (index) {
        index = (index + 2) * .2;
        index = index + 's';
        $(this).css('animation-delay', index);
    });

    /*--------------- End popup-js--------*/
    function popupGallery() {
        if ($('.popup_youtube').length) {
            $('.popup_youtube').magnificPopup({
                type: 'iframe',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
            });
        }
    }
    popupGallery();

    /*-------------------------------------------------------------------------------
	  Pricing Filter js
	-------------------------------------------------------------------------------*/
    if ($("#slider-range").length) {
        $("#slider-range").slider({
            range: true,
            min: 5,
            max: 150,
            values: [5, 100],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            },
        });
        $("#amount").val(
            "$" +
            $("#slider-range").slider("values", 0) +
            " - $" +
            $("#slider-range").slider("values", 1)
        );
    }

    /*-------------------------------------------------------------------------------
	  selectpickers js
	-------------------------------------------------------------------------------*/
    if ($(".selectpickers").length > 0) {
        $(".selectpickers").niceSelect();
    }

    if ($(".pr_slider").length) {
        $('.pr_img_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            draggable: false,
            fade: true,
            asNavFor: '.pr_slider_thumb'
        });
        $('.pr_slider_thumb').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: false,
            asNavFor: '.pr_img_slider',
            draggable: false,
            dots: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });
    }

    if ($('.related_pr_slider').length) {
        $('.related_pr_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            draggable: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });
    }
    /*-------------------------------------------------------------------------------
	  cart js
	-------------------------------------------------------------------------------*/
    $(".ar_top").on("click", function () {
        var getID = $(this).next().attr("id");
        var result = document.getElementById(getID);
        var qty = result.value;
        $(".proceed_to_checkout .update-cart").removeAttr("disabled");
        if (!isNaN(qty)) {
            result.value++;
        } else {
            return false;
        }
    });

    $(".ar_down").on("click", function () {
        var getID = $(this).prev().attr("id");
        var result = document.getElementById(getID);
        var qty = result.value;
        $(".proceed_to_checkout .update-cart").removeAttr("disabled");
        if (!isNaN(qty) && qty > 0) {
            result.value--;
        } else {
            return false;
        }
    });

    var center_portfolio_tittle = document.getElementById("fullscreenslider");
    if (center_portfolio_tittle) {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 2,
            centeredSlides: true,
            loop: true,
            speed: 1000,
            mousewheel: true,
            autoplay: {
                delay: 3000000,
                disableOnInteraction: false,
                autoplayDisableOnInteraction: false,
            },
            freeModeSticky: true,
            navigation: {
                nextEl: '.swiper_next',
                prevEl: '.swiper_prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    freeMode: false
                }
            }
        });
        $('.swiper-slide').on('mouseover', function () {
            swiper.autoplay.stop();
        });

        $('.swiper-slide').on('mouseout', function () {
            swiper.autoplay.start();
        });
        /*---------  SPLITTING TEXT -----------*/
        Splitting();
    }

   if($('.tilt').length){
        var windowWidth = $(window).width();
        if (windowWidth > 991) {
            $('.tilt').UniversalTilt({
                max: 20,
                perspective: 5000,
                mobile: false,
            });
        }
    }
    
   
    

    $(".height-emulator").css({
        height: $("footer").outerHeight(true)
    });

    //home page 5 slider
    var slider_full_hight = document.getElementById("portfolio_slider");
    if (slider_full_hight) {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            loop: true,
            centeredSlides: true,
            autoplay: true,
            autoplay: {
                delay: 500000,
                disableOnInteraction: false,
            },
            mousewheel: true,
            speed: 600,
            breakpoints: {
                576: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 1
                },
                1199: {
                    slidesPerView: 2,
                }
            }
        });
        $('.swiper-slide').on('mouseover', function() {
            swiper.autoplay.stop();
        });

        $('.swiper-slide').on('mouseout', function() {
            swiper.autoplay.start();
        });
    }

    //vartical slider banner 9 js
    var full_height_dark_slider = document.getElementById("full_height_dark_slider");
    if (full_height_dark_slider) {
        var swiper = new Swiper('.full_height_dark_slider', {
            direction: 'vertical',
            slidesPerView: 1,
            mousewheel: true,
            loop: true,
            speed: 800,
            autoplay: true,
            autoplay: {
                delay: 30000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
        });
        $('.swiper-slide').on('mouseover', function() {
            swiper.autoplay.stop();
        });

        $('.swiper-slide').on('mouseout', function() {
            swiper.autoplay.start();
        });
    }
})(jQuery)