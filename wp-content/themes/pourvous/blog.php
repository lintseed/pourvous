<?php
/*
Template Name: Blog Posts
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

						<main id="main" class="m-all t-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								
								<section class="entry-content cf" itemprop="articleBody">
								<br><br><br>
<div class="center block fancy" style="width: 60%; font-size: 120%">
								<div class="block-content">
									<strong>This page is under construction.</strong>
									<p>Please check back soon!</p>									
								</div>									
							</div>
								

							</article>
							
						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
