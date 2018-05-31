<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

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
		'menu_position'      => 3,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'         => array( 'posicion' )
	);
	register_post_type( 'seccion', $args );

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
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'servicio', $args );

	// Paquete
	$labels = array(
		'name'          => 'Paquetes',
		'singular_name' => 'Paquete',
		'add_new'       => 'Nuevo paquete',
		'add_new_item'  => 'Nuevo paquete',
		'edit_item'     => 'Editar paquete',
		'new_item'      => 'Nuevo paquete',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver paquete',
		'search_items'  => 'Buscar paquete',
		'not_found'     => 'No hay paquete.',
		'menu_name'     => 'Paquetes'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'paquete' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'paquete', $args );	

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

	// miembro
	$labels = array(
		'name'          => 'Miembro',
		'singular_name' => 'Miembro',
		'add_new'       => 'Nuevo miembro',
		'add_new_item'  => 'Nuevo miembro',
		'edit_item'     => 'Editar miembro',
		'new_item'      => 'Nuevo miembro',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver miembro',
		'search_items'  => 'Buscar miembro',
		'not_found'     => 'No hay miembro.',
		'menu_name'     => 'Miembro'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'miembro' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'miembro', $args );

	// Proyecto
	$labels = array(
		'name'          => 'Proyectos',
		'singular_name' => 'Proyecto',
		'add_new'       => 'Nuevo proyecto',
		'add_new_item'  => 'Nuevo proyecto',
		'edit_item'     => 'Editar proyecto',
		'new_item'      => 'Nuevo proyecto',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver proyecto',
		'search_items'  => 'Buscar proyecto',
		'not_found'     => 'No hay proyectos.',
		'menu_name'     => 'Proyectos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'proyecto' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'proyecto', $args );

	// Testimonial
	$labels = array(
		'name'          => 'Testimoniales',
		'singular_name' => 'Testimonial',
		'add_new'       => 'Nuevo testimonial',
		'add_new_item'  => 'Nuevo testimonial',
		'edit_item'     => 'Editar testimonial',
		'new_item'      => 'Nuevo testimonial',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver testimonial',
		'search_items'  => 'Buscar testimonial',
		'not_found'     => 'No hay testimoniales.',
		'menu_name'     => 'Testimoniales'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'testimonial', $args );

	// faq´s
	$labels = array(
		'name'          => 'Faq´s',
		'singular_name' => 'Faq',
		'add_new'       => 'Nuevo faq',
		'add_new_item'  => 'Nuevo faq',
		'edit_item'     => 'Editar faq',
		'new_item'      => 'Nuevo faq',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver faq',
		'search_items'  => 'Buscar faq',
		'not_found'     => 'No hay faq´s.',
		'menu_name'     => 'Faq´s'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'faq' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'faq', $args );

});