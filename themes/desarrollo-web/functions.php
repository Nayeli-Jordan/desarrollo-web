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
require_once( 'inc/pages.php' );
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
	
	wp_localize_script( 'dw_functions', 'isHome', (string)is_front_page() );
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

/**
* Configuraciones WP
*/

// Agregar css y js al administrador
function load_custom_files_wp_admin() {
        wp_register_style( 'bct_wp_admin_css', THEMEPATH . '/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'bct_wp_admin_css' );

        wp_register_script( 'bct_wp_admin_js', THEMEPATH . 'admin/admin-script.js', false, '1.0.0' );
        wp_enqueue_script( 'bct_wp_admin_js' );        
}
add_action( 'admin_enqueue_scripts', 'load_custom_files_wp_admin' );

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


/**
* CUSTOM POST TYPE
*/

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
			<label>URL BOTÓN: (Deja vacio si deseas scroll a sección contacto)</label></br>
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
	$tiempo = esc_html( get_post_meta( $paquete->ID, 'paquete_tiempo', true ) );
?>

<table style="width:100%; text-align: left;">
	<tr>
		<th style="padding-bottom:10px">
			<label>Precio mínimo: (ej. 12,000)</label></br>
			<input style="width:100%" type="text" name="paquete_precio" value="<?php echo $precio; ?>">
		</th>
	</tr>
	<tr>
		<th style="padding-bottom:10px">
			<label>Tiempo mínimo de entrega: (ej. mínimo 4 semanas)</label></br>
			<input style="width:100%" type="text" name="paquete_tiempo" value="<?php echo $tiempo; ?>">
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
		if ( isset( $_POST['paquete_tiempo'] ) ){
			update_post_meta( $idpaquete, 'paquete_tiempo', $_POST['paquete_tiempo'] );
		}
	}
}

//beneficio
add_action( 'add_meta_boxes', 'beneficio_custom_metabox' );

function beneficio_custom_metabox(){
	add_meta_box( 'beneficio_meta', 'Información beneficio', 'display_beneficio_atributos', 'beneficio', 'advanced', 'default');
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

//proyecto
add_action( 'add_meta_boxes', 'proyecto_custom_metabox' );

function proyecto_custom_metabox(){
	add_meta_box( 'proyecto_meta', 'Información proyecto', 'display_proyecto_atributos', 'proyecto', 'advanced', 'default');
}

function display_proyecto_atributos( $proyecto ){
	$url       = esc_html( get_post_meta( $proyecto->ID, 'proyecto_url', true ) );
    $image     = esc_html( get_post_meta( $proyecto->ID, 'proyecto_image', true ) );    
?>

<table style="width:100%; text-align: left;">
	<tr>
		<th style="padding-bottom:10px">
			<label>URL Proyecto: (Deja vacio si no deseas poner url)</label></br>
			<input style="width:100%" type="text" name="proyecto_url" value="<?php echo $url; ?>">
		</th>
	</tr>
    <tr>
        <th>
            <label for="proyecto_image">Imagen proyecto</label><br>
            <input type="text" name="proyecto_image" id="proyecto_image" class="meta-image regular-text" value="<?php echo $image; ?>">
            <input type="button" class="button image-upload" value="Browse">
        </th>
        <th>
            <div class="image-preview">
                <img src="<?php echo $image; ?>">
            </div>            
        </th>
    </tr>    
</table>
<?php

}

add_action( 'save_post', 'proyecto_save_metas', 10, 2 );
function proyecto_save_metas( $idproyecto, $proyecto ){
	//Comprobamos que es del tipo que nos interesa
	if ( $proyecto->post_type == 'proyecto' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['proyecto_url'] ) ){
			update_post_meta( $idproyecto, 'proyecto_url', $_POST['proyecto_url'] );
		}
        if ( isset( $_POST['proyecto_image'] ) ){
            update_post_meta( $idproyecto, 'proyecto_image', $_POST['proyecto_image'] );
        }
	}
}

//miembro
add_action( 'add_meta_boxes', 'miembro_custom_metabox' );

function miembro_custom_metabox(){
    add_meta_box( 'miembro_meta', 'Información miembro', 'display_miembro_atributos', 'miembro', 'advanced', 'default');
}

function display_miembro_atributos( $miembro ){
    $github = esc_html( get_post_meta( $miembro->ID, 'miembro_github', true ) );
    $linkedin = esc_html( get_post_meta( $miembro->ID, 'miembro_linkedin', true ) );
    $behance = esc_html( get_post_meta( $miembro->ID, 'miembro_behance', true ) );
    $instagram = esc_html( get_post_meta( $miembro->ID, 'miembro_instagram', true ) );
?>

<table style="width:100%; text-align: left;">
    <tr>
        <th style="padding-bottom:10px">
            <label>GitHub:</label></br>
            <input style="width:100%" type="text" name="miembro_github" value="<?php echo $github; ?>">
        </th>
    </tr>
    <tr>
        <th style="padding-bottom:10px">
            <label>Linkedin:</label></br>
            <input style="width:100%" type="text" name="miembro_linkedin" value="<?php echo $linkedin; ?>">
        </th>
    </tr>
    <tr>
        <th style="padding-bottom:10px">
            <label>Behance:</label></br>
            <input style="width:100%" type="text" name="miembro_behance" value="<?php echo $behance; ?>">
        </th>
    </tr>
    <tr>
        <th style="padding-bottom:10px">
            <label>Instagram:</label></br>
            <input style="width:100%" type="text" name="miembro_instagram" value="<?php echo $instagram; ?>">
        </th>
    </tr>
</table>
<?php

}

add_action( 'save_post', 'miembro_save_metas', 10, 2 );
function miembro_save_metas( $idmiembro, $miembro ){
    //Comprobamos que es del tipo que nos interesa
    if ( $miembro->post_type == 'miembro' ){
    //Guardamos los datos que vienen en el POST
        if ( isset( $_POST['miembro_github'] ) ){
            update_post_meta( $idmiembro, 'miembro_github', $_POST['miembro_github'] );
        }
        if ( isset( $_POST['miembro_linkedin'] ) ){
            update_post_meta( $idmiembro, 'miembro_linkedin', $_POST['miembro_linkedin'] );
        }
        if ( isset( $_POST['miembro_behance'] ) ){
            update_post_meta( $idmiembro, 'miembro_behance', $_POST['miembro_behance'] );
        }
        if ( isset( $_POST['miembro_instagram'] ) ){
            update_post_meta( $idmiembro, 'miembro_instagram', $_POST['miembro_instagram'] );
        }
    }
}


/**
* Taxonomía
*/

// Obtener las opciones (taxonomía) de un paquete con estilo en cada una 
// Lo siguiente funciona pero sin estilo (todo corrido)
// $terms = get_the_terms( $post->ID, 'opciones' ); 
// foreach($terms as $term) {
// 	echo $term->name;
// }
/**
 * Get taxonomies terms links.
 *
 * @see get_object_taxonomies()
 */
function custom_taxonomies_opciones() {
    // Get post by post ID.
    if ( ! $post = get_post() ) {
        return '';
    }
 
    // Get post type by post.
    $post_type = $post->post_type;
 
    // Get post type taxonomies.
    $taxonomies = get_object_taxonomies( $post_type, 'opciones' );
 
    $out = array();
 
    foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){
 
        // Get the terms related to post.
        $terms = get_the_terms( $post->ID, $taxonomy_slug );
 
        if ( ! empty( $terms ) ) {
            $out[] = "<ul class='points-list'>";
            foreach ( $terms as $term ) {
                $out[] = sprintf( '<li>%1$s</li>',
                    esc_html( $term->name )
                );
            }
            $out[] = "\n</ul>\n";
        }
    }
    return implode( '', $out );
}

// Obtener los servicios (taxonomía) de cada proyecto 
/**
 * Get taxonomies terms links.
 *
 * @see get_object_taxonomies()
 */
function custom_taxonomies_servicios() {
    // Get post by post ID.
    if ( ! $post = get_post() ) {
        return '';
    }
 
    // Get post type by post.
    $post_type = $post->post_type;
 
    // Get post type taxonomies.
    $taxonomies = get_object_taxonomies( $post_type, 'servicios' );
 
    $out = array();
 
    foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){
 
        // Get the terms related to post.
        $terms = get_the_terms( $post->ID, $taxonomy_slug );
 
        if ( ! empty( $terms ) ) {
            $out[] = "<p>";
            foreach ( $terms as $term ) {
                $out[] = sprintf( '<small>✓%1$s </small>',
                    esc_html( $term->name )
                );
            }
            $out[] = "\n</p>\n";
        }
    }
    return implode( '', $out );
}


/**
* Optimización
*/

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
* SEO y Analitics
**/

//Código Analitics
function add_google_analytics() {
    echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
    echo '<script type="text/javascript">';
    echo 'var pageTracker = _gat._getTracker("UA-117075138-1");';
    echo 'pageTracker._trackPageview();';
    echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');

/* Aplaza el análisis de JavaScript para una carga más rápida */
if(!is_admin()) {
    // Move all JS from header to footer
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}

/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
 
    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
 
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
 
        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
 
        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
 
        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' id="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
 
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

