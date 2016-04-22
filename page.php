<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MSpringer
 */

get_header(); ?>

	<!-- Start of page.php -->
	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-md-9">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

						endwhile; // End of the loop.
						?>
						
					</main><!-- #main -->
				</div>
			</div>
		</div>
	</div><!-- #primary -->
	<!-- End of page.php -->
<?php
get_footer();
