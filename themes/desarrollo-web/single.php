<?php 
	get_header();
	//global $post;
	//$post = $wp_query->post;

	$custom_fields = get_post_custom();
	$post_id = get_the_ID();
	$precio = get_post_meta( $post_id, 'paquete_precio', true );
	$tiempo = get_post_meta( $post_id, 'paquete_tiempo', true );

	 while ( have_posts() ) : the_post(); 
?>
	<section id="block-title">
		<h2 class="[ container ][ text-center ][ no-margin-bottom ][ color-light ]"><?php the_title(); ?></h2>			
	</section>
	<section class="[ container ]">
		<div class="row">
			<div class="col s12 m10 offset-m1 l8 offset-l2 margin-bottom">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 offset-m1 l5 offset-l2 margin-bottom">
				<h3>El paquete incluye:</h3>
				<!-- opciones del paquete -->
				<?php echo custom_taxonomies_opciones(); ?>				
			</div>
			<div class="col s12 m4 l3 margin-bottom">
				<div class="card-panel relative [ wow fadeIn ][ margin-bottom ]">
					<div class="triangulo-top-right absolute right-0"></div>		
					<div class="triangulo-top-left absolute left-0"></div>
					<div class="padding-top-bottom-xlarge padding-right-left">						
						<?php if( $precio != "" ) { ?>
							<p class="[ color-primary-light ] text-center">
								
							</p>
							<div class="col s12 [ margin-top-bottom ]">
								<p class="[ text-center ][ color-primary-dark ]">
									<i class="material-icons tiny inline-block alight-middle">attach_money</i> Desde:<br>
									<span class="[ strong ][ xlarge ][ font-alegreya ]"><?php echo $precio; ?> MXN</span>
								</p>
							</div>	
							<div class="col s12 m6 offset-m3 l4 offset-l4">
								<hr class="line-difumined-small">
							</div>	
							<div class="clearfix"></div>							
						<?php } ?>	
						<?php if( $tiempo != "" ) { ?>
							<p class="[ color-primary-light ] text-center">
								
							</p>
							<p class="[ text-center ][ color-primary-dark ]">
								<i class="material-icons tiny inline-block alight-middle">access_time</i> Entrega:<br>
								<span class="[ strong ][ xlarge ][ font-alegreya ]"><?php echo $tiempo; ?></span>
							</p>
						<?php } ?>						
					</div>
					<div class="triangulo-bottom-right absolute right-0 bottom-0"></div>
				</div>				
			</div>
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
			<div class="text-center margin-top">
				<?php the_content(); ?>
			</div>		
		<?php 
			$i ++;
			endwhile;
			wp_reset_postdata();
			endif; ?>		
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
