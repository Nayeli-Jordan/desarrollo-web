<section id="section-testimoniales" class="[ bg-gray-light ][ padding-top-bottom-section ][ relative ]" >
	<div class="container">
		<h2 class="[ text-center ][ color-primary ]">Testimoniales</h2>
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
				<div class="col s12 m4 margin-bottom-sm-and-down">
					<div class="text-center [ wow fadeIn ]" data-wow-delay="<?php echo $i; ?>s">
						<div class="content-quote relative">
							<i class="icon-quote rotate--180 color-primary-light"></i>
							<?php the_content(); ?>
							<i class="icon-quote color-primary-light"></i>
						</div>
						<small>
							<span class="uppercase font-alegreya xstrong block color-primary"><?php the_title(); ?></span>
							<span>proyecto</span>								
						</small>
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