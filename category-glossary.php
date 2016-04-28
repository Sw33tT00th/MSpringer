<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MSpringer
 */

get_header(); ?>
	<!-- Start of category-glossary.php -->
	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div id="sidebar">
					<?php get_sidebar(); ?>
				</div>
				<button class="btn btn-default hidden-md hidden-lg hidden-xl" id="sidebar-button"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
				<div class="col-md-9">
					<main id="main" class="site-main" role="main">

					<?php
					$all_letters = array();
					$all_titles = array();
					$all_links = array();
					$counter = 0;
					if ( have_posts() ) : ?>


						<header class="page-header">
							<h1 class="page-title">Glossary</h1>
						</header><!-- .page-header -->
							
							<?php

							query_posts( array ( 'category_name' => 'glossary', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title' ) );
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

							$alphabet = array('A', 'a', 'B', 'b', 'C', 'c', 'D', 'd', 'E', 'e', 'F', 'f', 'G', 'g', 'H', 'h', 'I', 'i', 'J', 'j', 'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n', 'O', 'o', 'P', 'p', 'Q', 'q', 'R', 'r', 'S', 's', 'T', 't', 'U', 'u', 'V', 'v', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'z');

							echo '<p style="text-align:center;">';

							for ($i = 0; $i < count($alphabet); $i += 2) {
								if(in_array($alphabet[$i], $all_letters) || in_array($alphabet[$i + 1], $all_letters)) {
									echo '<a href="#' . $alphabet[$i] . '" class="glossary-letter-link">' . $alphabet[$i] . '</a>';
								} else {
									echo '<a href="javascript:void(0);" class="inactive glossary-letter-link">' . $alphabet[$i] . '</a>';
								}

								if($alphabet[$i] != 'Z') {
									echo '<span style="font-size:18px;"> | </span>';
								}
							}
							echo '</p>';
							?>
							<div class="col-md-8">
							<?php
							$used_letters = array();
							for ($i = 0; $i < count($all_titles); $i += 1) {
								# Only add new letters to list
								if(!in_array($all_letters[$i], $used_letters)) {
									echo '<a id="' . $all_letters[$i] . '" href="javascript:void(0);"></a><h3 class="glossary-letters">' . $all_letters[$i] . '</h3>';
									array_push($used_letters, $all_letters[$i]);
								}
								# Add every post link
								echo '<a class="aggregated-link" href="' . $all_links[$i] . '" title="' . $all_titles[$i] . '">' . $all_titles[$i] . '</a><br />';
							}
							echo '<div class="space"></div>';
							
							wp_reset_query();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;

						?>
						</div>
						<div class="col-md-4">
							<h3 class="people-header">People</h3>

							<?php

							$counter = 0;
							$all_titles = array();
							$all_links = array();
							query_posts( array ( 'category_name' => 'people', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title' ) );
							while( have_posts() ) : the_post();

								$title = get_the_title();
								$link = get_the_permalink();
								$all_titles[$counter] = $title;
								$all_links[$counter] = $link;
								$counter += 1;

							endwhile;

							for ($i = 0; $i < count($all_titles); $i += 1) {
								echo '<a class="aggregated-link" href="' . $all_links[$i] . '" title="' . $all_titles[$i] . '">' . $all_titles[$i] . '</a><br />';
							}

							wp_reset_query();
							?>
						</div>
					</main><!-- #main -->
				</div>
			</div>
		</div>
	</div><!-- #primary -->

	<!-- End of category-glossary.php -->
<?php
get_footer();
