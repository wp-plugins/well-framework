<?php
function tmwell_register_postType() {
  $labels = array(
    'name'               => __('Testimonials ', 'well_textdomain'),
    'singular_name'      => __('Testimonial', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New Testimonial', 'well_textdomain'),
    'edit_item'          => __('Edit Testimonial', 'well_textdomain'),
    'new_item'           => __('New Testimonial', 'well_textdomain'),
    'all_items'          => __('All Testimonials', 'well_textdomain'),
    'view_item'          => __('View Testimonials', 'well_textdomain'),
    'search_items'       => __('Search Testimonials', 'well_textdomain'),
    'not_found'          => __('No Testimonials found', 'well_textdomain'),
    'not_found_in_trash' => __('No Testimonials found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Testimonials', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('tmwell_posttype_slug', 'testimonial-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-format-quote',
    'supports'           => array( 'title', 'thumbnail', 'editor' )
  );

  register_post_type( 'tmwell', $args );
  
  
  $labels = array(
		'name'                       => __( 'Testimonial Categories', 'well_textdomain' ),
		'singular_name'              => __( 'Testimonial Category', 'well_textdomain' ),
		'search_items'               => __( 'Search Testimonial Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular Testimonial Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All Testimonial Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit Testimonial Category', 'well_textdomain' ),
		'update_item'                => __( 'Update Testimonial Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New Testimonial Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New Testimonial Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate Testimonial Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Testimonial Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Testimonial Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No Testimonial Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'tmwell_cat',
		'tmwell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('tmwell_taxonomy_slug', 'testimonial-category') ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'tmwell_register_postType' );