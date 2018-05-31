<div class="carousel [ paquetes ]">
	<div class="opacity-left"></div>
	<div class="opacity-right"></div>

	<?php
		$paquete_args = array(
			'post_type' => 'paquete',
			'posts_per_page' => -1,
			'order'=> 'ASC',
		);
		$paquete_query = new WP_Query( $paquete_args );
		$i = 1;
		if ( $paquete_query->have_posts() ) :				
		while ( $paquete_query->have_posts() ) : $paquete_query->the_post();

		$custom_fields = get_post_custom();
		$post_id = get_the_ID();
		$precio = get_post_meta( $post_id, 'paquete_precio', true );
		$tiempo = get_post_meta( $post_id, 'paquete_tiempo', true );
	?>
		<div class="carousel-item <?php if ($i == 1){ ?> active <?php } ?>">
			<div class="[ card ]">
				<div class="[ item-locked ]"></div>
				<div class="triangulo-top-right absolute right-0 [ wow slideInDown ]" data-wow-delay="0.3s"></div>		
				<div class="triangulo-top-left absolute left-0 [ wow slideInDown ]"></div>
				<div class="[ card-content ][ padding-top-bottom-xlarge ]">
					<h3 class="[ color-secondary ][ text-center ]"><?php the_title(); ?></h3>
					<hr class="line-difumined-small">
					<div class="[ info-paquete ]">
						<?php the_content(); ?>
					</div>							
					<?php if( $precio != "" ) { ?>
						<hr class="line-difumined-large">
						<p class="[ text-center ][ color-secondary-dark ][ strong ]">	
							Desde <?php echo $precio; ?> MXN
						</p>
					<?php } ?>								
					<hr class="line-difumined-large">
					<!-- opciones del paquete -->
					<?php echo custom_taxonomies_opciones(); ?>
					<?php if( $tiempo != "" ) { ?>
						<hr class="line-difumined-large">
						<small class="block [ text-center ][ color-secondary-dark ][ strong ]">	
							Entrega: <?php echo $tiempo; ?>
						</small>
					<?php } ?>
				</div>
				<div class="triangulo-bottom-right absolute right-0 bottom-0 [ wow slideInUp ]"></div>
			</div>
		</div>

	<?php
		$i ++;				
		endwhile;
		wp_reset_postdata();
		else:
	?>
		<p>Falta agregar paquetes</p>	
	<?php endif; ?>		

</div>