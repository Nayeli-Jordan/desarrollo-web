var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			new WOW().init(); //Animaciones
			document.getElementById("date").innerHTML = new Date().getFullYear();
			navScroll();
			footerBottom();
			$(".button-collapse").sideNav();
			$('select').material_select();
			$('.carousel').carousel({
				shift: 35,
				dist: -30
			});
			$('.modal').modal();
			// autoplay();   
			// function autoplay() {
			// 	$('.servicios.carousel').carousel('next');
			// 	setTimeout(autoplay, 8000);
			// } 


		});
 
		$(window).on('resize', function(){

			footerBottom();
			
		});
 
		$(document).scroll(function() {

			navScroll();

		});
 
		// if( parseInt( isHome ) ){
 
		// } 

		//Scroll menú
		$(".item-menu, #intro, .link-contacto").click(function() {
			//buttonMenuScroll();
			var idOption = $(this).attr('id'); //Opción del menú
			// console.log(idOption);
			var idSection = "#section-" + idOption; //Sección a la que se dirigirá
			// console.log(idSection); 
			$('html, body').animate({		
				scrollTop: $(idSection).offset().top - 50
			}, 1500);
		});

		//btn return
		$("return-top").click(function() {
			$('html, body').animate({		
				scrollTop: $("#section-intro").offset().top
			}, 1500);
		}); 
 
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

/**
 * Estilo navegador fijo
 */
function navScroll(){
	$('footer').outerHeight();if ($(window).scrollTop() > 40 ) {
		$('header').addClass('nav-scroll');
	} else {
		$('header').removeClass('nav-scroll');
	};
}

/**
 * Scroll a ID
 */
function buttonMenuScroll(){
	var idOption = $(this).attr('id');
	console.log(idOption);
	console.log("section-" + idOption);
	// $('html, body').animate({		
	// 	scrollTop: $("#section-" + idOption).offset().top - 100
	// }, 2000);
}