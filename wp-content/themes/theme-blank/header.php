<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu|Vollkorn" rel="stylesheet">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<main>
			<header>
				<div id="log" class="container-fluid">
					<div class="container">
						<a href="#">Nous contacter |</a>
						<a href="#">S'identifier |</a>
						<a href="#">Créer un compte</a>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?> /src/img/cart-white.png" alt="cart">Mon panier ()</a>
					</div>
				</div>
				<nav>
					<div id="contentNav" class="container-fluid">
						<div class="container navLien">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?> /src/img/logo-elixir.png" alt="logo site"></a>
								<a href="#">Promos flash</a>
								<a href="#">Marques</a>
								<a href="#">Hommes</a>
								<a href="#">Femmes</a>
								<a href="#">Accessoires</a>
						</div>
					</div>
				</nav>
				<div id="contentHeaderPics" class="container-fluid">
					<div id="headerPics" class="container ">
						<img src=" <?php bloginfo('template_directory'); ?>/src/img/header.jpg" alt="headers pics">
					</div>
				</div>


			</header>
