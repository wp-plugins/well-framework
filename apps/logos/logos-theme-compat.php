<?php

/*	Incluging the Theme Templates files
----------------------------------------------*/
add_filter( 'template_include', 'logowell_template_loader' );
function logowell_template_loader( $template ) {
	$find = array();
	$file = '';
	$typs = 'logowell';
	$tax = 'logowell_cat';
	
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
	
	$find[] = 'well-framework.php';
	$find[] = 'page.php';
	$find[] = 'index.php';
	
	if($file){ $template = locate_template( $find ); }

	return $template;
}


/*	Inserting the content via "the_content" filter
----------------------------------------------*/
function logowell_inserting_content($content){
	$typs = 'logowell';
	$tax = 'logowell_cat';
	global $post, $wpdb, $wp_query;
	if( empty($post) ) return $content; //fix for any other plugins calling the_content outside the loop
	
	if(is_single() && get_post_type() == $typs ) {
		$content =  do_shortcode('[well_logo_grid ids="'.get_the_ID().'" /]');
	}elseif(is_post_type_archive( $typs)) {
		$content =  do_shortcode('[well_logo_grid /]');
	}elseif(is_tax($tax)) {
		$content =  do_shortcode('[well_logo_grid cat="'.get_query_var($tax).'" /]');
	}
	return $content;
}
add_filter('the_content', 'logowell_inserting_content');



/*	Change "pre_get_posts" action to display i post
----------------------------------------------*/
function logowell_posts_per_page( $query ) {
	$typs = 'logowell';
	$tax = 'logowell_cat';
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( $typs ) ) {
		$query->set( 'posts_per_page', '1' );
	}elseif($query->is_main_query() && !is_admin() && is_tax( $tax )){
		$query->set( 'posts_per_page', '1' );
	}
}
add_action( 'pre_get_posts', 'logowell_posts_per_page' );


/*	Change "the_title" filter to change the  title of archive and Tax pages
----------------------------------------------*/
function logowell_the_title_filter( $title ) {
	$typs = 'logowell';
	$tax = 'logowell_cat';
	
	if(is_post_type_archive( $typs)) {
		$title = __('Logo Archive', 'logowell_textdomain');
	}elseif(is_tax($tax)) {
		global $wp_query;
		$term =	$wp_query->queried_object;
		$title = __('Logo Category: ', 'logowell_textdomain').$term->name;
	}
	return $title;
}


add_action('loop_start','logowell_condition_filter_title');
function logowell_condition_filter_title($array){
	global $wp_query;
	if($array === $wp_query){
		add_filter( 'the_title', 'logowell_the_title_filter' );
	}else{
		remove_filter( 'the_title', 'logowell_the_title_filter' );
	}
}