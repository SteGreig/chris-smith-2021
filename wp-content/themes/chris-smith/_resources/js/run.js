// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function ($) {
	"use strict";

	// add all of your code within here, not above or below
	$(function () {

			$('.faq-q').click(function() {
				$(this).toggleClass('active');
				$(this).next('.faq-a').slideToggle();
				$(this).find('svg').toggle();
			});

	});

}(jQuery));
