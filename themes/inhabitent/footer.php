<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="contact-info-container">
					<h3>Contact Info</h3>
					<p><i class="fas fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
					<p><i class="fas fa-phone-square"></i>778-456-7891</p>
					<i class="fab fa-facebook-square"></i>
					<i class="fab fa-twitter-square"></i>
					<i class="fab fa-google-plus-square"></i>
				</div>
				<div class="business-hours-container">
					<h3>Business Hours</h3>
					<p>Monday-Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
				</div>
				<div class="inhabitent-footer-logo">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-text.svg" alt="inhabitent camping supply co. logo">
				</div>
				<div class="copyright-section">
					<p>copyright &copy; 2019 inhabitent</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
