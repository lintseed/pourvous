<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

						<main id="main" class="m-all t-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

<?php /* custom homepage "content" */ ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>
							</article>
							<?php endwhile; ?><?php else : ?><?php endif; ?>
							

<?php /* start blogroll */ ?>										
							<?php $the_query = new WP_Query('posts_per_page=3'); ?>
							<?php if ( $the_query->have_posts() ) : ?>
								<div class="center block plain" style="width: 60%">
									<h2>What’s New This Week</h2>
									<div class="clear">
							
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
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
							
								</div><?php /* end clear */ ?>
								</div><?php /* end cnter block */ ?>
								
							<?php endif; ?>
							<?php /* end blogroll */ ?>
							
						</main>

				</div>

			</div>


<?php get_footer(); ?>
