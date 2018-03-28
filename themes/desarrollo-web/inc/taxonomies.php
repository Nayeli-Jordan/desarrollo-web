<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////
add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// Categoria posicion sección
	if( ! taxonomy_exists('posicion')){

		$labels = array(
			'name'              => 'Posición',
			'singular_name'     => 'Posición',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar posición',
			'update_item'       => 'Actualizar posición',
			'add_new_item'      => 'Nuevo posición',
			'menu_name'         => 'Posición'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'posicion' ),
		);

		register_taxonomy( 'posicion', 'categoria', $args );
	}

	// Categoria posicion sección
	if( ! taxonomy_exists('opciones')){

		$labels = array(
			'name'              => 'Opción',
			'singular_name'     => 'Opción',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar opción',
			'update_item'       => 'Actualizar opción',
			'add_new_item'      => 'Nueva opción',
			'menu_name'         => 'Opciones paquete'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'opciones' ),
		);

		register_taxonomy( 'opciones', 'paquete', $args );
	}	


}