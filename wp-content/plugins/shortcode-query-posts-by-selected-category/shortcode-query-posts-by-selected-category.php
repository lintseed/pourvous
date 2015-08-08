<?php
/*
Plugin Name: Shortcode Query  Posts By Selected Category
Plugin URI: http://suoling.net/shortcode-query-posts-by-selected-category
Description: Show a list of the post titles in a selected category. Use [slnet slug="Your-Category-Slug" count="Number of Posts to show"]Type Your Title[/slnet] format.
Author: Suifengtec
Version: 1.0
Author URI: http://suoling.net
*/
//Custom shortcode for widget by Suoling.net 2013.11.11	
if(!function_exists('coolwp_posts')){function coolwp_posts($query_text,$querynum=5) {
						$slug = $query_text;
						$icat=get_category_by_slug($slug); 
						$icat_links=get_category_link($icat->term_id); 
						$icat_name=$icat->name;	  
						$cat_id=$icat->term_id;
						
		return	query_posts("cat=($cat_id)&showposts=$querynum&orderby=date&order=DESC");
}}
if(!function_exists('echo_posts')){function echo_posts($mytitle){

		echo'<h5 class="widget_title">';
		
		if(!(strlen($mytitle)==0)){
		echo $mytitle;
		}else{echo 'Recent Posts';}
		
		echo'</h5><ul class="slnet_latest_news_list">';
		 if (have_posts()) :  while (have_posts()) : the_post(); 
			echo '<li class="slnet-recent-post"><a href="';?><?php the_permalink();?><?php echo'" rel="bookmark" class="recent-post-title" title="'. get_the_title().'">'.get_the_title().'</a><span class="latest_posts_data">'?><?php the_time('Y-m-d');?><?php echo'</span></li>';
			 endwhile; 
				 endif; 
				wp_reset_query(); 
			
			echo '</ul>';

}}

if(!function_exists('slnet_shortcode_base')){function slnet_shortcode_base($myslug,$mytitle,$num){
		coolwp_posts($myslug,$num);
		echo_posts($mytitle);
}}

if(!function_exists('slnet_shortcode')){function slnet_shortcode($atts, $content){
 
    extract(shortcode_atts(array( 
	"slug"  => '',
	"num" 	=> 5,	
    ), $atts));
	slnet_shortcode_base($slug,$content,$num);
			
}}
 
add_shortcode('slnet', 'slnet_shortcode'); 
?>