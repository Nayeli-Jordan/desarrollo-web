<?php 

/**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_stylesheet_directory_uri() . '/js/' );
define( 'THEMEPATH', get_stylesheet_directory_uri() . '/' );
define( 'SITEURL', get_site_url() . '/' );


/*------------------------------------*\
	#SNIPPETS
\*------------------------------------*/
//require_once( 'inc/pages.php' );
require_once( 'inc/post-types.php' );
require_once( 'inc/taxonomies.php' );

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){
 
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(''), '2.1.1', true );
	wp_enqueue_script( 'materialize_js', JSPATH.'bin/materialize.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'wow_js', JSPATH.'wow.min.js', array(), '', true );
	wp_enqueue_script( 'dw_functions', JSPATH.'functions.js', array('materialize_js'), '1.0', true );
 
	wp_localize_script( 'dw_functions', 'siteUrl', SITEURL );
	wp_localize_script( 'dw_functions', 'theme_path', THEMEPATH );
	
	// wp_localize_script( 'dw_functions', 'isHome', (string)is_front_page() );
	// wp_localize_script( 'dw_functions', 'isSingular', (string)is_singular() );
	
	// $is_home = is_front_page() ? "1" : "0";
	// wp_localize_script( 'ri_functions', 'isHome', $is_home );
	// $is_singular = is_singular() ? "1" : "0";
	// wp_localize_script( 'ri_functions', 'isSingular', $is_singular );
	// $is_archive = is_archive() ? "1" : "0";
	// wp_localize_script( 'ri_functions', 'isArchive', $is_archive );
	// $is_author = is_author() ? "1" : "0";
	// wp_localize_script( 'ri_functions', 'isAuthor', $is_author );
 
});

//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 
