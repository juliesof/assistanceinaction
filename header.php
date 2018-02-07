<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AssistanceInAction
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- google font links -->
	<link href="https://fonts.googleapis.com/css?family=Laila|Alegreya+Sans:100,300,400|Cinzel+Decorative" rel="stylesheet">

	<!-- Include Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- include font awesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'assistanceinaction' ); ?></a>

	<div id="contact-info-header" >
		<div id="header-phone" class="contact-info"><i class="fas fa-phone"></i><a href="tel:1-847-555-5555">
			617-456-7890</a>
		</div>
		<div id="header-email" class="contact-info"><i class="fas fa-envelope-open"></i><a href="mailto:test@example.com"> test@email.com
		</div>
	</div>
	<header id="masthead" class="site-header container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
		        		<span class="icon-bar"></span>
		        		<span class="icon-bar"></span>
		        		<span class="icon-bar"></span>
					</button>
					<!-- Display of company name and logo -->
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				<!-- Collect the nav links, forms, and other content for toggling -->
   			 <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   			 	<ul class="nav navbar-nav"> -->
			     <?php
							wp_nav_menu( array(
						    'theme_location'    => 'menu-1',
						    'menu' 							=> 'primary',
						    'menu_id'           => 'primary-menu',
						    'depth'             => 2,
						    'container'         => false,
						    'container_class'   => 'collapse navbar-collapse',
						    'container_id'      => 'bs-example-navbar-collapse-1',
						    'menu_class'        => 'nav',
						    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						    'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>
					
				</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
