<section id="section-servicios" class="container [ padding-top-bottom-section ]">

	<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => 1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'servicios',
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

	<div class="[ servicios ][ row ]">

		<?php
			$servicio_args = array(
				'post_type' => 'servicio',
				'posts_per_page' => -1,
				'order'=> 'ASC',
			);
			$servicio_query = new WP_Query( $servicio_args );
			if ( $servicio_query->have_posts() ) :
			$i = 1;
			while ( $servicio_query->have_posts() ) : $servicio_query->the_post();
		?>
			<div class="[ col s12 sm6 m4 ][ margin-bottom ]">
				<div class="servicio-item">
					<div class="[ bg-image ][ width-100p height-250 ]" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">							
						<div class="triangulo-bottom-left absolute bottom-0 left-0  wow bounceInUp ]"></div>	
						<div class="triangulo-bottom-right absolute bottom-0 right-0 wow fadeInUp ]" data-wow-delay="0.2s"></div>
						<div class="absolute bottom-0 left-0 padding-top-bottom-small padding-right-left-small wow fadeIn ]" data-wow-delay="0.4s">
							<h4 class="[ color-light ]"><?php the_title(); ?></h4>
							<hr class="line-xsmall">
						</div>
					</div>
				</div>					
			</div>

		<?php 
			$i ++;
			endwhile;
			wp_reset_postdata();
			else:
		?>
			<p>Falta agregar servicios</p>	
		<?php endif; ?>
	</div>
</section>