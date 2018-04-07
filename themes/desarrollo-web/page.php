<?php get_header() ?>
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
<?php get_footer() ?>