<?php 
	get_header();
	//global $post;
	//$post = $wp_query->post;

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

	 while ( have_posts() ) : the_post(); 
?>
	<section class="[ relative ][ margin-top-50 ]">
		<div class="triangulo-large-top-right absolute right-0 [ wow bounceInRight ]" data-wow-delay="0.3s"></div>		
		<div class="triangulo-large-top-left absolute left-0 z-index-1 [ wow bounceInLeft ]"  data-wow-delay="0.1s"></div>
		<div class="[ container ][ padding-top-bottom-section ][ text-center ][ relative ]">
			<h1 class="[ color-primary ]"><?php the_title(); ?></h1>			
		</div>
		<div class="triangulo-large-bottom-right absolute right-0 bottom-0 z-index-1 [ wow bounceInRight ]"  data-wow-delay="0.1s"></div>
		<div class="triangulo-large-bottom-left absolute left-0 bottom-0 [ wow bounceInLeft ]"></div>
	</section>
	<section class="margin-top-xlarge margin-bottom [ container ]">
		<div class="row [ margin-bottom ]">
			<div class="col s12 m10 offset-m1 l8 offset-l2 [ margin-bottom ]">
				<?php the_content(); ?>				
			</div>
			<div class="col s6 offset-s3 l4 offset-l4">
				<hr class="line-difumined-small">
			</div>
			<?php if( $precio != "" ) { ?>
				<div class="col s12 [ margin-top-bottom ]">
					<p class="[ text-center ][ color-primary-dark ][ strong ][ xlarge ][ font-alegreya ]">Desde <?php echo $precio; ?> MXN</p>
				</div>	
			<?php } ?>	
			<div class="col s6 offset-s3 l4 offset-l4">
				<hr class="line-difumined-small">
			</div>
		</div>
		<div class="[ row ]">
			<h3>El paquete incluye:</h3>
			<ul class="[ points-list ][ no-margin-bottom ]">
				<?php if( $contenido1 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido1; ?></li>
				<?php } ?>
				<?php if( $contenido2 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido2; ?></li>
				<?php } ?>
				<?php if( $contenido3 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido3; ?></li>
				<?php } ?>
				<div class="clearfix-medium"></div>
				<?php if( $contenido4 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido4; ?></li>
				<?php } ?>
				<?php if( $contenido5 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido5; ?></li>
				<?php } ?>
				<?php if( $contenido6 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido6; ?></li>
				<?php } ?>
				<div class="clearfix-medium"></div>
				<?php if( $contenido7 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido7; ?></li>
				<?php } ?>
				<?php if( $contenido8 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido8; ?></li>
				<?php } ?>
				<?php if( $contenido9 != "" ) { ?>
					<li class="col s6 m4 [ margin-bottom-small ]"><?php echo $contenido9; ?></li>
				<?php } ?>
			</ul>
		</div>
		<div class="[ text-center ]">
			<a class="waves-effect waves-light btn btn-small [ block ][ center ] hide" href="<?php the_permalink(); ?>">Ver más</a>
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
