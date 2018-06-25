(function ($) {
	"use strict";

	$(document).ready(function(){

		jQuery('.navbar-nav li').addClass('nav-item');
		jQuery('.navbar-nav li a').addClass('nav-link');

		jQuery('.navbar-nav.main-menu li ul li a').removeClass('nav-link');
		jQuery('.navbar-nav.main-menu li ul li').removeClass('nav-item');

		jQuery('.navbar-nav.main-menu li ul').addClass('dropdown-menu');

		jQuery('.navbar-nav.main-menu li ul.dropdown-menu').parent('li.nav-item').addClass('dropdown');

		jQuery('.navbar-nav.main-menu li.dropdown > a').addClass('dropdown-toggle');


		jQuery('.footer-area .footer-widgets .footer-widget:nth-child(1), .footer-area .footer-widgets .footer-widget:nth-child(3)').addClass('col-lg-4');
		jQuery('.footer-area .footer-widgets .footer-widget:nth-child(2), .footer-area .footer-widgets .footer-widget:nth-child(4)').addClass('col-lg-2');



		$(".owl-carousel").owlCarousel({
				loop:true,
				autoplay:true,
				margin:50,
				nav:false,
				responsiveClass:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:4
					}
				}
			});



						var owl = $('.owl-carousel');
			owl.owlCarousel();
			// Go to the next item
			$('.customPrevBtn').click(function() {
				owl.trigger('next.owl.carousel');
			})
			// Go to the previous item
			$('.customNextBtn').click(function() {
				// With optional speed parameter
				// Parameters has to be in square bracket '[]'
				owl.trigger('prev.owl.carousel', [300]);
			})
		
		
		 var shrinkHeader = 200;
		  jQuery(window).scroll(function() {
			var scroll = getCurrentScroll();
			  if ( scroll >= shrinkHeader ) {
				   jQuery('.header-top-fixed').addClass('shrink');
				}
				else {
					jQuery('.header-top-fixed').removeClass('shrink');
				}
		  });
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
			}
		
			
		var theToggle = document.getElementById('toggle');

		// hasClass
		function hasClass(elem, className) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}
		
		// toggleClass
		function toggleClass(elem, className) {
			var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
			if (hasClass(elem, className)) {
				while (newClass.indexOf(" " + className + " ") >= 0 ) {
					newClass = newClass.replace( " " + className + " " , " " );
				}
				elem.className = newClass.replace(/^\s+|\s+$/g, '');
			} else {
				elem.className += ' ' + className;
			}
		}

		theToggle.onclick = function() {
		   toggleClass(this, 'on');
		   return false;
		}
			
	});

}(jQuery));