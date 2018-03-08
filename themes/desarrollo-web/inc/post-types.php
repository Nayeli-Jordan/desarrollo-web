<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// Servicios
	$labels = array(
		'name'          => 'Servicios',
		'singular_name' => 'Servicio',
		'add_new'       => 'Nuevo servicio',
		'add_new_item'  => 'Nuevo servicio',
		'edit_item'     => 'Editar servicio',
		'new_item'      => 'Nuevo servicio',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver servicio',
		'search_items'  => 'Buscar servicio',
		'not_found'     => 'No hay servicios.',
		'menu_name'     => 'Servicios'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'servicio', $args );

	
	// Beneficio
	$labels = array(
		'name'          => 'Beneficios',
		'singular_name' => 'Beneficio',
		'add_new'       => 'Nuevo beneficio',
		'add_new_item'  => 'Nuevo beneficio',
		'edit_item'     => 'Editar beneficio',
		'new_item'      => 'Nuevo beneficio',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver beneficio',
		'search_items'  => 'Buscar beneficio',
		'not_found'     => 'No hay beneficios.',
		'menu_name'     => 'Beneficios'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'beneficio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'beneficio', $args );

	// Seccion
	$labels = array(
		'name'          => 'Secciones',
		'singular_name' => 'Sección',
		'add_new'       => 'Nueva sección',
		'add_new_item'  => 'Nueva sección',
		'edit_item'     => 'Editar sección',
		'new_item'      => 'Nueva sección',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver sección',
		'search_items'  => 'Buscar sección',
		'not_found'     => 'No hay secciones.',
		'menu_name'     => 'Secciones'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'seccion' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'         => array( 'posicion' )
	);
	register_post_type( 'seccion', $args );

});