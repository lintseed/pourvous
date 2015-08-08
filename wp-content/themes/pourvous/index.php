<?php
/*
The actual Blog page
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

						<main id="main" class="m-all t-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
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

									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								
										<section class="entry-content cf" itemprop="articleBody">
										<br><br><br>
										<div class="center block fancy" style="width: 60%; font-size: 120%">
										<div class="block-content">
											<strong>No content found.</strong>
											<p>Please check back soon!</p>									
										</div>								
										</div>

									</article>

								<?php endif; ?>

							
							
						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
