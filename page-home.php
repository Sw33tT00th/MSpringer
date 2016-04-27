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
	<!-- Start of page-home.php -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>

			<section class="bedzinpic"></section>
			<div class="container">
	            <p class="center"><strong>This site is best used in conjunction with the actual traveling exhibit. </strong></p>
                <ul>
                    <li>
                        <p>This site provides information and resources to learn about young people's lives in a Jewish ghetto in Poland within the context of the Holocaust and World War II.</p>
                    </li>
                    <li>
                        <p>It offers teachers and educators curricular ideas and materials for preparing students before, during, and after visiting the exhibit.</p>
                    </li>
                    <li>
                        <p>It offers people who would like to request the exhibit for their organization an overview about its educational value.</p>
                    </li>
                    <li>
                        <p>The site can also be navigated as a source of information on the B&#281;dzin ghetto independent of the actual traveling exhibit.</p>
                    </li>
                </ul>
            </div>
			<div class="container-fluid hidden-md hidden-sm" id="eight-lives-home">
				<div class="row">
					<div class="col-xs-12">
						<h4 style="text-align:center;color:white;">Follow the lives of eight young people from the B&#281;dzin Ghetto.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/arnold-shay/">
							<figure>
								<img src="wp-content/uploads/2016/04/Arnold_Shay_24-223x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Arnold Shay</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/doris-martin/">
							<figure>
								<img src="wp-content/uploads/2016/04/doris_martin_24-236x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Doris Martin</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/ella-liebermann-shiber/">
							<figure>
								<img src="wp-content/uploads/2016/04/ella_libermann-shiber_24-228x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Ella Liebermann-Shiber</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/hadassa-broder/">
							<figure>
								<img src="wp-content/uploads/2016/04/hadassa_border_24-222x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Hadassa Broder</p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/jane-lipski/">
							<figure>
								<img src="wp-content/uploads/2016/04/jane_lipski_24-225x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Jane Lipski</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/rose-rechnic/">
							<figure>
								<img src="wp-content/uploads/2016/04/Rose_rechnic_24-228x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Rose Rechnic</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/rutka-laskier">
							<figure>
								<img src="wp-content/uploads/2016/04/rutka_laskier_24-250x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Rutka Laskier</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="/bedzin-p/wordpress/index.php/sam-pivnik">
							<figure>
								<img src="wp-content/uploads/2016/04/sam_pivnik_24-225x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Sam Pivnik</p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
			</div>
			<div class="container-fluid hidden-lg hidden-xs hidden-xl" id="eight-lives-home">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/arnold-shay/">
							<figure>
								<img src="wp-content/uploads/2016/04/Arnold_Shay_24-223x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Arnold Shay</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/doris-martin/">
							<figure>
								<img src="wp-content/uploads/2016/04/doris_martin_24-236x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Doris Martin</p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/ella-liebermann-shiber/">
							<figure>
								<img src="wp-content/uploads/2016/04/ella_libermann-shiber_24-228x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Ella Liebermann-Shiber</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/hadassa-broder/">
							<figure>
								<img src="wp-content/uploads/2016/04/hadassa_border_24-222x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Hadassa Broder</p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/jane-lipski/">
							<figure>
								<img src="wp-content/uploads/2016/04/jane_lipski_24-225x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Jane Lipski</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/rose-rechnic/">
							<figure>
								<img src="wp-content/uploads/2016/04/Rose_rechnic_24-228x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Rose Rechnic</p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/rutka-laskier">
							<figure>
								<img src="wp-content/uploads/2016/04/rutka_laskier_24-250x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Rutka Laskier</p>
								</figcaption>
							</figure>
						</a>
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="/bedzin-p/wordpress/index.php/sam-pivnik">
							<figure>
								<img src="wp-content/uploads/2016/04/sam_pivnik_24-225x300.png" alt="" class="img-responsive lives" />
								<figcaption>
									<p>Sam Pivnik</p>
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
			</div>

	        <div class="container">
	            <p>The exhibit can be requested from the Martin-Springer Institute for educational and community organizations, libraries, and other public venues. The traveling exhibit and the online version are made possible through the Martin-Springer Institute at Northern Arizona University under the directorship of Dr. Bj&ouml;rn Krondorfer. The Martin-Springer Institute was founded in 2000 by Doris and Ralph Martin. Doris, born Dora Szpringer, grew up in B&#281;dzin. Miraculously, she and her whole family survived the Holocaust.
	            </p>
	        </div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- End of page-home.php -->
<?php
get_sidebar();
get_footer();
