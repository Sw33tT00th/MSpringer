<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MSpringer
 */

?>
	<!-- Start of footer.php -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container hidden-sm">
			<div class="row">
				<div class="col-md-3 col-xs-12">
					<p>EXHIBIT</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
				</div>
				<div class="col-md-3 col-xs-12">
					<p>HISTORY</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-center' ) ); ?>
				</div>
				<div class="col-md-3 col-xs-12">
					<p>RESOURCES</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
				</div>
				<div class="col-md-3 col-xs-12" id="contact-info">
					<ul>
						<li><strong>Contact Information</strong></li>
						<li>&nbsp;</li>
						<li><strong>Bjorn Krondorfer</strong></li>
						<li>Director</li>
						<li>Phone: <span class="reverse-text">9205-325-829</span></li>
						<li>Email: <span class="reverse-text">ude.uan@refrodnork.nrojb</span></li>
						<li>&nbsp;</li>
						<li><strong>Melissa Cohen</strong></li>
						<li>Program Coordinator</li>
						<li>Phone: <span class="reverse-text">4642-325-829</span></li>
						<li>Email: <span class="reverse-text">ude.uan@nehoc.assilem</span></li>
						<li><a href="https://www.facebook.com/MSIatNAU" target="_blank" title="Martin Springer Institute Facebook Page"><img src="/wp-content/themes/MSpringer/img/facebook.png" height="30" width="30" /></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container hidden-md hidden-lg hidden-xs">
			<div class="row">
				<div class="col-sm-6">
					<p>EXHIBIT</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
				</div>
				<div class="col-sm-6">
					<p>HISTORY</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-center' ) ); ?>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-sm-6">
					<p>RESOURCES</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
				</div>
				<div class="col-sm-6" id="contact-info">
					<ul>
						<li><strong>Contact Information</strong></li>
						<li>&nbsp;</li>
						<li><strong>Bjorn Krondorfer</strong></li>
						<li>Director</li>
						<li>Phone: <span class="reverse-text">9205-325-829</span></li>
						<li>Email: <span class="reverse-text">ude.uan@refrodnork.nrojb</span></li>
						<li>&nbsp;</li>
						<li><strong>Melissa Cohen</strong></li>
						<li>Program Coordinator</li>
						<li>Phone: <span class="reverse-text">4642-325-829</span></li>
						<li>Email: <span class="reverse-text">ude.uan@nehoc.assilem</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<!-- End of footer.php -->
</html>
