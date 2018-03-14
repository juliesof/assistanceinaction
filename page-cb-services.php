<?php
/**
 * Template Name: services
 *
 */

get_header(); ?>
	<!-- get  featured image and display as header -->
	<div id="service-header-<?php the_ID(); ?>" class="service-header-image">
		<?php the_post_thumbnail( 'full' ); ?>	
	</div>
	<div id="primary" class=" container content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'service-page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
