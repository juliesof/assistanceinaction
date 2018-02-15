/**
 * File creative.js.
 *
 * Creative Blazer enhancements.
 *
 * Contains functions for cute animations.
 */

jQuery(document).ready(function($) {
	console.log($);
	$(window).scroll(function(){
		var top         	= $(window).scrollTop();
			headerNav    	= $("#header-nav");
			notScrolled 	= "not-scrolled";
		if( top > 0 ) {
			headerNav.removeClass(notScrolled);
			headerNav.addClass("scrolled");
		}
		else {
			headerNav.removeClass("scrolled")
			headerNav.addClass(notScrolled);
		}
	});
});