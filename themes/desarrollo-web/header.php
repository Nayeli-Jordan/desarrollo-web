<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="desarrollo web, diseño web, tienda en linea, registro de dominio, empresa de desarrollo web, página de negocio, publicidad ">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Meta robots -->
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>images/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>images/favicon/favicon-16x16.png" sizes="16x16" />

		<!-- Facebook, Twitter metas -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/identidad/gatchweb.png">
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/identidad/gatchweb.png" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="210" />
		<meta property="og:image:height" content="110" />
		<meta property="fb:app_id" content="822087657983560" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@" />

		<!-- Google+ -->
		<link rel="publisher" href="https://plus.google.com/+gatchweb">

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Google font(s) -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500" rel="stylesheet">

		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/materialize.css" media="screen,projection, print" />

		<!-- Canonical URL -->
		<link rel="canonical" href="<?php echo site_url(); ?>" />

		<!-- Sitemap Google Verify -->
		<!--  https://www.google.com/webmasters/verification/home?hl=en&authuser=0 -->
		<meta name="google-site-verification" content="hi0DvztBmCohhSXHn48BDJVCcoWjGFcn4bLIGSp05iY" />

		<!-- Noscript -->
		<noscript>Tu navegador no soporta JavaScript!</noscript>
		<?php wp_head(); ?>
</head>
<body>
	<!-- share button fb -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId=822087657983560&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<header class="js-header">
		<h1 class="hide"><?php bloginfo('name'); ?></h1>
		<nav>
			<div class="nav-wrapper [ container ]">
				<a href="<?php echo SITEURL ?>" class="brand-logo">
					<img class="responsive-img logo-initial" src="<?php echo THEMEPATH ?>images/identidad/logo-gris-scale.png" alt="logo del sitio">
					<img class="responsive-img logo-scroll hide" src="<?php echo THEMEPATH ?>images/identidad/logo-fondo.png" alt="logo del sitio">
				</a>
				<!-- menu-main-menu (nombre menú wp) en lugar de mobile-demo para poder activar menú -->
				<a href="#" data-activates="menu-main-menu" class="button-collapse"><i class="material-icons">menu</i></a>
				<?php 
				/**
				** Muestra los items pero sin clases
				**/
				// $custom_menu = array(
				// 	'location'	=>	'top_menu',
				// );
				// wp_nav_menu($custom_menu);

				wp_nav_menu( array(
				    'menu'   => 'Something custom walker',
				    'walker' => new WPDocs_Walker_Nav_Menu()
				) );
				 ?>
			</div>
		</nav>

	</header>
	<div id="section-intro" class="main-body">
