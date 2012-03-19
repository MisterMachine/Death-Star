<?php
/**
 * @package WordPress
 * @subpackage 
 */
?>

<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7 ]>	<html <?php language_attributes(); ?> class="no-js ie7" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8 ]>	<html <?php language_attributes(); ?> class="no-js ie8" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9 ]>	<html <?php language_attributes(); ?> class="no-js ie9" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- open graph -->
	<meta property="og:title" content="<?php wp_title(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php echo get_bloginfo('url') . $_SERVER['REQUEST_URI']; ?>"/>
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="<?php esc_attr(get_bloginfo('name')); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="fb:app_id" content="<?php esc_attr(FB_APP_ID); ?>" />
	<!-- end open graph -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div class="page">
	
		<div class="toolbox">
			<div class="tools container_12">
				<div class="account prefix_8 grid_4">
					<ul class="right">
						<li><a href="#">Register</a></li>
						<li><a href="#">Sign In</a></li>
					</ul>
				</div>
			</div>
		</div>
	
		<header>
			<div class="hgroup container_12">
				<div class="logo grid_4">
					<strong><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></strong>
				</div>
			
				<nav class="grid_8">
					<?php wp_nav_menu( array('menu' => 'Main Menu', 'container' => '' ) ); ?>
				</nav>
			</div>
		</header>
	
	<!-- grid reset -->		
	<div class="messages">
		<section class="container_12">
			<p>This is a message from God.</p>
		</section>
	</div>