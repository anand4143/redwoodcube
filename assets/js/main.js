;
(function ($) {
    "use strict";

    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/ 
    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();


    function offcanvasActivator() {
        if ($('.bar_menu').length) {
            $('.bar_menu').on('click', function () {
                $('#menu').toggleClass('show-menu')
            });
            $('.close_icon').on('click', function () {
                $('#menu').removeClass('show-menu')
            })
        }
    }
    offcanvasActivator();

    $('.offcanfas_menu .dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
    });
    $('.offcanfas_menu .dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
    });

    /*-------------------------------------------------------------------------------
	  mCustomScrollbar js
	-------------------------------------------------------------------------------*/
    $(window).on("load", function () {
        if ($('.mega_menu_two .scroll').length) {
            $(".mega_menu_two .scroll").mCustomScrollbar({
                mouseWheelPixels: 50,
                scrollInertia: 0,
            });
        }
    });

    /*-------------------------------------------------------------------------------
	  WOW js
	-------------------------------------------------------------------------------*/
    function wowAnimation() {
        new WOW({
            offset: 100,
            mobile: false
        }).init()
    }
    wowAnimation()


    /*-------------------------------------------------------------------------------
	  Parallax Effect js
	-------------------------------------------------------------------------------*/
    function parallaxEffect() {
        if ($('.parallax-effect').length) {
            $('.parallax-effect').parallax();
        };
    }
    parallaxEffect();


    /*-------------------------------------------------------------------------------
	  preloader js
	-------------------------------------------------------------------------------*/
    function loader() {
        $(window).on('load', function () {
            $('#ctn-preloader').addClass('loaded');
            // Una vez haya terminado el preloader aparezca el scroll

            if ($('#ctn-preloader').hasClass('loaded')) {
                // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
                $('#preloader').delay(900).queue(function () {
                    $(this).remove();
                });
            }
        });
    }
    loader();
	
	
	/*--------------------------------Slider---------------------------------*/
	
	$('.slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    var carousel = e.relatedTarget;
    $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
	  }).owlCarousel({
		items: 1,
		dots: false,
		loop:true,
		margin:0,
		nav:true,
        autoHeight:true,
		navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
	  });

})(jQuery)


$('.how-we-work').owlCarousel({
    stagePadding: 200,
    loop:true,
    margin:10,
	dots:false,
    nav:true,
	navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
    responsive:{
        0:{
            items:1,
			stagePadding:0,
        },
        600:{
            items:1,
			stagePadding:0,
        },
        1000:{
            items:1
        }
    }
});

$('.our-client').owlCarousel({
    loop:true,
    margin:10,
	dots:false,
    nav:true,
	autoplay:true,
    autoplayTimeout:3000,
	autoplayHoverPause:true,
	navText: ['<i class="ti-angle-right"></i>', '<i class="ti-angle-left"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});