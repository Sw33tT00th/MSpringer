<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MSpringer
 */

get_header(); ?>
	<!-- Start of single.php -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- End of single.php -->
<?php
get_sidebar();
get_footer();
