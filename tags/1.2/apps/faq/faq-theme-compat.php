<?php

/*	Incluging the Theme Templates files
----------------------------------------------*/
add_filter( 'template_include', 'faqwell_template_loader' );
function faqwell_template_loader( $template ) {
	$find = array('well-framework.php','page.php','index.php');
	$file = '';
	$typs = 'faqwell';
	$tax = 'faqwell_cat';
	
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
function faqwell_inserting_content($content){
	$typs = 'faqwell';
	$tax = 'faqwell_cat';
	global $post, $wpdb, $wp_query;
	if( empty($post) ) return $content; //fix for any other plugins calling the_content outside the loop
	
	if(is_single() && get_post_type() == $typs ) {
		$content =  do_shortcode('[well_faq ids="'.get_the_ID().'" /]');
	}elseif(is_post_type_archive( $typs)) {
		$content =  do_shortcode('[well_faq /]');
	}elseif(is_tax($tax)) {
		$content =  do_shortcode('[well_faq cat="'.get_query_var($tax).'" /]');
	}
	return $content;
}
add_filter('the_content', 'faqwell_inserting_content');



/*	Change "pre_get_posts" action to display i post
----------------------------------------------*/
function faqwell_posts_per_page( $query ) {
	$typs = 'faqwell';
	$tax = 'faqwell_cat';
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( $typs ) ) {
		$query->set( 'posts_per_page', '1' );
	}elseif($query->is_main_query() && !is_admin() && is_tax( $tax )){
		$query->set( 'posts_per_page', '1' );
	}
}
add_action( 'pre_get_posts', 'faqwell_posts_per_page' );



/*	Change "the_title" filter to change the  title of archive and Tax pages
----------------------------------------------*/
function faqwell_the_title_filter( $title ) {
	$typs = 'faqwell';
	$tax = 'faqwell_cat';
	
	if(is_post_type_archive( $typs)) {
		$title = __('F.A.Q Archive', 'faqwell_textdomain');
	}elseif(is_tax($tax)) {
		global $wp_query;
		$term =	$wp_query->queried_object;
		$title = __('F.A.Q Category: ', 'faqwell_textdomain').$term->name;
	}
	return $title;
}


add_action('loop_start','faqwell_condition_filter_title');
function faqwell_condition_filter_title($array){
	global $wp_query;
	if($array === $wp_query){
		add_filter( 'the_title', 'faqwell_the_title_filter' );
	}else{
		remove_filter( 'the_title', 'faqwell_the_title_filter' );
	}
}



/*	Add "the_content" filters to "faqwell_content_filter"
----------------------------------------------*/
add_filter('faqwell_content', 'capital_P_dangit' , 11);
add_filter('faqwell_content', 'do_shortcode', 11);
add_filter('faqwell_content', 'wptexturize', 10);
add_filter('faqwell_content', 'convert_smilies', 10);
add_filter('faqwell_content', 'convert_chars', 10);
add_filter('faqwell_content', 'wpautop', 10);
add_filter('faqwell_content', 'shortcode_unautop', 10);
add_filter('faqwell_content', 'prepend_attachment', 10);