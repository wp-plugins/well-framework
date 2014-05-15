<?php

/*	Incluging the Theme Templates files
----------------------------------------------*/
add_filter( 'template_include', 'tmwell_template_loader' );
function tmwell_template_loader( $template ) {
	$find = array('well-framework.php','page.php','index.php');
	$file = '';
	$typs = 'tmwell';
	$tax = 'tmwell_cat';
	
	if(is_single() && get_post_type() == $typs ) {
		$file   = 'single-'.$typs.'.php';
		$find[] = $file;
	}elseif(is_post_type_archive( $typs)) {
		$file 	= 'archive-'.$typs.'.php';
		$find[] = $file;
	}elseif(is_tax($tax)) {
		$file   = 'taxonomy-'.$tax.'.php';
		$find[] = $file;
	}
	
	if($file){ $template = locate_template( $find ); }

	return $template;
}


/*	Inserting the content via "the_content" filter
----------------------------------------------*/
function tmwell_inserting_content($content){
	$typs = 'tmwell';
	$tax = 'tmwell_cat';
	global $post, $wpdb, $wp_query;
	if( empty($post) ) return $content; //fix for any other plugins calling the_content outside the loop
	
	if(is_single() && get_post_type() == $typs ) {
		$content =  do_shortcode('[well_testimonial_grid ids="'.get_the_ID().'" cat="" limit="" pagination="no" column="1" column_margin="3" filter="no" /]');
	}elseif(is_post_type_archive( $typs)) {
		$content =  do_shortcode('[well_testimonial_grid ids="" cat="" limit="20" pagination="yes" column="2" column_margin="3" filter="no" /]');
	}elseif(is_tax($tax)) {
		$content =  do_shortcode('[well_testimonial_grid ids="" cat="'.get_query_var($tax).'" limit="20" pagination="yes" column="2" column_margin="3" filter="no" /]');
	}
	return $content;
}
add_filter('the_content', 'tmwell_inserting_content');



/*	Change "pre_get_posts" action to display 1 post
----------------------------------------------*/
function tmwell_posts_per_page( $query ) {
	$typs = 'tmwell';
	$tax = 'tmwell_cat';
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( $typs ) ) {
		$query->set( 'posts_per_page', '1' );
	}elseif($query->is_main_query() && !is_admin() && is_tax( $tax )){
		$query->set( 'posts_per_page', '1' );
	}
}
add_action( 'pre_get_posts', 'tmwell_posts_per_page' );



/*	Change "the_title" filter to change the  title of archive and Tax pages
----------------------------------------------*/
function tmwell_the_title_filter( $title ) {
	$typs = 'tmwell';
	$tax = 'tmwell_cat';
	
	if(is_post_type_archive( $typs)) {
		$title = __('Testimonial Archive', 'tmwell_textdomain');
	}elseif(is_tax($tax)) {
		global $wp_query;
		$term =	$wp_query->queried_object;
		$title = __('Testimonial Category: ', 'tmwell_textdomain').$term->name;
	}
	return $title;
}


add_action('loop_start','tmwell_condition_filter_title');
function tmwell_condition_filter_title($array){
	global $wp_query;
	if($array === $wp_query){
		add_filter( 'the_title', 'tmwell_the_title_filter' );
	}else{
		remove_filter( 'the_title', 'tmwell_the_title_filter' );
	}
}