<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AssistanceInAction
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); ?>
			<!-- Start hero section -->
			<?php get_template_part( 'template-parts/content', 'hero' ); ?>
			<!-- Start teaser section -->
			<?php get_template_part( 'template-parts/content', 'teaser' ); ?>
			<!-- About Santa section -->
			<?php get_template_part( 'template-parts/content', 'about' ); ?>
			<!-- Services section -->
			<?php get_template_part( 'template-parts/content', 'services' ); ?>
			<!-- Testimonials section -->
			<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>
			<!-- Call to action bar -->
			<?php get_template_part( 'template-parts/content', 'call-to-action-bar' ); ?>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();