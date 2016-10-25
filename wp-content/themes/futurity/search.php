<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">
	<div id="content" class="clearfix row">

		<div id="main" class="col col-lg-8 clearfix" role="main">


			<div class="bl-blog-list">
				<div class="container">
					<div class="row">
						<div class="page-header"><h1><span><?php _e("Search Results for","ignited_bootstrap"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="bl-blog-list-content ">
								<div class="row list-blog">
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

										<div class="col-xs-12 col-sm-4 col-md-4">
											<a href="<?php the_permalink(); ?>">
												<div class="bl-blog-list-item">
													<div style="overflow: hidden"><img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="blog-img"></div>
													<div class="bl-blog-list-item-des">
														<?php
														$posttags = get_the_tags();
														if ($posttags) {
															echo '<h3>';
															foreach($posttags as $tag) {
																echo '<span>'. $tag->name . '</span>';
															}
															echo '</h3>';
														}
														?>
														<h2><?php the_title(); ?></h2>
														<p>by  <?php echo get_the_author(); ?> </p>
													</div>
												</div>
											</a>
										</div>
										<!--/ article -->

									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


				<?php else : ?>

				<!-- this area shows up if there are no results -->

				<article id="post-not-found">
					<header>
						<h1><?php _e("Not Found", "ignited_bootstrap"); ?></h1>
					</header>
					<section class="post_content">
						<p><?php _e("Sorry, but the requested resource was not found on this site.", "ignited_bootstrap"); ?></p>
					</section>
				</article>

			<?php endif; ?>

		</div>
		<!--/ #main -->

	</div>
	<!--/ #content -->


<?php get_footer(); ?>
