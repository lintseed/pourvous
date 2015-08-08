<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<?php
				global $post;
				$headerBackground = get_post_meta($post->ID, 'header_color', true); 
				if (empty($headerBackground)) { $headerBackground = 'green'; }
			?>

			<header class="header <?php echo $headerBackground; ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="header-background">

				<div class="borderme"></div>
				<div id="inner-header" class="wrap cf">
					
					<div id="content-head" class="right">
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
									 'container' => false,                           // remove nav container
									 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
									 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
									 'menu_class' => 'nav top-nav cf',               // adding custom nav class
									 'theme_location' => 'main-nav',                 // where it's located in the theme
									 'before' => '',                                 // before the menu
									   'after' => '',                                  // after the menu
									   'link_before' => '',                            // before each link
									   'link_after' => '',                             // after each link
									   'depth' => 0,                                   // limit the depth of the nav
									 'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
						
						<?php 
						if (is_page('contact-us')) {
							echo do_shortcode('[wpgmza id="1"]');
						} else if (is_front_page()) {
							echo do_shortcode('[wonderplugin_slider id="2"]');
						} else if (is_page('products')) {
							echo do_shortcode('[wonderplugin_slider id="3"]');
						} else if (is_page('donations')) {
							echo do_shortcode('[wonderplugin_slider id="4"]');
						} else if (is_page('party-planner')) {
							echo do_shortcode('[wonderplugin_slider id="5"]');
						} else if (is_page('legal')) {
							echo do_shortcode('[wonderplugin_slider id="7"]');
						} else if (is_page('blog')) {
							echo do_shortcode('[wonderplugin_slider id="8"]');
						} else if (is_page('beer')) {
							echo do_shortcode('[wonderplugin_slider id="9"]');
						} else if (is_page('wine')) {
							echo do_shortcode('[wonderplugin_slider id="10"]');
						} else if (is_page('spirits')) {
							echo do_shortcode('[wonderplugin_slider id="11"]');
						} else if (is_page('cigars')) {
							echo do_shortcode('[wonderplugin_slider id="12"]');
						} else if (is_page('party-supplies')) {
							echo do_shortcode('[wonderplugin_slider id="13"]');
						} else if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('full');
						} 
						?>
					</div>
										
					<div id="sidebar-head" class="block left">
						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<div id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
							<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="/dev/wp-content/themes/pourvous/library/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
						</div>
						<div class="triangle-up-right left"></div>
						<div class="triangle-top-left right"></div>
						
						<?php // if you'd like to use the site description you can un-comment it below ?>
						<?php // bloginfo('description'); ?>
						<?php if (is_active_sidebar('header')) { dynamic_sidebar('header'); } ?>
					</div>
					
				</div>
				</div>

			</header>
