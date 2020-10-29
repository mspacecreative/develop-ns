<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<!--<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>-->

	</head>
	<body <?php body_class(); ?>>
		
		<!-- MOBILE NAV -->
		<?php get_template_part('templates/mobile-nav'); ?>
		<!-- / MOBILE NAV -->
		
		<!-- MOBILE NAV -->
		<?php get_template_part('templates/menu'); ?>
		<!-- / MOBILE NAV -->
		
		<!-- SOCIAL MEDIA BUTTONS -->
		<?php get_template_part('templates/social-media-buttons'); ?>
		<!-- / SOCIAL MEDIA BUTTONS -->
		
		<!-- BACKGROUND IMAGE ON MOBILE
		<div class="background-img"></div>
		 / BACKGROUND IMAGE ON MOBILE -->

		<?php get_template_part('templates/top-header'); ?>
		
		<!-- wrapper -->
		<div class="wrapper">
