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
		<section id="section-intro" class="[ relative ][ bg-image ][ margin-top-50 ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-light-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
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
			<div class="row">
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

		<div class="carousel [ servicios ]">

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
				<div class="carousel-item <?php if ($i == 1){ ?> active <?php } ?>">
					<div class="[ bg-image ][ width-100p height-250 ]" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
						<div class="triangulo-bottom-right absolute bottom-0 right-0"></div><div class="triangulo-bottom-left absolute bottom-0 left-0"></div>	
						<div class="absolute bottom-0 left-0 padding-top-bottom-small padding-right-left-small">
							<h4 class="[ color-light ]"><?php the_title(); ?></h4>
							<hr class="line-xsmall">
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
				<div class="[ col s12 m4 xl3 ][ margin-bottom ]">
					<div class="servicio-item">
						<div class="[ bg-image ][ width-100p height-250 ]" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
							<div class="triangulo-bottom-right absolute bottom-0 right-0"></div><div class="triangulo-bottom-left absolute bottom-0 left-0"></div>	
							<div class="absolute bottom-0 left-0 padding-top-bottom-small padding-right-left-small">
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
			<div class="[ bg-light-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
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
			<div class="row">
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

		<div class="carousel [ paquetes ]">

			<?php
				$paquete_args = array(
					'post_type' => 'paquete',
					'posts_per_page' => -1,
					'order'=> 'ASC',
				);
				$paquete_query = new WP_Query( $paquete_args );
				$i = 1;
				if ( $paquete_query->have_posts() ) :				
				while ( $paquete_query->have_posts() ) : $paquete_query->the_post();

				$custom_fields = get_post_custom();
				$post_id = get_the_ID();
				$precio = get_post_meta( $post_id, 'paquete_precio', true );
				$contenido1 = get_post_meta( $post_id, 'paquete_contenido1', true );
				$contenido2 = get_post_meta( $post_id, 'paquete_contenido2', true );
				$contenido3 = get_post_meta( $post_id, 'paquete_contenido3', true );
				$contenido4 = get_post_meta( $post_id, 'paquete_contenido4', true );
				$contenido5 = get_post_meta( $post_id, 'paquete_contenido5', true );
				$contenido6 = get_post_meta( $post_id, 'paquete_contenido6', true );
				$contenido7 = get_post_meta( $post_id, 'paquete_contenido7', true );
				$contenido8 = get_post_meta( $post_id, 'paquete_contenido8', true );
				$contenido9 = get_post_meta( $post_id, 'paquete_contenido9', true );
			?>
				<div class="carousel-item <?php if ($i == 1){ ?> active <?php } ?>">
					<div class="[ card ]">
						<div class="[ item-locked ]"></div>
						<div class="triangulo-top-right absolute right-0 [ wow bounceInDown ]" data-wow-delay="0.3s"></div>		
						<div class="triangulo-top-left absolute left-0 [ wow bounceInDown ]"></div>
						<div class="[ card-content ][ padding-top-bottom-xlarge ]">
							<a href="<?php the_permalink(); ?>">
								<h3 class="[ color-primary ][ text-center ]"><?php the_title(); ?></h3>
							</a>							
							<hr class="line-difumined-small">
							<div class="[ info-paquete ]">
								<?php the_excerpt(); ?>
							</div>
							<hr class="line-difumined-large">
							<p class="[ text-center ][ color-primary-dark ][ strong ]">	
								<?php if( $precio != "" ) { ?>
									Desde <?php echo $precio; ?> MXN
								<?php } else { ?>	
									<span class="link-contacto" id="contacto">Cóntactanos</span>
								<?php } ?>								
							</p>	
							<hr class="line-difumined-large">
							<ul class="[ points-list ]">
								<?php if( $contenido1 != "" ) { ?>
									<li><?php echo $contenido1; ?></li>
								<?php } ?>
								<?php if( $contenido2 != "" ) { ?>
									<li><?php echo $contenido2; ?></li>
								<?php } ?>
								<?php if( $contenido3 != "" ) { ?>
									<li><?php echo $contenido3; ?></li>
								<?php } ?>
								<?php if( $contenido4 != "" ) { ?>
									<li><?php echo $contenido4; ?></li>
								<?php } ?>
								<?php if( $contenido5 != "" ) { ?>
									<li><?php echo $contenido5; ?></li>
								<?php } ?>
								<?php if( $contenido6 != "" ) { ?>
									<li><?php echo $contenido6; ?></li>
								<?php } ?>
								<?php if( $contenido7 != "" ) { ?>
									<li><?php echo $contenido7; ?></li>
								<?php } ?>
								<?php if( $contenido8 != "" ) { ?>
									<li><?php echo $contenido8; ?></li>
								<?php } ?>
								<?php if( $contenido9 != "" ) { ?>
									<li><?php echo $contenido9; ?></li>
								<?php } ?>
							</ul>
							<a class="waves-effect waves-light btn btn-small [ block ][ center ]" href="<?php the_permalink(); ?>">Ver más</a>
						</div>
						<div class="triangulo-bottom-right absolute right-0 bottom-0 [ wow bounceInUp ]"></div>
					</div>
				</div>
			<?php
				$i ++;				
				endwhile;
				wp_reset_postdata();
				else:
			?>
				<p>Falta agregar paquetes</p>	
			<?php endif; ?>		

		</div>
		<div class="[ center ]">
			<a class="link-contacto waves-effect waves-light btn" id="contacto" itemprop="actionOption">Contáctanos</a>			
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
			<div class="[ bg-light-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
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
			<div class="row">
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
				<div class="col s12 sm6 m4 l3 [ text-center ][ margin-bottom ][ wow bounceInRight ]">					
					<?php if( $icon != "" ) { ?>
						<i class="material-icons"><?php echo $icon; ?></i>
					<?php } else { ?>	
						<i class="material-icons">grade</i>
					<?php } ?>	
					<h4 class="margin-bottom-xsmall"><?php the_title(); ?></h4>
					<hr class="line-difumined-large">
					<small><?php the_content(); ?></small>
				</div>
			<?php if ($i % 4 == 1){ ?>

			<?php } ?>
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