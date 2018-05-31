<section id="section-beneficios" class="container [ padding-top-bottom-section ]">

		<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => -1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'beneficios',
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
			$beneficio_args = array(
				'post_type' => 'beneficio',
				'posts_per_page' => -1,
				'order'=> 'ASC',
			);
			$beneficio_query = new WP_Query( $beneficio_args );
			$i = 1;
			if ( $beneficio_query->have_posts() ) :				
			while ( $beneficio_query->have_posts() ) : $beneficio_query->the_post();

			$custom_fields = get_post_custom();
			$post_id = get_the_ID();
			$icon = get_post_meta( $post_id, 'beneficio_icon', true );
		?>
			<div class="col s12 sm6 m4 l3 <?php if ($i == 9){ ?> hide-sm-and-down hide-l-and-up <?php } ?> [ text-center ][ margin-bottom ][ wow bounceInRight ]">					
				<?php if( $icon != "" ) { ?>
					<i class="material-icons [ wow fadeIn ]" data-wow-delay="0.5s"><?php echo $icon; ?></i>
				<?php } else { ?>	
					<i class="material-icons [ wow fadeIn ]" data-wow-delay="0.5s">grade</i>
				<?php } ?>	
				<h4 class="margin-bottom-xsmall"><?php the_title(); ?></h4>
				<hr class="line-difumined-large">
				<small><?php the_content(); ?></small>
			</div>
		
		<?php 
			$i ++;				
			endwhile;
			wp_reset_postdata();
			else:
		?>
			<p>Falta agregar beneficios</p>	
		<?php endif; ?>

	</div>
</section>