<?php

/*	Incluging the Theme Templates files
----------------------------------------------*/
add_filter( 'template_include', 'peowell_template_loader' );
function peowell_template_loader( $template ) {
	$find = array();
	$file = '';
	$typs = 'peowell';
	$tax = 'peowell_cat';
	
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
function peowell_inserting_content($content){
	$typs = 'peowell';
	$tax = 'peowell_cat';
	global $post, $wpdb, $wp_query;
	if( empty($post) ) return $content; //fix for any other plugins calling the_content outside the loop
	
	if(is_single() && get_post_type() == $typs ) {
		$content =  do_shortcode('[well_people_single id="'.get_the_ID().'"/]');
	}elseif(is_post_type_archive( $typs)) {
		$content =  do_shortcode('[well_people_grid ids="" cat="" limit="20" pagination="yes" column="2" column_margin="3" filter="no" /]');
	}elseif(is_tax($tax)) {
		$content =  do_shortcode('[well_people_grid ids="" cat="'.get_query_var($tax).'" limit="20" pagination="yes" column="2" column_margin="3" filter="no" /]');
	}
	return $content;
}
add_filter('the_content', 'peowell_inserting_content');



/*	Change "pre_get_posts" action to display 1 post
----------------------------------------------*/
function peowell_posts_per_page( $query ) {
	$typs = 'peowell';
	$tax = 'peowell_cat';
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( $typs ) ) {
		$query->set( 'posts_per_page', '1' );
	}elseif($query->is_main_query() && !is_admin() && is_tax( $tax )){
		$query->set( 'posts_per_page', '1' );
	}
}
add_action( 'pre_get_posts', 'peowell_posts_per_page' );



/*	Change "the_title" filter to change the  title of archive and Tax pages
----------------------------------------------*/
function peowell_the_title_filter( $title ) {
	$typs = 'peowell';
	$tax = 'peowell_cat';
	
	if(is_post_type_archive( $typs)) {
		$title = __('Portfolio Archive', 'peowell_textdomain');
	}elseif(is_tax($tax)) {
		global $wp_query;
		$term =	$wp_query->queried_object;
		$title = __('Portfolio Category: ', 'peowell_textdomain').$term->name;
	}
	return $title;
}


add_action('loop_start','peowell_condition_filter_title');
function peowell_condition_filter_title($array){
	global $wp_query;
	if($array === $wp_query){
		add_filter( 'the_title', 'peowell_the_title_filter' );
	}else{
		remove_filter( 'the_title', 'peowell_the_title_filter' );
	}
}


/* Add "the_content" filters to "peowell_content_filter"
----------------------------------------------*/
add_filter('peowell_content', 'capital_P_dangit' , 11);
add_filter('peowell_content', 'do_shortcode', 11);
add_filter('peowell_content', 'wptexturize', 10);
add_filter('peowell_content', 'convert_smilies', 10);
add_filter('peowell_content', 'convert_chars', 10);
add_filter('peowell_content', 'wpautop', 10);
add_filter('peowell_content', 'shortcode_unautop', 10);
add_filter('peowell_content', 'prepend_attachment', 10);