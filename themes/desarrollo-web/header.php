<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Meta robots -->
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />

		<!-- Facebook, Twitter metas -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/">
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="210" />
		<meta property="og:image:height" content="110" />
		<meta property="fb:app_id" content="" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@" />

		<!-- Google+ -->
		<link rel="publisher" href="https://plus.google.com/+biscochito">

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Google font(s) -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500" rel="stylesheet">

		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/materialize.css" media="screen,projection" />

		<!-- Canonical URL -->
		<link rel="canonical" href="<?php echo site_url(); ?>" />

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Sitemap Google Verify -->
		<!--  https://www.google.com/webmasters/verification/home?hl=en&authuser=0 -->
		<meta name="google-site-verification" content="" />

		<!-- Noscript -->
		<noscript>Tu navegador no soporta JavaScript!</noscript>
		<?php wp_head(); ?>
</head>
<body>
	<header class="js-header">
		<nav>
			<div class="nav-wrapper [ container ]">
			<a href="<?php echo SITEURL ?>" class="brand-logo">Logo</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="[ nav-header ] right hide-on-small-only">
					<!-- <li>
						<p id="nosotros" href="<?php echo SITEURL ?>#nosotros" itemprop="actionOption">Nosotros</p>
					</li> -->
					<li>
						<?php if ( is_front_page() && is_home() ) {  ?>
							<p id="servicios" itemprop="actionOption">Servicios</p>
						<?php } else { ?>
							<a id="servicios" href="<?php echo SITEURL ?>#servicios" itemprop="actionOption">Servicios</a>
						<?php } ?>						
					</li>
					<li>
						<?php if ( is_front_page() && is_home() ) {  ?>
							<p id="paquetes" itemprop="actionOption">Paquetes</p>
						<?php } else { ?>
							<a id="paquetes" href="http://localhost:8888/desarrollo-web#paquetes" itemprop="actionOption">Paquetes</a>
						<?php } ?>

					</li>
					<li>
						<?php if ( is_front_page() && is_home() ) {  ?>
							<p id="beneficios" itemprop="actionOption">Beneficios</p>
						<?php } else { ?>
							<a id="beneficios" href="<?php echo SITEURL ?>#beneficios" itemprop="actionOption">Beneficios</a>
						<?php } ?>
					</li>
					<li>
						<?php if ( is_front_page() && is_home() ) {  ?>
							<p id="contacto" itemprop="actionOption">Contacto</p>
						<?php } else { ?>
							<a id="contacto" href="<?php echo SITEURL ?>#contacto" itemprop="actionOption">Contacto</a>
						<?php } ?>
					</li>
					<li class="hide">
						<?php if ( is_front_page() && is_home() ) {  ?>
							<p id="faqs" itemprop="actionOption">Faq´s</p>
						<?php } else { ?>
							<a id="faqs" href="<?php echo SITEURL ?>#faqs" itemprop="actionOption">Faq´s</a>
						<?php } ?>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<!-- <li><div id="nosotros" href="<?php echo SITEURL ?>#nosotros" itemprop="actionOption">Nosotros</p></li> -->
					<li>
						<p id="servicios" href="<?php echo SITEURL ?>#servicios" itemprop="actionOption">Servicios</p>
					</li>
					<li>
						<p id="paquetes" href="<?php echo SITEURL ?>#paquetes" itemprop="actionOption">Paquetes</p>
					</li>
					<li>
						<p id="beneficios" href="<?php echo SITEURL ?>#beneficios" itemprop="actionOption">Beneficios</p>
					</li>
					<li>
						<p id="contacto" href="<?php echo SITEURL ?>#contacto" itemprop="actionOption">Contacto</p>
					</li>
					<li class="hide">
						<p id="faqs" href="<?php echo SITEURL ?>#faqs" itemprop="actionOption">Faq´s</p>
					</li>
				</ul>
			</div>
		</nav>

	</header>
	<div class="main-body">

	<?php
		// $custom_menu = array(
		// 	'location'	=>	'top_menu',
		// );
		// wp_nav_menu($custom_menu);
	?>
