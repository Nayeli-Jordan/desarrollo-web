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
	?>
		<section id="section-intro" class="[ relative ][ bg-image ][ margin-top-50 ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-light-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
				<?php the_content(); ?>
				<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]" href="">button</a>
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
					<div class="[ bg-image ][ width-100p height-200 ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
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
	?>
		<section class="[ relative ][ bg-image ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-light-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
				<?php the_content(); ?>
				<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]">button</a>
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
			?>
				<div class="carousel-item <?php if ($i == 1){ ?> active <?php } ?>">
					<div class="[ card ]">
						<div class="triangulo-top-right absolute right-0"></div>			
						<div class="triangulo-top-left absolute left-0"></div>
						<div class="[ card-content ][ padding-top-bottom-xlarge ]">
							<h3 class="[ color-primary ][ text-center ]"><?php the_title(); ?></h3>
							<hr class="line-difumined-small">
							<div class="[ info-paquete ]">
								<?php the_content(); ?>
							</div>
							<hr class="line-difumined-large">
							<p class="[ text-center ][ color-primary-dark ][ strong ]">Desde $000.00 MXN</p>
							<hr class="line-difumined-large">
							<ul class="[ points-list ]">
								<li>Lorem ipsum dolor sit amet </li>
								<li>Lorem ipsum ipsum dolor sit amet lorem ipsum sit amet</li>
								<li>Lorem ipsum dolor sit amet lorem ipsum sit amet</li>
							</ul>
							<a class="waves-effect waves-light btn btn-small [ block ][ center ]">button</a>
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
				<p>Falta agregar paquetes</p>	
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
					'terms'    => 'banner-siguiente-paquetes',
					//'operator' => 'NOT IN'
				),
			)
		);
		$seccion_query = new WP_Query( $seccion_args );
		if ( $seccion_query->have_posts() ) :
		$i = 1;
		while ( $seccion_query->have_posts() ) : $seccion_query->the_post();
	?>
		<section class="[ relative ][ bg-image ]" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
			<div class="[ bg-light-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
			<div class="[ container ][ relative ][ padding-top-bottom-section ][ frase ][ text-center ]">
				<?php the_content(); ?>
				<a class="waves-effect waves-light btn btn-light [ center ][ margin-top-xlarge ]">button</a>
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
			?>
				<div class="col s12 sm6 m4 l3 [ text-center ][ margin-bottom ][ wow jello ]">
					<i class="material-icons">expand_less</i>
					<h4 class="margin-bottom-xsmall"><?php the_title(); ?></h4>
					<hr class="line-difumined-large">
					<small><?php the_content(); ?></small>
				</div>
			<?php 
				if ($i % 4 == 1) //to do revizar si funcionó
				$i ++;				
				endwhile;
				wp_reset_postdata();
				else:
			?>
				<p>Falta agregar beneficios</p>	
			<?php endif; ?>

<i class="material-icons">brush</i>
<i class="material-icons">color_lens</i>
<i class="material-icons">computer</i>
<i class="material-icons">developer_mode</i>
<i class="material-icons">devices</i>
<i class="material-icons">domain</i>
<i class="material-icons">equalizer</i>
<i class="material-icons">favorite</i>
<i class="material-icons">favorite_border</i>
<i class="material-icons">gps_not_fixed</i>
<i class="material-icons">grade</i>
<i class="material-icons">group</i>
<i class="material-icons">highlight</i>
<i class="material-icons">home</i>
<i class="material-icons">important_devices</i>
<i class="material-icons">insert_emoticon</i>
<i class="material-icons">laptop_mac</i>
<i class="material-icons">local_atm</i>
<i class="material-icons">local_grocery_store</i>
<i class="material-icons">location_city</i>
<i class="material-icons">location_on</i>
<i class="material-icons">location_searching</i>
<i class="material-icons">mood</i>
<i class="material-icons">my_location</i>
<i class="material-icons">public</i>
		</div>
	</section>
	<section id="section-contacto" class="[ relative ][ bg-image ]" style="background-image: url(<?php echo THEMEPATH ?>images/contacto.png);">
		<div class="[ bg-dark-opacity ][ absolute top-0 bottom-0 left-0 right-0 ]"></div>
		<div class="[ container ][ relative ][ color-light ][ padding-top-bottom-section ]">
			<h2 class="[ text-center ]">Contacto</h2>
			<div class="[ row ]">
				<div class="[ col s12 m9 ]">
					<p>Gracias por ponerte en contacto!</p>
					<p>Hay campos opcionales, sin embargo, miestras más completa este tu información nos será más sensillo ayudarte a cotizar tu proyecto.</p>
					<div class="[ row ]">
						<?php echo do_shortcode('[contact-form-7 id="4" title="Contacto"]'); ?>
					</div>					
				</div>
				<div class="[ col s12 m3 ]">
					<p>Ciudad de México</p>
					<p>Horario de asistencia<br/>10:00 a 18:00 hrs.</p>
					<p>tel. 55 55 55 55</p>
					<p>cel. 55 55 55 55 55</p>
					<p>correo@email.com</p>
				</div>
			</div>			
		</div>
	</section>
<?php get_footer() ?>