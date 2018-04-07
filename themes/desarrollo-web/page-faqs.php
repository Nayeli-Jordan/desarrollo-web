<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<section id="block-title">
			<h2 class="[ container ][ text-center ][ no-margin-bottom ][ color-light ]"><?php the_title(); ?></h2>			
		</section>
		<section class="[ container ]">
			<div class="row">
				<div class="col s12 m10 offset-m1 l8 offset-l2">
					<?php the_content(); ?>
				</div>
			</div>			
		</section>
	<?php endwhile; // end of the loop. ?>	
	<section class="[ container ]">
		<div class="[ row ]">
			<div class="[ col s12 m10 l8 offset-m1 offset-l2 ]">
				<ul class="collapsible">
					<?php
						$faq_args = array(
							'post_type' => 'faq',
							'posts_per_page' => -1,
							'order'=> 'ASC',
						);
						$faq_query = new WP_Query( $faq_args );
						$i = 1;
						if ( $faq_query->have_posts() ) :				
						while ( $faq_query->have_posts() ) : $faq_query->the_post();
					?>
						<li class="active <?php if ($i == 1){ ?> active <?php } ?>">
							<div class="collapsible-header">
								<i class="material-icons tiny color-primary icon-open">arrow_drop_down</i>
								<i class="material-icons tiny color-primary icon-close hide">arrow_drop_up</i>
								<span><?php the_title(); ?></span>
							</div>
							<div class="collapsible-body"><span><?php the_content(); ?></span></div>
						</li>
					<?php
						$i ++;				
						endwhile;
						wp_reset_postdata();
						else:
					?>
						<p>Falta agregar faqs</p>	
					<?php endif; ?>					
				</ul>				
			</div>
		</div>
		
	</section>

<?php get_footer() ?>