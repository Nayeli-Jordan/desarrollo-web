<?php get_header() ?>

	<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => 1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'intro',
					//'operator' => 'NOT IN'
				),
			)
		);
		$seccion_query = new WP_Query( $seccion_args );
		if ( $seccion_query->have_posts() ) :
		$i = 1;
		while ( $seccion_query->have_posts() ) : $seccion_query->the_post();

		$custom_fields = get_post_custom();
		$post_id = get_the_ID();
		$url = get_post_meta( $post_id, 'seccion_url', true );
		$btn = get_post_meta( $post_id, 'seccion_btn', true );
	?>
		<section class="[ relative ][ bg-image ][ margin-top-50 ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-dark-opacity-minor ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
				<?php the_content(); ?>
				<?php if( $url != "" && $btn != "" ) { ?>
					<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]" href="<?php echo $url; ?>"><?php echo $btn; ?></a>
				<?php } else if( $url == "" ) { ?>	
					<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ] item-menu" id="contacto"><?php echo $btn; ?></a>
				<?php } ?>				
			</div>
		</section>
	<?php 
		$i ++;
		endwhile;
		wp_reset_postdata();
		else:
	?>
		<p>Falta agregar información</p>	
	<?php endif; ?>

	<section id="section-servicios" class="container [ padding-top-bottom-section ]">

		<?php
			$seccion_args = array(
				'post_type' => 'seccion',
				'posts_per_page' => 1,
				'order'=> 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'posicion',
						'field'    => 'slug', //term_id, slug
						'terms'    => 'servicios',
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

		<div class="[ servicios ][ row ]">

			<?php
				$servicio_args = array(
					'post_type' => 'servicio',
					'posts_per_page' => -1,
					'order'=> 'ASC',
				);
				$servicio_query = new WP_Query( $servicio_args );
				if ( $servicio_query->have_posts() ) :
				$i = 1;
				while ( $servicio_query->have_posts() ) : $servicio_query->the_post();
			?>
				<div class="[ col s12 sm6 m4 ][ margin-bottom ]">
					<div class="servicio-item">
						<div class="[ bg-image ][ width-100p height-250 ]" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">							
							<div class="triangulo-bottom-left absolute bottom-0 left-0  wow bounceInUp ]"></div>	
							<div class="triangulo-bottom-right absolute bottom-0 right-0 wow fadeInUp ]" data-wow-delay="0.2s"></div>
							<div class="absolute bottom-0 left-0 padding-top-bottom-small padding-right-left-small wow fadeIn ]" data-wow-delay="0.4s">
								<h4 class="[ color-light ]"><?php the_title(); ?></h4>
								<hr class="line-xsmall">
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
				<p>Falta agregar servicios</p>	
			<?php endif; ?>
		</div>
	</section>

	<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => 1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'banner-siguiente-servicios',
					//'operator' => 'NOT IN'
				),
			)
		);
		$seccion_query = new WP_Query( $seccion_args );
		if ( $seccion_query->have_posts() ) :
		$i = 1;
		while ( $seccion_query->have_posts() ) : $seccion_query->the_post();

		$custom_fields = get_post_custom();
		$post_id = get_the_ID();
		$url = get_post_meta( $post_id, 'seccion_url', true );
		$btn = get_post_meta( $post_id, 'seccion_btn', true );			
	?>
		<section class="[ relative ][ bg-image ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-dark-opacity-minor ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
				<?php the_content(); ?>
				<?php if( $url != "" ) { ?>
					<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]" href="<?php echo $url; ?>"><?php echo $btn; ?></a>
				<?php } ?>	
			</div>
		</section>	
	<?php 
		$i ++;
		endwhile;
		wp_reset_postdata();
		else:
	?>
		<p>Falta agregar información</p>	
	<?php endif; ?>

	<section id="section-paquetes" class=" container [ padding-top-bottom-section ]">

		<?php
			$seccion_args = array(
				'post_type' => 'seccion',
				'posts_per_page' => 1,
				'order'=> 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'posicion',
						'field'    => 'slug', //term_id, slug
						'terms'    => 'paquetes',
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

		<!-- carousel paquetes -->
		<?php include (TEMPLATEPATH . '/sections/paquetes.php'); ?>

		<div class="[ center ][ margin-top ]">
			<a class="link-contacto waves-effect waves-light btn" id="contacto" itemprop="actionOption">Cotiza tu proyecto</a>			
		</div>
		<?php
			$seccion_args = array(
				'post_type' => 'seccion',
				'posts_per_page' => 1,
				'order'=> 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'posicion',
						'field'    => 'slug', //term_id, slug
						'terms'    => 'paquetes2',
						//'operator' => 'NOT IN'
					),
				)
			);
			$seccion_query = new WP_Query( $seccion_args );
			if ( $seccion_query->have_posts() ) :
			$i = 1;
			while ( $seccion_query->have_posts() ) : $seccion_query->the_post();
		?>
			<div class="row text-center margin-top">
				<div class="col s12 l10 offset-l1 [ margin-bottom ]">
					<?php the_content(); ?>
				</div>
			</div>		
		<?php 
			$i ++;
			endwhile;
			wp_reset_postdata();
			endif; ?>

	</section>

	<?php
		$seccion_args = array(
			'post_type' => 'seccion',
			'posts_per_page' => 1,
			'order'=> 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'posicion',
					'field'    => 'slug', //term_id, slug
					'terms'    => 'banner-siguiente-paquetes',
					//'operator' => 'NOT IN'
				),
			)
		);
		$seccion_query = new WP_Query( $seccion_args );
		if ( $seccion_query->have_posts() ) :
		$i = 1;
		while ( $seccion_query->have_posts() ) : $seccion_query->the_post();

		$custom_fields = get_post_custom();
		$post_id = get_the_ID();
		$url = get_post_meta( $post_id, 'seccion_url', true );
		$btn = get_post_meta( $post_id, 'seccion_btn', true );			
	?>
		<section class="[ relative ][ bg-image ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-dark-opacity-minor ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
				<?php the_content(); ?>
				<?php if( $url != "" ) { ?>
					<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]" href="<?php echo $url; ?>"><?php echo $btn; ?></a>
				<?php } ?>	
			</div>
		</section>	
	<?php 
		$i ++;
		endwhile;
		wp_reset_postdata();
		else:
	?>
		<p>Falta agregar información</p>	
	<?php endif; ?>

	<section id="section-proyectos" class="bg-gray [ padding-top-bottom-large ]">
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
				<div class=" [ col s12 m10 xl8 offset-m1 offset-xl2 ]">
					<?php
						$proyecto_args = array(
							'post_type' => 'proyecto',
							'posts_per_page' => 2,
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
						<div class="col s12 sm6 m6  <?php if ($i == 3){ ?> hide-sm-and-down <?php } ?> [ margin-bottom ][ wow fadeIn ]">	<!-- m4 -->			
							<div class="[ container-proyect ] margin-bottom-xsmall">
								<img class="responsive-img materialboxed" <?php if ( wp_is_mobile() ){ ?> src="<?php the_post_thumbnail_url('medium'); ?>" <?php } else { ?> src="<?php the_post_thumbnail_url('full'); ?>" <?php } ?> alt="imagen del proyecto">
								<div class="[ opacity-proyect ][ wow fadeIn ]"></div>
							</div>						
							<!-- servicios del proyecto -->
							<?php echo custom_taxonomies_servicios(); ?>
							<?php if( $url != "" ) { ?>
								<div class="[ text-center ][ margin-top-small ] hide">
									<a class="waves-effect waves-light btn btn-small" href="<?php echo $url; ?>" target="_blank"><small>Ver sitio</small></a>	
								</div>							
							<?php } ?>
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
		</div>
	</section>

	<!-- Testimoniales -->
	<?php //include (TEMPLATEPATH . '/sections/testimoniales.php'); ?>

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
<?php get_footer() ?>