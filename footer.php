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
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<p>EXHIBIT</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
				</div>
				<div class="col-md-3">
					<p>HISTORY</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-center' ) ); ?>
				</div>
				<div class="col-md-3">
					<p>RESOURCES</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<!-- End of footer.php -->
</html>
