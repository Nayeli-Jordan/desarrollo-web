<section id="section-paquetes" class=" container [ padding-top-bottom-section ]">

	<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => 1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'paquetes',
					//'operator' => 'NOT IN'
				),
			)
		);
		$seccion_query = new WP_Query( $seccion_args );
		if ( $seccion_query->have_posts() ) :
		$i = 1;
		while ( $seccion_query->have_posts() ) : $seccion_query->the_post();
	?>
		<h2 class="[ text-center ][ color-primary ]"><?php the_title(); ?></h2>
		<div class="row text-center">
			<div class="col s12 m10 offset-m1 l8 offset-l2 [ margin-bottom ]">
				<?php the_content(); ?>
			</div>
		</div>
	<?php 
		$i ++;
		endwhile;
		wp_reset_postdata();
		else:
	?>
		<p>Falta agregar información</p>	
	<?php endif; ?>

	<!-- carousel paquetes -->
	<?php include (TEMPLATEPATH . '/sections/paquetes-carousel.php'); ?>

	<div class="[ center ][ margin-top ]">
		<a class="link-contacto waves-effect waves-light btn" id="contacto" itemprop="actionOption">Cotiza tu proyecto</a>			
	</div>
	<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => 1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'paquetes2',
					//'operator' => 'NOT IN'
				),
			)
		);
		$seccion_query = new WP_Query( $seccion_args );
		if ( $seccion_query->have_posts() ) :
		$i = 1;
		while ( $seccion_query->have_posts() ) : $seccion_query->the_post();
	?>
		<div class="row text-center margin-top">
			<div class="col s12 l10 offset-l1 [ margin-bottom ]">
				<?php the_content(); ?>
			</div>
		</div>		
	<?php 
		$i ++;
		endwhile;
		wp_reset_postdata();
		endif; ?>

</section>