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
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500" rel="stylesheet">

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
			<a href="#!" class="brand-logo">Logo</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="[ nav-header ] right hide-on-small-only">
					<!-- <li><a id="nosotros" href="<?php echo SITEURL ?>#nosotros">Nosotros</a></li> -->
					<li><a id="servicios" href="<?php echo SITEURL ?>#servicios">Servicios</a></li>
					<li><a id="paquetes" href="<?php echo SITEURL ?>#paquetes">Paquetes</a></li>
					<li><a id="beneficios" href="<?php echo SITEURL ?>#beneficios">Beneficios</a></li>
					<li><a id="contacto" href="<?php echo SITEURL ?>#contacto">Contacto</a></li>
					<li><a id="faqs" href="<?php echo SITEURL ?>#faqs">Faq´s</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<!-- <li><a id="nosotros" href="<?php echo SITEURL ?>#nosotros">Nosotros</a></li> -->
					<li><a id="servicios" href="<?php echo SITEURL ?>#servicios">Servicios</a></li>
					<li><a id="paquetes" href="<?php echo SITEURL ?>#paquetes">Paquetes</a></li>
					<li><a id="beneficios" href="<?php echo SITEURL ?>#beneficios">Beneficios</a></li>
					<li><a id="contacto" href="<?php echo SITEURL ?>#contacto">Contacto</a></li>
					<li><a id="faqs" href="<?php echo SITEURL ?>#faqs">Faq´s</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="main-body">
