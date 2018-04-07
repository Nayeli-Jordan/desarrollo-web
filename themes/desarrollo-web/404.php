<?php get_header() ?>

	<section class=" [ text-center ][ padding-top-75 ][ padding-bottom-xlarge ][ margin-bottom-xlarge ] bg-gray-light"> 
		<div class="container">
			<h1 class="hide">GatchWeb</h1>
			<a href="<?php echo SITEURL ?>">
				<img class="responsive-img width-150 margin-bottom" src="<?php echo THEMEPATH ?>images/identidad/logo-gris.png" alt="logo del sitio">
			</a>
			<h2 class="[ color-secondary-dark ]">Error 404!</h2>
			<p class="large [ margin-bottom-xlarge ]">Lo sentimos, la página que estás buscando no existe.</p>
			<a class="link-contacto waves-effect waves-light btn " href="<?php echo SITEURL ?>" itemprop="actionOption">Volver a GatchWeb</a>		
		</div>

	</section>
	<section class="container [ margin-bottom-xlarge ]">
		<h2 class="[ text-center ][ color-primary ]">Conoce nuestros paquetes</h2>
		<!-- carousel paquetes -->
		<?php include (TEMPLATEPATH . '/sections/paquetes.php'); ?>
	</section>

<?php get_footer() ?>