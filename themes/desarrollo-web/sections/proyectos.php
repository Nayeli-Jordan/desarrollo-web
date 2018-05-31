<section id="section-proyectos" class="bg-gray-dark color-light [ padding-top-bottom-section ]">
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
			<h2 class="[ text-center ][ color-light ]"><?php the_title(); ?></h2>
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

				$custom_fields = get_post_custom();
				$post_id = get_the_ID();
				$url = get_post_meta( $post_id, 'proyecto_url', true );
			?>
				<div class="col s12 sm6 m4  <?php if ($i == 3){ ?> hide-sm-and-down <?php } ?> [ margin-bottom ][ wow fadeIn ]">	<!-- m4 -->			
					<div class="[ container-proyect ] margin-bottom-xsmall">
						<?php if( $url != "" ) { ?>
							<a class="waves-effect waves-light btn [ btn-proyect ]" href="<?php echo $url; ?>" target="_blank">
								<i class="material-icons tiny">computer</i>									
							</a>			
						<?php } ?>							
						<img class="responsive-img materialboxed" <?php if ( wp_is_mobile() ){ ?> src="<?php the_post_thumbnail_url('medium'); ?>" <?php } else { ?> src="<?php the_post_thumbnail_url('full'); ?>" <?php } ?> alt="imagen del proyecto">
						<div class="[ opacity-proyect ][ wow fadeIn ]"></div>
			
					</div>						
					<!-- servicios del proyecto -->
					<?php echo custom_taxonomies_servicios(); ?>			
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