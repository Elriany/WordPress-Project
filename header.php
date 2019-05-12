<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
	<!-- Modernizr JS -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body 
<?php body_class(); ?>>
	<!-- Loader -->
<?php
	$HeroImg = get_field('hero_image');
	$HeroTxt = get_field('hero_text');

 ?>
<div class="fh5co-loader"></div>
	<div class="fh5co-page">
	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight-home" data-section="home" style="background-image: url(<?php echo $HeroImg['url']; ?>);" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="col-md-6">
					<div class="js-fullheight-home fh5co-copy">
						<div class="js-fullheight-home fh5co-copy-inner">
							<h1><?php echo $HeroTxt; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Home</a>
						<a href="#" data-nav-section="about">About Us</a>
						<a href="#" data-nav-section="services">Services</a>
						<a href="#" data-nav-section="team">The Team</a>
						<a href="#" data-nav-section="contact">Get In Touch</a>
					</div>
				</div>
			</div>
		</div>
