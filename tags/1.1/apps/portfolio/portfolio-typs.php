<?php
function portwell_register_postType() {
  $labels = array(
    'name'               => __('Portfolios ', 'well_textdomain'),
    'singular_name'      => __('Portfolio', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New Portfolio', 'well_textdomain'),
    'edit_item'          => __('Edit Portfolio', 'well_textdomain'),
    'new_item'           => __('New Portfolio', 'well_textdomain'),
    'all_items'          => __('All Portfolios', 'well_textdomain'),
    'view_item'          => __('View Portfolios', 'well_textdomain'),
    'search_items'       => __('Search Portfolios', 'well_textdomain'),
    'not_found'          => __('No Portfolios found', 'well_textdomain'),
    'not_found_in_trash' => __('No Portfolios found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Portfolios', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('portwell_posttype_slug', 'portfolio-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-category',
    'supports'           => array( 'title', 'thumbnail', 'editor' )
  );

  register_post_type( 'portwell', $args );
  
  
  $labels = array(
		'name'                       => __( 'Portfolio Categories', 'well_textdomain' ),
		'singular_name'              => __( 'Portfolio Category', 'well_textdomain' ),
		'search_items'               => __( 'Search Portfolio Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular Portfolio Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All Portfolio Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit Portfolio Category', 'well_textdomain' ),
		'update_item'                => __( 'Update Portfolio Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New Portfolio Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New Portfolio Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate Portfolio Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Portfolio Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Portfolio Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No Portfolio Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'portwell_cat',
		'portwell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('portwell_taxonomy_slug', 'portfolio-category') ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'portwell_register_postType' );