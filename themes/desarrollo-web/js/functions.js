var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/
 
		$(document).ready(function() {

			footerBottom();
			$(".button-collapse").sideNav();
 
		});
 
		$(window).on('resize', function(){

			footerBottom();
			
		});
 
		$(document).scroll(function() {

		});
 
		if( parseInt( isHome ) ){
 
		} //End isHome
 
		// $(".btn-scroll-unete").click(function() {
		//     $('html, body').animate({
		//         scrollTop: $("#section-unete").offset().top - 100
		//     }, 700);
		// });
 
 
	});
})(jQuery);
 
/**
 * Fija el footer abajo
 */
function footerBottom(){
	var alturaFooter = getFooterHeight();
	$('.main-body').css('padding-bottom', alturaFooter );
}
function getHeaderHeight(){
	return $('.js-header').outerHeight();
}// getHeaderHeight
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight