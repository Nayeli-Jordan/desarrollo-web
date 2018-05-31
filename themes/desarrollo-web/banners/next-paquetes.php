<?php
	$seccion_args = array(
		'post_type' => 'seccion',
		'posts_per_page' => 1,
		'order'=> 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'posicion',
				'field'    => 'slug', //term_id, slug
				'terms'    => 'banner-siguiente-paquetes',
				//'operator' => 'NOT IN'
			),
		)
	);
	$seccion_query = new WP_Query( $seccion_args );
	if ( $seccion_query->have_posts() ) :
	$i = 1;
	while ( $seccion_query->have_posts() ) : $seccion_query->the_post();

	$custom_fields = get_post_custom();
	$post_id = get_the_ID();
	$url = get_post_meta( $post_id, 'seccion_url', true );
	$btn = get_post_meta( $post_id, 'seccion_btn', true );			
?>
	<section class="[ relative ][ bg-image ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
		<div class="[ bg-dark-opacity-minor ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
		<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
			<?php the_content(); ?>
			<?php if( $url != "" ) { ?>
				<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]" href="<?php echo $url; ?>"><?php echo $btn; ?></a>
			<?php } ?>	
		</div>
	</section>	
<?php 
	$i ++;
	endwhile;
	wp_reset_postdata();
	else:
?>
	<p>Falta agregar información</p>	
<?php endif; ?>