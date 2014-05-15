<?php
function peowell_register_postType() {
  $labels = array(
    'name'               => __('Peoples ', 'well_textdomain'),
    'singular_name'      => __('People', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New People', 'well_textdomain'),
    'edit_item'          => __('Edit People', 'well_textdomain'),
    'new_item'           => __('New People', 'well_textdomain'),
    'all_items'          => __('All Peoples', 'well_textdomain'),
    'view_item'          => __('View Peoples', 'well_textdomain'),
    'search_items'       => __('Search Peoples', 'well_textdomain'),
    'not_found'          => __('No Peoples found', 'well_textdomain'),
    'not_found_in_trash' => __('No Peoples found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Peoples', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('peowell_posttype_slug', 'people-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-groups',
    'supports'           => array( 'title', 'thumbnail', 'editor' )
  );

  register_post_type( 'peowell', $args );
  
  
  $labels = array(
		'name'                       => __( 'People Categories', 'well_textdomain' ),
		'singular_name'              => __( 'People Category', 'well_textdomain' ),
		'search_items'               => __( 'Search People Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular People Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All People Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit People Category', 'well_textdomain' ),
		'update_item'                => __( 'Update People Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New People Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New People Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate People Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove People Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used People Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No People Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'peowell_cat',
		'peowell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('peowell_taxonomy_slug', 'people-category') ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'peowell_register_postType' );