<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<?php wp_body_open(); ?>

<div id="site-wrapper" class="d-flex flex-column min-vh-100">

	<header id="header-wrapper" class="sticky-top bg-dark">

		<?php

		// get_template_part('templates/header/header', 'topbar');
		get_template_part( 'templates/header/header', 'simple' );

		?>

	</header> <!-- #header-wrapper -->

	<div id="page-wrapper" class="flex-grow-1">
