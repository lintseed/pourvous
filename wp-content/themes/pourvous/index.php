<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

						<main id="main" class="m-all t-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
							<div class="center block plain" style="width: 60%;">
								
								<a href="#" class="button left">Select Category</a><a href="#" class="button right">Select Archived</a><h2>What's New</h2>
								
								<div class="center block fancy">
									featured post
								</div>
															
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<div class="block-alt">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<h3><?php the_title(); ?></h3>
											<?php 
												if ( has_post_thumbnail() ) {
													the_post_thumbnail('full');
												} else {
													the_excerpt();
												} ?>
										</a>
									</div>

								<?php endwhile; ?>
								
										<?php bones_page_navi(); ?>

								<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

								<?php endif; ?>

							</div>
							
						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
