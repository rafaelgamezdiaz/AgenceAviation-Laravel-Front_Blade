(function ($) {
	"use strict";
    jQuery(document).ready(function($){
        /*--------------------------
		wow js init
		---------------------------*/
        new WOW().init();

        /*----------------------------------------------
			Portfolio Masonay Activate
		---------------------------------------------*/
        var Container = $('#portfolio-content-wrapper');
        if (Container.length > 0) {
            Container.imagesLoaded(function () {
                var festivarMasonry = $('#portfolio-content-wrapper').isotope({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    masonry: {
                        columnWidth: 30
                    }
                });
                $(document).on('click', '.portfolio-menu-wrapper li', function () {
                    var filterValue = $(this).attr('data-filter');
                    festivarMasonry.isotope({
                        filter: filterValue
                    });
                });
            });
        }
        /*-------------------------------
		Portfolio menu active
		-------------------------------*/
        var portfolioMenu = '.portfolio-menu-wrapper li';
        $(document).on('click', portfolioMenu, function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });

        /*-----------------------------
		magnific popup activation 
		-----------------------------*/
        $('.video-play-btn,.video-popup,.small-vide-play-btn').magnificPopup({
            type: 'video'
        });
        /*----------------------------
		back to top 
		----------------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });
		/*------------------------------
		Bootstrap datetimepicker 
		------------------------------*/
        var $datepicker = $('.datepicker');
        if ( $datepicker.length > 0) {
            $datepicker.datepicker();
        }
        /*------------------------------
		 counter section activation
		-------------------------------*/
        var counternumber = $('.count-number,.forum-count');
        counternumber.counterUp({
            delay: 20,
            time: 3000
        });
        /*-------------------------------
		testimonial carousel
		--------------------------------*/
        var $tesitmonialCarousel = $('#testimonial-carousel');
        if ($tesitmonialCarousel.length > 0) {
            $tesitmonialCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
            $tesitmonialCarousel.on('translate.owl.carousel', function () {
                $('.single-testimonial-item .descripton').removeClass('animated fadeInDown').css('opaciry', '0');
                $('.single-testimonial-item .clients-details').removeClass('animated fadeInUp').css('opaciry', '0');
            });
            $tesitmonialCarousel.on('translated.owl.carousel', function () {
                $('.single-testimonial-item .descripton').addClass('animated fadeInDown').css('opaciry', '1');
                $('.single-testimonial-item .clients-details').addClass('animated fadeInUp').css('opaciry', '1');
            });
        }
        
        /*-----------------------------------------
		header carousel
		-----------------------------------------*/
        var $headerCarousel = $('#header-slider');
        if ($headerCarousel.length > 0) {
            $headerCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: true,
                navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1,
                        nav:false
                    },
                    768: {
                        items: 1,
                        nav:false
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
            $headerCarousel.on('translate.owl.carousel', function () {
                $('.single-header-item .subtitle').removeClass('animated fadeInUp').css('opaciry', '0');
                $('.single-header-item h1').removeClass('animated fadeInDown').css('opaciry', '0');
                $('.single-header-item .btn-wrapper').removeClass('animated fadeInUp').css('opaciry', '0');
            });
            $headerCarousel.on('translated.owl.carousel', function () {
                $('.single-header-item .subtitle').addClass('animated fadeInUp').css('opaciry', '1');
                $('.single-header-item h1').addClass('animated fadeInDown').css('opaciry', '1');
                $('.single-header-item .btn-wrapper').addClass('animated fadeInUp').css('opaciry', '1');
            });
        }
        /*--------------------------------------------
		about page tesimonial carousel
		--------------------------------------------*/
        var $aboutPagetesitmonialCarousel = $('#about-page-testimonial-carousel');
        if ($aboutPagetesitmonialCarousel.length > 0) {
            $aboutPagetesitmonialCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: true,
                navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 1,
                        nav:false
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
            $aboutPagetesitmonialCarousel.on('translate.owl.carousel', function () {
                $('.single-about-testimonial .description').removeClass('animated fadeInDown').css('opacity', '0');
                $('.single-about-testimonial .author-details').removeClass('animated fadeInUp').css('opacity', '0');
            });
            $aboutPagetesitmonialCarousel.on('translated.owl.carousel', function () {
                $('.single-about-testimonial .description').addClass('animated fadeInDown').css('opacity', '1');
                $('.single-about-testimonial .author-details').addClass('animated fadeInUp').css('opacity', '1');
            });
        }
        /*---------------------------------------
		brand logo carousel
		----------------------------------------*/
        var $brandCarousel = $('#brand-carousel');
        if ($brandCarousel.length > 0) {
            $brandCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    },
                    1920: {
                        items: 4
                    }
                }
            });
        }
        /*--------------------------------------
		progressbar activation 
		---------------------------------------*/
        var $section = $('#mission_area');
         if ($section.length >0) {
             $(document).bind('scroll', function (e) {
                 var scrollOffset = $(document).scrollTop();
                 var containerOffset = $section.offset().top - window.innerHeight;
                 if (scrollOffset > containerOffset) {
                     progressbar('#flight', 60, '#d02027');
                     progressbar('#cabin', 70, '#204ed0');
                     progressbar('#craft', 90, '#3ea500');
                     progressbar('#shedule', 50, '#7c00a5');
                     progressbar('#destination', 40, '#edb800');
                     progressbar('#package', 80, '#e64600');
                     // unbind event not to load scrolsl again
                     $(document).unbind('scroll');
                 }
             });
         }
        /*-------------------------------
		progressbar function
		-------------------------------*/
        function progressbar(selector, percentage,fillBG) {
            $(selector).LineProgressbar({
                percentage: percentage,
                fillBackgroundColor: fillBG,
                backgroundColor: '#1d1e35',
                duration: 3000
            });
        }

    });
    
    var lastScrollTop = '';//define variable for store last scrolltop
    $('.logo-hidden').hide();
	
    $(window).on('scroll', function () {
        /*----------------------------------
		back to top show/hide
		----------------------------------*/
       var ScrollTop = $('.back-to-top');
       if ($(window).scrollTop() > 1000) {
           ScrollTop.fadeIn(1000);
       } else {
           ScrollTop.fadeOut(1000);
       }
       /*------------------------------
	   sticky menu activation
	   ------------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() > 200) {
            if (st > lastScrollTop) {
                mainMenuTop.addClass('nav-fixed');// hide sticky menu on scrolldown 
                $('.logo-hidden').show();
            } else {
                mainMenuTop.addClass('nav-fixed');// active sticky menu on scrollup 
                $('.logo-hidden').show();
            }

        } else {
            mainMenuTop.removeClass('nav-fixed ');
            $('.logo-hidden').hide();
        }
        lastScrollTop = st;
       
    });
           
    $(window).on('load',function(){
        /*----------------------------
		preloader
		----------------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);
		 /*----------------------------
		back to top
		----------------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);
    });

}(jQuery));	
