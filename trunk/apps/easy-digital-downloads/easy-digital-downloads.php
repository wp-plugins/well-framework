<?php
if(function_exists('EDD')):

define('WEFR_EDD_URL', WEFR_URL.'apps/easy-digital-downloads/');
define('WEFR_EDD_DRI', WEFR_DRI.'apps/easy-digital-downloads/');



/* Setup Themplate File loader
-------------------------------------------------*/
$settings = array(
	'child_url'  => get_stylesheet_directory_uri().'/well-framework/easy-digital-downloads/',
	'theme_url'  => get_template_directory_uri().'/well-framework/easy-digital-downloads/',
	'plugin_url' => WEFR_EDD_URL.'template/',
	
	'child_dri'  => get_stylesheet_directory().'/well-framework/easy-digital-downloads/',
	'theme_dri'  => get_template_directory().'/well-framework/easy-digital-downloads/',
	'plugin_dri' => WEFR_EDD_DRI.'template/',
);
$wefr_edd_template_path = new acoc_template_file_loader($settings);


/* Load Require Scripts
-------------------------------------------------*/
add_action( 'wp_enqueue_scripts', 'well_slideshow_script_register');
function well_slideshow_script_register(){
	$css = WEFR_EDD_URL . 'assets/css/';
	$js = WEFR_EDD_URL . 'assets/js/';
	
	wp_enqueue_script( 'jquery-flexslider');
	wp_enqueue_style( 'acoc-flexslider');
	wp_enqueue_script( 'jquery-isotope');
	wp_enqueue_style( 'font-awesome');
	wp_enqueue_style( 'well-slideshow', $css.'well-edd.css', '', '' );
	wp_enqueue_script( 'well-slideshow', $js.'well-edd.js', '', '', true );
}



/* Register Shortcodes
-------------------------------------------------*/
function well_edd_grid_shortcode_register( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'category'         => '',
			'exclude_category' => '',
			'tags'             => '',
			'exclude_tags'     => '',
			'relation'         => 'AND',
			'number'           => 10,
			'columns'          => 3,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'ids'              => '',
			'margin'		   => '1'
		), $atts, 'downloads' )
	);
	
	global $wefr_edd_template_path;
	
	
	$query = array(
		'post_type'      => 'download',
		'posts_per_page' => absint( $number ),
		'orderby'        => $orderby,
		'order'          => $order
	);

	switch ( $orderby ) {
		case 'price':
			$orderby           = 'meta_value';
			$query['meta_key'] = 'edd_price';
			$query['orderby']  = 'meta_value_num';
		break;

		case 'title':
			$query['orderby'] = 'title';
		break;

		case 'id':
			$query['orderby'] = 'ID';
		break;

		case 'random':
			$query['orderby'] = 'rand';
		break;

		default:
			$query['orderby'] = 'post_date';
		break;
	}

	if ( $tags || $category || $exclude_category || $exclude_tags ) {
		$query['tax_query'] = array(
			'relation'     => $relation
		);

		if ( $tags ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_tag',
				'terms'    => explode( ',', $tags ),
				'field'    => 'slug'
			);
		}

		if ( $category ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_category',
				'terms'    => explode( ',', $category ),
				'field'    => 'slug'
			);
		}

		if ( $exclude_category ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_category',
				'terms'    => explode( ',', $exclude_category ),
				'field'    => 'slug',
				'operator' => 'NOT IN',
			);
		}

		if ( $exclude_tags ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_tag',
				'terms'    => explode( ',', $exclude_tags ),
				'field'    => 'slug',
				'operator' => 'NOT IN',
			);
		}
	}

	if( ! empty( $ids ) )
		$query['post__in'] = explode( ',', $ids );

	if ( get_query_var( 'paged' ) )
		$query['paged'] = get_query_var('paged');
	else if ( get_query_var( 'page' ) )
		$query['paged'] = get_query_var( 'page' );
	else
		$query['paged'] = 1;

	
	ob_start();
	include($wefr_edd_template_path->dri().'grid.php');
	$output = ob_get_contents();
	ob_end_clean();
	
	return 	$output;
}
add_shortcode('well_edd_grid', 'well_edd_grid_shortcode_register');



function well_edd_carousel_shortcode_register( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'category'         => '',
			'exclude_category' => '',
			'tags'             => '',
			'exclude_tags'     => '',
			'relation'         => 'AND',
			'number'           => 10,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'ids'              => '',
			
			'item_margin'      => '10',
			'item_width'      => '10',
			'min_items'		   => '2',
			'max_items'		   => '4',
		), $atts, 'downloads' )
	);
	
	global $wefr_edd_template_path;
	
	
	$query = array(
		'post_type'      => 'download',
		'posts_per_page' => absint( $number ),
		'orderby'        => $orderby,
		'order'          => $order
	);

	switch ( $orderby ) {
		case 'price':
			$orderby           = 'meta_value';
			$query['meta_key'] = 'edd_price';
			$query['orderby']  = 'meta_value_num';
		break;

		case 'title':
			$query['orderby'] = 'title';
		break;

		case 'id':
			$query['orderby'] = 'ID';
		break;

		case 'random':
			$query['orderby'] = 'rand';
		break;

		default:
			$query['orderby'] = 'post_date';
		break;
	}

	if ( $tags || $category || $exclude_category || $exclude_tags ) {
		$query['tax_query'] = array(
			'relation'     => $relation
		);

		if ( $tags ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_tag',
				'terms'    => explode( ',', $tags ),
				'field'    => 'slug'
			);
		}

		if ( $category ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_category',
				'terms'    => explode( ',', $category ),
				'field'    => 'slug'
			);
		}

		if ( $exclude_category ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_category',
				'terms'    => explode( ',', $exclude_category ),
				'field'    => 'slug',
				'operator' => 'NOT IN',
			);
		}

		if ( $exclude_tags ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'download_tag',
				'terms'    => explode( ',', $exclude_tags ),
				'field'    => 'slug',
				'operator' => 'NOT IN',
			);
		}
	}

	if( ! empty( $ids ) )
		$query['post__in'] = explode( ',', $ids );

	
	ob_start();
	include($wefr_edd_template_path->dri().'carousel.php');
	$output = ob_get_contents();
	ob_end_clean();
	
	return 	$output;
}
add_shortcode('well_edd_carousel', 'well_edd_carousel_shortcode_register');

endif;


