<?php
function logowell_register_postType() {
  $labels = array(
    'name'               => __('Logos ', 'well_textdomain'),
    'singular_name'      => __('Logo', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New Logo', 'well_textdomain'),
    'edit_item'          => __('Edit Logo', 'well_textdomain'),
    'new_item'           => __('New Logo', 'well_textdomain'),
    'all_items'          => __('All Logos', 'well_textdomain'),
    'view_item'          => __('View Logos', 'well_textdomain'),
    'search_items'       => __('Search Logos', 'well_textdomain'),
    'not_found'          => __('No Logos found', 'well_textdomain'),
    'not_found_in_trash' => __('No Logos found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Logos', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('logowell_posttype_slug', 'logo-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-awards',
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'logowell', $args );
  
  
  $labels = array(
		'name'                       => __( 'Logo Categories', 'well_textdomain' ),
		'singular_name'              => __( 'Logo Category', 'well_textdomain' ),
		'search_items'               => __( 'Search Logo Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular Logo Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All Logo Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit Logo Category', 'well_textdomain' ),
		'update_item'                => __( 'Update Logo Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New Logo Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New Logo Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate Logo Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Logo Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Logo Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No Logo Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'logowell_cat',
		'logowell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('logowell_taxonomy_slug', 'logo-category') ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'logowell_register_postType' );