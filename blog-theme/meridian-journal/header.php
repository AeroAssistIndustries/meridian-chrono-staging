<?php if ( ! defined( 'ABSPATH' ) ) { exit; } $s = mj_site(); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0b0b0b">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com">
<link rel="icon" href="<?php echo esc_url( $s ); ?>/brand/app-icon-180.png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip" href="#main">Skip to content</a>
<div class="util">Want to buy or sell a watch? <a href="<?php echo esc_url( $s ); ?>/contact/">Talk to us</a></div>
<header class="hd"><div class="wrap">
	<a class="logo" href="<?php echo esc_url( $s ); ?>/" aria-label="Meridian Chrono Group home"><img src="<?php echo esc_url( $s ); ?>/brand/meridian-logo-deep-gold.svg" alt="Meridian Chrono Group" width="97" height="46"></a>
	<button type="button" id="mt" aria-expanded="false" aria-controls="nav">Menu</button>
	<nav class="nav" id="nav" aria-label="Main">
		<a href="<?php echo esc_url( $s ); ?>/shop/">Buy</a>
		<a href="<?php echo esc_url( $s ); ?>/sell/">Sell</a>
		<a href="<?php echo esc_url( $s ); ?>/source/">Source</a>
		<a class="on" href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a>
		<a href="<?php echo esc_url( $s ); ?>/about/">About</a>
		<a class="btn" href="<?php echo esc_url( $s ); ?>/contact/">Talk to a specialist</a>
	</nav>
</div></header>
<main id="main">
