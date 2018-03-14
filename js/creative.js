// /**
//  * File creative.js.
//  *
//  * Creative Blazer enhancements.
//  *
//  * Contains functions for cute animations.
//  */

// jQuery(document).ready(function($) {
// 	// toggling header nav opaque/transparent when user scrolls
// 	$(window).scroll(function(){
// 		var top         	= $(window).scrollTop();
// 			headerNav    	= $("#header-nav");
// 			notScrolled 	= "not-scrolled";

// 			if( top > 0 ) {
// 				headerNav.removeClass(notScrolled);
// 				headerNav.addClass("scrolled");
// 			}
// 			else {
// 				headerNav.removeClass("scrolled")
// 				headerNav.addClass(notScrolled);
// 			}
// 	});

// 	// push header nav lower on screen when admin bar is showing
// 	var body		= $("body");
// 		headerNav 	= $("#header-nav");
// 		admin 		= "admin-bar";
// 		isAdmin		= "is-admin";

// 	if (body.hasClass(admin)) {
// 		headerNav.addClass(isAdmin);
// 	}
// 	else {
// 		headerNav.removeClass(isAdmin);
// 	}
// });