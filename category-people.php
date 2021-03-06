<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MSpringer
 */

get_header(); ?>
	<!-- Start of category-people.php -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php
		$all_letters = array();
		$all_titles = array();
		$all_links = array();
		$counter = 0;
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">People</h1>
			</header><!-- .page-header -->

			<?php

			query_posts( array ( 'category_name' => 'people', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title' ) );
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				$title = get_the_title();
				$link = get_the_permalink();
				$letter = substr($title, 0, 1);
				$all_letters[$counter] = $letter;
				$all_titles[$counter] = $title;
				$all_links[$counter] = $link;
				$counter += 1;

			endwhile; 

			$used_letters = array();
			for ($i = 0; $i < count($all_titles); $i += 1) {
				# Only add new letters to list
				if(!in_array($all_letters[$i], $used_letters)) {
					if($i != 0) {
						echo '<hr />';
					}
					echo '<h3>' . $all_letters[$i] . '</h3>';
					array_push($used_letters, $all_letters[$i]);
				}
				# Add every post link
				echo '<a class="aggregated-link" href="' . $all_links[$i] . '" title="' . $all_titles[$i] . '">' . $all_titles[$i] . '</a><br />';
			}
			
			wp_reset_query();
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- End of category-people.php -->
<?php
get_sidebar();
get_footer();
