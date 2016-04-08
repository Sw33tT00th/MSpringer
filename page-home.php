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
                        <p>It offers teachers and educators curricular ideas and materials for preparing students before, during and after visiting the exhibit.</p>
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
					<ul>
						<li class="slide1">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/Arnold_Shay_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Arnold Shay</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide2">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/doris_martin_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Doris Martin</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide3">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/ella_libermann-shiber_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Ella Liebermann-Shiber</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide4">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/hadassa_border_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Hadassa Broder</p>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul>
						<li class="slide5">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/jane_lipski_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Jane Lipski</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide6">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/Rose_rechnic_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Rose Rechnic</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide7">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/rutka_laskier_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Rutka Laskier</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide8">
							<div class="col-lg-3 col-sm-12">
								<figure>
									<img src="wp-content/uploads/2016/04/sam_pivnik_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Sam Pivnik</p>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="container-fluid hidden-lg hidden-xs hidden-xl" id="eight-lives-home">
				<div class="row">
					<ul>
						<li class="slide1">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/Arnold_Shay_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Arnold Shay</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide2">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/doris_martin_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Doris Martin</p>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul>
						<li class="slide3">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/ella_libermann-shiber_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Ella Liebermann-Shiber</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide4">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/hadassa_border_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Hadassa Broder</p>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul>
						<li class="slide5">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/jane_lipski_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Jane Lipski</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide6">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/Rose_rechnic_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Rose Rechnic</p>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul>
						<li class="slide7">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/rutka_laskier_24.png" alt="" class="img-responsive lives" />
									<figcaption>
										<p>Rutka Laskier</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li class="slide8">
							<div class="col-md-6 col-sm-6">
								<figure>
									<img src="wp-content/uploads/2016/04/sam_pivnik_24.png" alt="" class="img-responsive" lives />
									<figcaption>
										<p>Sam Pivnik</p>
									</figcaption>
								</figure>
							</div>
						</li>
					</ul>
				</div>
			</div>

            <!--
            <div id="slider">
                <div class="slide1">
                    <img src="wp-content/themes/MSpringer/img/Arnold-Shay.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide2">
                    <img src="wp-content/themes/MSpringer/img/Doris-Martin.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide3">
                    <img src="wp-content/themes/MSpringer/img/Ella_Liebermann-Shiber.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide4">
                    <img src="wp-content/themes/MSpringer/img/Hadassa-Broder.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide5">
                    <img src="wp-content/themes/MSpringer/img/Jane-Lipski.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide6">
                    <img src="wp-content/themes/MSpringer/img/Rose-Rechnic.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide7">
                    <img src="wp-content/themes/MSpringer/img/Rutka-Laskier.jpg" alt="" width="250" height="auto" />
                </div>
                <div class="slide8">
                    <img src="wp-content/themes/MSpringer/img/Sam_Pivnik.jpg" alt="" width="250" height="auto" />
                </div>
            </div>
            -->
	        <div class="container">
	            <p>The exhibit can be requested from the Martin-Springer Institute for educational and community organizations, libraries, and other public venues. The traveling exhibit and the online version are made possible through the Martin-Springer Institute at Northern Arizona University under the directorship of Dr. Bj&ouml;rn Krondorfer. The Martin-Springer Institute was founded in 2000 by Doris and Ralph Martin. Doris-born Dora Szpringer-grew up in B&#281;dzin. Miraculously, she and her whole family survived the Holocaust.
	            </p>
	        </div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- End of page-home.php -->
<?php
get_sidebar();
get_footer();
