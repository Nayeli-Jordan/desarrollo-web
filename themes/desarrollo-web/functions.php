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

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
}

//Delimitar número palabras excerpt
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//CUSTOM POST TYPE//
//seccion
add_action( 'add_meta_boxes', 'seccion_custom_metabox' );

function seccion_custom_metabox(){
	add_meta_box( 'seccion_meta', 'Información para banner', 'display_seccion_atributos', 'seccion', 'advanced', 'default');
}

function display_seccion_atributos( $seccion ){
	$url = esc_html( get_post_meta( $seccion->ID, 'seccion_url', true ) );
	$btn = esc_html( get_post_meta( $seccion->ID, 'seccion_btn', true ) );
?>

<table style="width:100%; text-align: left;">
	<tr>
		<th style="padding-bottom:10px">
			<label>URL BOTÓN:</label></br>
			<input style="width:100%" type="text" name="seccion_url" value="<?php echo $url; ?>">
		</th>
	</tr>
	<tr>
		<th style="padding-bottom:10px">
			<label>TEXTO EN BOTÓN:</label></br>
			<input style="width:100%" type="text" name="seccion_btn" value="<?php echo $btn; ?>">
		</th>		
	</tr>
</table>
<?php

}

add_action( 'save_post', 'seccion_save_metas', 10, 2 );
function seccion_save_metas( $idseccion, $seccion ){
	//Comprobamos que es del tipo que nos interesa
	if ( $seccion->post_type == 'seccion' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['seccion_url'] ) ){
			update_post_meta( $idseccion, 'seccion_url', $_POST['seccion_url'] );
		}
		if ( isset( $_POST['seccion_btn'] ) ){
			update_post_meta( $idseccion, 'seccion_btn', $_POST['seccion_btn'] );
		}
	}
}

//paquete
add_action( 'add_meta_boxes', 'paquete_custom_metabox' );

function paquete_custom_metabox(){
	add_meta_box( 'paquete_meta', 'Información del paquete', 'display_paquete_atributos', 'paquete', 'advanced', 'default');
}

function display_paquete_atributos( $paquete ){
	$precio = esc_html( get_post_meta( $paquete->ID, 'paquete_precio', true ) );
	$contenido1 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido1', true ) );
	$contenido2 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido2', true ) );
	$contenido3 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido3', true ) );
	$contenido4 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido4', true ) );
	$contenido5 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido5', true ) );
	$contenido6 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido6', true ) );
	$contenido7 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido7', true ) );
	$contenido8 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido8', true ) );
	$contenido9 = esc_html( get_post_meta( $paquete->ID, 'paquete_contenido9', true ) );
?>

<table style="width:100%; text-align: left;">
	<tr>
		<th style="padding-bottom:10px">
			<label>Precio mínimo:</label></br>
			<input style="width:100%" type="text" name="paquete_precio" value="<?php echo $precio; ?>">
		</th>
	</tr>
	<tr>
		<th style="padding-bottom:5px">
			<label>Contiene:</label></br>
			<input style="width:100%" type="text" name="paquete_contenido1" value="<?php echo $contenido1; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:5px">
			<input style="width:100%" type="text" name="paquete_contenido2" value="<?php echo $contenido2; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:5px">
			<input style="width:100%" type="text" name="paquete_contenido3" value="<?php echo $contenido3; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:5px">
			<input style="width:100%" type="text" name="paquete_contenido4" value="<?php echo $contenido4; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:10px">
			<input style="width:100%" type="text" name="paquete_contenido5" value="<?php echo $contenido5; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:5px">
			<input style="width:100%" type="text" name="paquete_contenido6" value="<?php echo $contenido6; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:5px">
			<input style="width:100%" type="text" name="paquete_contenido7" value="<?php echo $contenido7; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:10px">
			<input style="width:100%" type="text" name="paquete_contenido8" value="<?php echo $contenido8; ?>">
		</th>		
	</tr>
	<tr>
		<th style="padding-bottom:10px">
			<input style="width:100%" type="text" name="paquete_contenido9" value="<?php echo $contenido9; ?>">
		</th>		
	</tr>
</table>
<?php

}

add_action( 'save_post', 'paquete_save_metas', 10, 2 );
function paquete_save_metas( $idpaquete, $paquete ){
	//Comprobamos que es del tipo que nos interesa
	if ( $paquete->post_type == 'paquete' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['paquete_precio'] ) ){
			update_post_meta( $idpaquete, 'paquete_precio', $_POST['paquete_precio'] );
		}
		if ( isset( $_POST['paquete_contenido1'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido1', $_POST['paquete_contenido1'] );
		}
		if ( isset( $_POST['paquete_contenido2'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido2', $_POST['paquete_contenido2'] );
		}
		if ( isset( $_POST['paquete_contenido3'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido3', $_POST['paquete_contenido3'] );
		}
		if ( isset( $_POST['paquete_contenido4'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido4', $_POST['paquete_contenido4'] );
		}
		if ( isset( $_POST['paquete_contenido5'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido5', $_POST['paquete_contenido5'] );
		}
		if ( isset( $_POST['paquete_contenido6'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido6', $_POST['paquete_contenido6'] );
		}
		if ( isset( $_POST['paquete_contenido7'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido7', $_POST['paquete_contenido7'] );
		}
		if ( isset( $_POST['paquete_contenido8'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido8', $_POST['paquete_contenido8'] );
		}
		if ( isset( $_POST['paquete_contenido9'] ) ){
			update_post_meta( $idpaquete, 'paquete_contenido9', $_POST['paquete_contenido9'] );
		}
	}
}

//beneficio
add_action( 'add_meta_boxes', 'beneficio_custom_metabox' );

function beneficio_custom_metabox(){
	add_meta_box( 'beneficio_meta', 'Información para banner', 'display_beneficio_atributos', 'beneficio', 'advanced', 'default');
}

function display_beneficio_atributos( $beneficio ){
	$icon = esc_html( get_post_meta( $beneficio->ID, 'beneficio_icon', true ) );
?>

<table style="width:100%; text-align: left;">
	<tr>
		<th style="padding-bottom:10px">
			<a href="http://materializecss.com/icons.html" target="_blank">Ver íconos</a>
			<br>
			<img style="max-width: 100%" src="<?php echo THEMEPATH ?>images/icons.png" alt="iconos">
			<br>
		</th>
	</tr>
	<tr>
		<th style="padding-bottom:10px">
			<label>Ícono Beneficio:</label></br>
			<input style="width:100%" type="text" name="beneficio_icon" value="<?php echo $icon; ?>">
		</th>
	</tr>
</table>
<?php

}

add_action( 'save_post', 'beneficio_save_metas', 10, 2 );
function beneficio_save_metas( $idbeneficio, $beneficio ){
	//Comprobamos que es del tipo que nos interesa
	if ( $beneficio->post_type == 'beneficio' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['beneficio_icon'] ) ){
			update_post_meta( $idbeneficio, 'beneficio_icon', $_POST['beneficio_icon'] );
		}
	}
}