<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MSpringer
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- Start of sidebar.php -->
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<!-- End of sidebar.php -->
