// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function ($) {
	"use strict";

	// add all of your code within here, not above or below
	$(function () {


			// Accordion
			$('.faq-q').click(function() {
				$(this).toggleClass('active');
				$(this).next('.faq-a').slideToggle();
				$(this).find('svg').toggle();
			});


			// Smooth scroll for anchor links
			$(document).on('click', 'a[href^="#"]', function (event) {
				event.preventDefault();
		
				$('html, body').animate({
						scrollTop: $($.attr(this, 'href')).offset().top
				}, 500);
		});

	});

}(jQuery));
