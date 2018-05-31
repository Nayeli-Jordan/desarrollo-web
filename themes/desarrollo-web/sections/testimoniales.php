<section id="section-testimoniales" class="[ padding-top-bottom-section ][ relative ]" >
	<div class="[ bg-dark-opacity-xlight ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
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
					<div class="content-testimonial z-depth-2 text-center [ wow bounce ]" data-wow-delay="<?php echo $i; ?>s">
						<div class="triangle-right [ wow slideInDown ]"></div>
						<div class="triangle-left [ wow slideInDown ]"></div>
						<div class="content-quote relative">
							<i class="icon-quote rotate--180 color-primary-xdark"></i>
							<?php the_content(); ?>
							<i class="icon-quote color-primary-xdark"></i>
						</div>
						<small>
							<span class="uppercase font-alegreya xstrong block color-primary"><?php the_title(); ?></span>
							<span>proyecto</span>								
						</small>
						<div class="triangle-bottom-right [ wow slideInUp ]"></div>
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