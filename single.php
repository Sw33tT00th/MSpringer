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
		<div class="container">
			<div class="row">
				<div id="sidebar">
					<?php get_sidebar(); ?>
				</div>
				<button class="btn btn-default hidden-md hidden-lg hidden-xl" id="sidebar-button">>></button>
				<div class="col-md-9">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

						endwhile; // End of the loop.
						?>
					</main><!-- #main -->
				</div>
			</div>
		</div>
	</div><!-- #primary -->
	<!-- End of single.php -->
<?php
get_footer();
