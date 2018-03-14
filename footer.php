<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AssistanceInAction
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-ankler container">
			<div class="row justify-content-md-center">
				<div class="col-sm-4 footer-content">
					<!-- <h5>Mission Statement</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p> -->
					<div id="footer-contact-info" class="footer-content">
						<h3>Get in Touch</h3>
						<!-- <div class="footer-contact-info"><button>Free Consultation</button></div> -->
						<a href="tel:1-847-555-5555">
							<div id="footer-phone" class="footer-contact-info">
							<i class="fas fa-phone fa-2x"></i>
							<h4>617-456-7890</h4>
							</div>
						</a>
						<a href="mailto:test@example.com">
							<div id="footer-email" class="footer-contact-info">
							<i class="fas fa-envelope fa-2x"></i>
							<h4>test@email.com</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-8 footer-content first-footer-content">
					<div class="col-sm-10 col-sm-offset-1">
						<?php echo do_shortcode("[ninja_form id=2]"); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info container-fluid">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'assistanceinaction' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'assistanceinaction' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'assistanceinaction' ), 'assistanceinaction', '<a href="http://creativeblazer.com/">Creative Blazer</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
