<?php

/*	Incluging the Theme Templates files
----------------------------------------------*/
add_filter( 'template_include', 'gallerywell_template_loader' );
function gallerywell_template_loader( $template ) {
	$find = array('well-framework.php','page.php','index.php');
	$file = '';
	$typs = 'gallerywell';
	$tax = 'gallerywell_cat';
	
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
function gallerywell_inserting_content($content){
	$typs = 'gallerywell';
	$tax = 'gallerywell_cat';
	global $post, $wpdb, $wp_query;
	if( empty($post) ) return $content; //fix for any other plugins calling the_content outside the loop
	
	if(is_single() && get_post_type() == $typs ) {
		$content =  do_shortcode('[well_gallery_single_grid id="'.get_the_ID().'" /]');
	}elseif(is_post_type_archive( $typs)) {
		$content =  do_shortcode('[well_gallery_archive_grid /]');
	}elseif(is_tax($tax)) {
		$content =  do_shortcode('[well_gallery_archive_grid cat="'.get_query_var($tax).'" /]');
	}
	return $content;
}
add_filter('the_content', 'gallerywell_inserting_content');



/*	Change "pre_get_posts" action to display i post
----------------------------------------------*/
function gallerywell_posts_per_page( $query ) {
	$typs = 'gallerywell';
	$tax = 'gallerywell_cat';
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( $typs ) ) {
		$query->set( 'posts_per_page', '1' );
	}elseif($query->is_main_query() && !is_admin() && is_tax( $tax )){
		$query->set( 'posts_per_page', '1' );
	}
}
add_action( 'pre_get_posts', 'gallerywell_posts_per_page' );



/*	Change "the_title" filter to change the  title of archive and Tax pages
----------------------------------------------*/
function gallerywell_the_title_filter( $title ) {
	$typs = 'gallerywell';
	$tax = 'gallerywell_cat';
	
	if(is_post_type_archive( $typs)) {
		$title = __('Gallery Archive', 'gallerywell_textdomain');
	}elseif(is_tax($tax)) {
		global $wp_query;
		$term =	$wp_query->queried_object;
		$title = __('Gallery Category: ', 'gallerywell_textdomain').$term->name;
	}
	return $title;
}


add_action('loop_start','gallerywell_condition_filter_title');
function gallerywell_condition_filter_title($array){
	global $wp_query;
	if($array === $wp_query){
		add_filter( 'the_title', 'gallerywell_the_title_filter' );
	}else{
		remove_filter( 'the_title', 'gallerywell_the_title_filter' );
	}
}