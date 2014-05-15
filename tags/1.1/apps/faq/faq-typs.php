<?php
function faqwell_register_postType() {
  $labels = array(
    'name'               => __('FAQs ', 'well_textdomain'),
    'singular_name'      => __('FAQ', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New FAQ', 'well_textdomain'),
    'edit_item'          => __('Edit FAQ', 'well_textdomain'),
    'new_item'           => __('New FAQ', 'well_textdomain'),
    'all_items'          => __('All FAQs', 'well_textdomain'),
    'view_item'          => __('View FAQs', 'well_textdomain'),
    'search_items'       => __('Search FAQs', 'well_textdomain'),
    'not_found'          => __('No FAQs found', 'well_textdomain'),
    'not_found_in_trash' => __('No FAQs found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('F.A.Q', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('faqwell_posttype_slug', 'faq-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-editor-help',
    'supports'           => array( 'title', 'editor' )
  );

  register_post_type( 'faqwell', $args );
  
  
  $labels = array(
		'name'                       => __( 'FAQ Categories', 'well_textdomain' ),
		'singular_name'              => __( 'FAQ Category', 'well_textdomain' ),
		'search_items'               => __( 'Search FAQ Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular FAQ Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All FAQ Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit FAQ Category', 'well_textdomain' ),
		'update_item'                => __( 'Update FAQ Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New FAQ Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New FAQ Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate FAQ Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove FAQ Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used FAQ Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No FAQ Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'faqwell_cat',
		'faqwell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('faqwell_taxonomy_slug', 'faq-category') ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'faqwell_register_postType' );