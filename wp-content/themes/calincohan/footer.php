<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="content">
					<div class="line"></div>
					<h2>Contact Me</h2>
					<h3>Let's talk about your project!</h3>
				</div>
				<div class="custom-form">
					<div class="row">
						<div class="col-sm-6">
							<label>Your Name</label>
							<input type="text" name="" placeholder="">
						</div>
						<div class="col-sm-6">
							<label>Your Email</label>
							<input type="text" name="" placeholder="">
						</div>
						<div class="col-sm-6">
							<label>Company</label>
							<input type="text" name="" placeholder="">
						</div>
						<div class="col-sm-6">
							<label>Subject</label>
							<input type="text" name="" placeholder="">
						</div>
						<div class="col-sm-12">
							<label>Your Message</label>
							<input type="text" name="" placeholder="">
							<div class="custom-submit">
								<button>Get in touch</button>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-information">
					<div class="row">
						<div class="col-sm-3">
							&copy;
						</div>
						<div class="col-sm-3">
							<h5>Contact Information</h5>
							<div>Contact@CalinCohan.com</div>
							<div>Penticton, BC, Canada</div>
							<div>( 705 ) - 725 - 6679</div>
						</div>
						<div class="col-sm-3">
							<h5>Important Links</h5>
							<div>About Calin Cohan</div>
							<div>Projects/Portfolio</div>
							<div>Contact</div>
							
						</div>
						<div class="col-sm-3">
							<h5>Social Media</h5>
							<div class="social-icons">
								<span>&#xe0aa;</span>
								<span>&#xe0ad;</span>
								<span>&#xe0b4;</span>
								<span>&#xe0ab;</span>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript for bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
