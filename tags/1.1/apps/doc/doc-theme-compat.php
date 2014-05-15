<?php

/*	Incluging the Theme Templates files
----------------------------------------------*/
add_filter( 'template_include', 'docwell_template_loader' );
function docwell_template_loader( $template ) {
	$find = array('well-framework.php','page.php','index.php');
	$file = '';
	$typs = 'docwell';
	$tax = 'docwell_cat';
	
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
function docwell_inserting_content($content){
	$typs = 'docwell';
	$tax = 'docwell_cat';
	global $post, $wpdb, $wp_query;
	if( empty($post) ) return $content; //fix for any other plugins calling the_content outside the loop
	
	if(is_single() && get_post_type() == $typs ) {
		$content =  do_shortcode('[well_doc id="'.get_the_ID().'" /]');
	}elseif(is_post_type_archive( $typs)) {
		$content =  do_shortcode('[well_doc_archive /]');
	}elseif(is_tax($tax)) {
		$content =  do_shortcode('[well_doc_archive cat="'.get_query_var($tax).'" /]');
	}
	return $content;
}
add_filter('the_content', 'docwell_inserting_content');



/*	Change "pre_get_posts" action to display i post
----------------------------------------------*/
function docwell_posts_per_page( $query ) {
	$typs = 'docwell';
	$tax = 'docwell_cat';
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( $typs ) ) {
		$query->set( 'posts_per_page', '1' );
	}elseif($query->is_main_query() && !is_admin() && is_tax( $tax )){
		$query->set( 'posts_per_page', '1' );
	}
}
add_action( 'pre_get_posts', 'docwell_posts_per_page' );



/*	Change "the_title" filter to change the  title of archive and Tax pages
----------------------------------------------*/
function docwell_the_title_filter( $title ) {
	$typs = 'docwell';
	$tax = 'docwell_cat';
	
	if(is_post_type_archive( $typs)) {
		$title = __('Doc Archive', 'docwell_textdomain');
	}elseif(is_tax($tax)) {
		global $wp_query;
		$term =	$wp_query->queried_object;
		$title = __('Doc Category: ', 'docwell_textdomain').$term->name;
	}
	return $title;
}


add_action('loop_start','docwell_condition_filter_title');
function docwell_condition_filter_title($array){
	global $wp_query;
	if($array === $wp_query){
		add_filter( 'the_title', 'docwell_the_title_filter' );
	}else{
		remove_filter( 'the_title', 'docwell_the_title_filter' );
	}
}



/*	Add "the_content" filters to "docwell_content_filter"
----------------------------------------------*/
add_filter('docwell_content', 'capital_P_dangit' , 11);
add_filter('docwell_content', 'do_shortcode', 11);
add_filter('docwell_content', 'wptexturize', 10);
add_filter('docwell_content', 'convert_smilies', 10);
add_filter('docwell_content', 'convert_chars', 10);
add_filter('docwell_content', 'wpautop', 10);
add_filter('docwell_content', 'shortcode_unautop', 10);
add_filter('docwell_content', 'prepend_attachment', 10);