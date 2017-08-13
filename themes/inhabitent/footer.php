<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container-max-width site-info">
					<!--<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>-->
					<div class="footer-contact-info">
						<h4>Contact Info</h4>
						<p><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> info@inhabitent.com</p>
						<p><i class="fa fa-phone fa-fw" aria-hidden="true"></i> 778-456-7891</p>
						<p>
							<span><i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i></span>
							<span><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i></span>
							<span><i class="fa fa-google-plus-square fa-fw" aria-hidden="true"></i></span>
						</p>
					</div>
					<div class="footer-business-hour">
						<h4>Business Hours</h4>
						<p><span class="text-strong">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="text-strong">Saturday:</span> 10am to 2pm</p>
						<p><span class="text-strong">Sunday:</span> Closed</p>
					</div>
					<div class="footer-logo">
						<a href="#"><img src="./wp-content/themes/inhabitent/images/inhabitent-logo-text.svg" alt="Inhabitent logo"/></a>
					</div>
				</div><!-- .site-info -->
				<div class="footer-copyright">
					<p>Copyright &#169; 2017 Inhabitent</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
