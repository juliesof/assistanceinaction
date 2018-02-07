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
		<div class="site-ankler container-fluid">
				<div class="row justify-content-lg-center">
					<div class="col-lg-4 footer-content first-footer-content">
						<h5>Contact Form</h5>
						<?php echo do_shortcode("[ninja_form id=1]"); ?>
					</div>
					<div class="col-lg-3 footer-content">
						<h5>Mission Statement</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					</div>
					<div id="footer-contact-info" class="col-lg-3 footer-content">
						<h5>Get in Touch</h5>
							<div class="footer-contact-info"><button>Free Consultation</button></div>
							<div id="footer-phone" class="footer-contact-info"><i class="fas fa-phone"></i><a href="tel:1-847-555-5555">617-456-7890</a>
							</div>
							<div id="footer-email" class="footer-contact-info"><i class="fas fa-envelope-open"></i><a href="mailto:test@example.com"> test@email.com
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
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'assistanceinaction' ), 'assistanceinaction', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
