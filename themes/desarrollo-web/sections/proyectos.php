<section id="section-proyectos" class="bg-gray-light [ padding-top-bottom-section ]">
	<div class="[ container ]">
		<?php
			$seccion_args = array(
				'post_type' => 'seccion',
				'posts_per_page' => -1,
				'order'=> 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'posicion',
						'field'    => 'slug', //term_id, slug
						'terms'    => 'proyectos'
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

		<div class="row">
			<?php
				$proyecto_args = array(
					'post_type' => 'proyecto',
					'posts_per_page' => 3,
					'order'=> 'ASC',
				);
				$proyecto_query = new WP_Query( $proyecto_args );
				$i = 1;
				if ( $proyecto_query->have_posts() ) :				
				while ( $proyecto_query->have_posts() ) : $proyecto_query->the_post();

				$custom_fields 	= get_post_custom();
				$post_id 		= get_the_ID();
				$url 			= get_post_meta( $post_id, 'proyecto_url', true );
				$image 			= get_post_meta( $post_id, 'proyecto_image', true );
			?>
				<div class="col s12 sm6 m4  <?php if ($i == 3){ ?> hide-sm-and-down <?php } ?> [ margin-bottom ][ wow fadeIn ]">	<!-- m4 -->			
					<img class="responsive-img margin-bottom-xsmall" src="<?php the_post_thumbnail_url('medium'); ?>" alt="imagen del proyecto <?php the_title(); ?>">
					<div class="relative">
						<p class="strong uppercase color-primary font-alegreya block margin-bottom"><?php the_title(); ?></p>						
						<div class="buttons-proyect">						
							<a class="waves-effect waves-light [ btn btn-primary btn-proyect ] modal-trigger" href="#<?php echo $post_id; ?>">
								<i class="material-icons tiny">remove_red_eye</i>									
							</a>
						</div>
						<!-- servicios del proyecto -->
						<?php echo custom_taxonomies_servicios(); ?>												
					</div>			
				</div>

				<!-- Modal -->
				<div id="<?php echo $post_id; ?>" class="modal full-modal">					
					<div class="container padding-top-bottom-section">
						<div class="row text-center">
							<div class="col s12 m10 offset-m1 l8 offset-l2 relative margin-bottom">
								<a href="#!" class="modal-close waves-effect btn btn-primary btn-proyect absolute right--5 top--20">
									<i class="material-icons tiny">close</i>
								</a>
								<img class="responsive-img" src="<?php the_post_thumbnail_url('medium'); ?>" alt="imagen del proyecto <?php the_title(); ?>">
							</div>
							<div class="col s12 m8 offset-m2 l6 offset-l3">
								<h4 class="color-primary fz-22 xstrong margin-bottom"><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
								<?php if( $image != "" ) : ?>
									<img class="responsive-img margin-top-bottom" src="<?php echo $image; ?>" alt="imagen del proyecto <?php the_title(); ?>">
								<?php endif; ?>	
								<!-- servicios del proyecto -->
								<?php echo custom_taxonomies_servicios(); ?>
								<?php if( $image != "" ) : ?>
									<a class="waves-effect waves-light [ btn btn-primary btn-proyect ] margin-top" href="<?php echo $url; ?>" target="_blank">
										<i class="material-icons tiny">computer</i>									
									</a>
								<?php endif; ?>								
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
				<p>Falta agregar proyectos</p>	
			<?php endif; ?>	
		</div>	
	</div>
</section>