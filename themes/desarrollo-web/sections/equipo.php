<section id="section-equipo" class="container [ padding-top-bottom-section ]">

		<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => -1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'equipo',
					//'operator' => 'NOT IN'
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
			$miembro_args = array(
				'post_type' => 'miembro',
				'posts_per_page' => -1,
				'order'=> 'ASC',
			);
			$miembro_query = new WP_Query( $miembro_args );
			$i = 1;
			if ( $miembro_query->have_posts() ) :				
			while ( $miembro_query->have_posts() ) : $miembro_query->the_post();

			$custom_fields = get_post_custom();
			$post_id = get_the_ID();
			$github = get_post_meta( $post_id, 'miembro_github', true );
			$linkedin = get_post_meta( $post_id, 'miembro_linkedin', true );
			$behance = get_post_meta( $post_id, 'miembro_behance', true );
			$instagram = get_post_meta( $post_id, 'miembro_instagram', true );			
		?>
			<div class="col s12 sm6 m4 l3 margin-bottom">
				<div class="card [ wow fadeIn ]">
					<div class="card-content">
						<img class="responsive-img circle margin-bottom-small" src="<?php the_post_thumbnail_url('medium'); ?>">
						<h5><?php the_title(); ?></h5>
						<small><p><?php the_content(); ?></p></small>
					</div>
					<div class="card-action">
						<?php if( $github != "" ) : ?>
							<a href="<?php echo $github; ?>">
								<i class="icon-github"></i>
							</a>
						<?php endif; ?>	
						<?php if( $linkedin != "" ) : ?>
							<a href="<?php echo $linkedin; ?>">
								<i class="icon-linkedin"></i>
							</a>
						<?php endif; ?>	
						<?php if( $behance != "" ) : ?>
							<a href="<?php echo $behance; ?>">
								<i class="icon-behance"></i>
							</a>
						<?php endif; ?>	
						<?php if( $instagram != "" ) : ?>
							<a href="<?php echo $instagram; ?>">
								<i class="icon-instagram"></i>
							</a>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		
		<?php 
			$i ++;				
			endwhile;
			wp_reset_postdata();
			else:
		?>
			<p>Falta agregar miembro</p>	
		<?php endif; ?>

	</div>
</section>