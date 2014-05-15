<?php
function gallerywell_register_postType() {
  $labels = array(
    'name'               => __('Galleries ', 'well_textdomain'),
    'singular_name'      => __('Gallery', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New Gallery', 'well_textdomain'),
    'edit_item'          => __('Edit Gallery', 'well_textdomain'),
    'new_item'           => __('New Gallery', 'well_textdomain'),
    'all_items'          => __('All Galleries', 'well_textdomain'),
    'view_item'          => __('View Galleries', 'well_textdomain'),
    'search_items'       => __('Search Galleries', 'well_textdomain'),
    'not_found'          => __('No Galleries found', 'well_textdomain'),
    'not_found_in_trash' => __('No Galleries found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Galleries', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('gallerywell_posttype_slug', 'gallery-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-format-gallery',
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'gallerywell', $args );
  
  
  $labels = array(
		'name'                       => __( 'Gallery Categories', 'well_textdomain' ),
		'singular_name'              => __( 'Gallery Category', 'well_textdomain' ),
		'search_items'               => __( 'Search Gallery Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular Gallery Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All Gallery Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit Gallery Category', 'well_textdomain' ),
		'update_item'                => __( 'Update Gallery Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New Gallery Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New Gallery Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate Gallery Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Gallery Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Gallery Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No Gallery Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'gallerywell_cat',
		'gallerywell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('gallerywell_taxonomy_slug', 'gallery-category') ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'gallerywell_register_postType' );