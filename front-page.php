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
			<div id="hero-section">
				<div class="hero-text center-something">
					<h1 class="text">Certified Life Coaching</h1>
					<h2 class="text">Metro Washington&nbsp;DC and Eastern&nbsp;Shore Maryland</h2>
				</div>
			</div> <!--end #hero-section -->
		<div class="container">
			<!-- Start teaser section -->
			<?php get_template_part( 'template-parts/content', 'teaser' ); ?>
			<!-- About Santa section -->
			<?php get_template_part( 'template-parts/content', 'about' ); ?>
			<!-- Services section -->
			<?php get_template_part( 'template-parts/content', 'services' ); ?>
		</div>




			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();