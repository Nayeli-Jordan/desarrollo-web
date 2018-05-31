<section id="section-testimoniales" class="[ relative ][ bg-image ]" style="background-image: url(<?php echo THEMEPATH ?>images/contacto.png);">
	<div class="[ bg-dark-opacity-minor ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
	<div class="container [ padding-top-bottom-section ]">
		<h2 class="[ text-center ][ color-light ] frase">Testimoniales</h2>
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
				<div class="col s12 m4">
					<div class="content-testimonial z-depth-2">
						<div class="large text-center min-height-65"><?php the_content(); ?></div>
						<hr class="line-difumined-large margin-top-bottom-small">
						<div class="row">
							<div class="col s5 m4 l3 no-padding">
								<img class="responsive-img circle" src="<?php the_post_thumbnail_url('medium'); ?>" alt="imagen cliente">	
							</div>
							<div class="col s7 m8 l9">
								<p class="uppercase font-alegreya xstrong color-primary"><?php the_title(); ?></p>
								<p>proyecto</p>							
							</div>							
						</div>
						<div class="triangle"></div>
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