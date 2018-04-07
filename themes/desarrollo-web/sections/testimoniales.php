<section id="section-testimoniales" class="[ relative ][ bg-image ]" style="background-image: url(<?php echo THEMEPATH ?>images/testimoniales.jpg);">
	<div class="[ bg-dark-opacity-minor ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
	<div class="[ container ][ relative ][ padding-top-bottom-section ]">
		<h2 class="[ text-center ][ color-light ]">Testimoniales</h2>
		<div class="row">
			<?php
				$testimonial_args = array(
					'post_type' => 'testimonial',
					'posts_per_page' => 3,
					'order'=> 'ASC',
				);
				$testimonial_query = new WP_Query( $testimonial_args );
				$i = 1;
				if ( $testimonial_query->have_posts() ) :				
				while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post();
			?>
				<div class="col s12 sm6 m4 <?php if ($i == 3){ ?> hide-sm-and-down <?php } ?>">
					<div class="card-panel relative [ wow fadeIn ][ margin-bottom ]">
						<div class="triangulo-top-right absolute right-0"></div>		
						<div class="triangulo-top-left absolute left-0"></div>
						<div class="padding-top-bottom-xlarge padding-right-left">
							<p class="[ color-primary-light ] text-center">
								<i class="material-icons medium">grade</i>
							</p>
							<div class="height-testimonial"><?php the_content(); ?></div>
							<hr class="line-difumined-large">
							<p class="[ text-center ][ color-primary ]"><small>-<?php the_title(); ?></small></p>								
						</div>
						<div class="triangulo-bottom-right absolute right-0 bottom-0"></div>
					</div>
				</div>
			
			<?php 
				$i ++;				
				endwhile;
				wp_reset_postdata();
				else:
			?>
				<p>Falta agregar testimoniales</p>	
			<?php endif; ?>			
		</div>
	</div>
</section>