<?php
function docwell_register_postType() {
  $labels = array(
    'name'               => __('Docs ', 'well_textdomain'),
    'singular_name'      => __('Doc', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New Doc', 'well_textdomain'),
    'edit_item'          => __('Edit Doc', 'well_textdomain'),
    'new_item'           => __('New Doc', 'well_textdomain'),
    'all_items'          => __('All Docs', 'well_textdomain'),
    'view_item'          => __('View Docs', 'well_textdomain'),
    'search_items'       => __('Search Docs', 'well_textdomain'),
    'not_found'          => __('No Docs found', 'well_textdomain'),
    'not_found_in_trash' => __('No Docs found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Well Doc', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('docwell_posttype_slug', 'doc-item') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-sos',
    'supports'           => array( 'title', 'thumbnail', 'editor' )
  );
  register_post_type( 'docwell', $args );
  
  
  $labels = array(
    'name'               => __('Doc Content', 'well_textdomain'),
    'singular_name'      => __('Doc Content', 'well_textdomain'),
    'add_new'            => __('Add New', 'well_textdomain'),
    'add_new_item'       => __('Add New Doc Content', 'well_textdomain'),
    'edit_item'          => __('Edit Doc Content', 'well_textdomain'),
    'new_item'           => __('New Doc Content', 'well_textdomain'),
    'all_items'          => __('All Doc Content', 'well_textdomain'),
    'view_item'          => __('View Doc Content', 'well_textdomain'),
    'search_items'       => __('Search Doc Content', 'well_textdomain'),
    'not_found'          => __('No Doc Content found', 'well_textdomain'),
    'not_found_in_trash' => __('No Doc Content found in Trash', 'well_textdomain'),
    'parent_item_colon'  => '',
    'menu_name'          => __('Doc Content', 'well_textdomain')
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => apply_filters('docwell_posttype_slug', 'doc-content') ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
	'menu_icon'          => 'dashicons-sos',
    'supports'           => array( 'title', 'thumbnail', 'editor' )
  );
  register_post_type( 'docwell_items', $args );
  
  
  $labels = array(
		'name'                       => __( 'Doc Categories', 'well_textdomain' ),
		'singular_name'              => __( 'Doc Category', 'well_textdomain' ),
		'search_items'               => __( 'Search Doc Categories', 'well_textdomain' ),
		'popular_items'              => __( 'Popular Doc Categories', 'well_textdomain' ),
		'all_items'                  => __( 'All Doc Categories', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit Doc Category', 'well_textdomain' ),
		'update_item'                => __( 'Update Doc Category', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New Doc Category', 'well_textdomain' ),
		'new_item_name'              => __( 'New Doc Category Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate Doc Categories with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Doc Categories', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Doc Categories', 'well_textdomain' ),
		'not_found'                  => __( 'No Doc Categories found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Categories', 'well_textdomain' ),
	);
  register_taxonomy(
		'docwell_cat',
		'docwell',
		array(
			'labels' => $labels,
			'rewrite' => array( 'slug' => apply_filters('docwell_taxonomy_slug', 'doc-category') ),
			'hierarchical' => true,
		)
	);
	
	
	$labels = array(
		'name'                       => __( 'Doc Group', 'well_textdomain' ),
		'singular_name'              => __( 'Doc Group', 'well_textdomain' ),
		'search_items'               => __( 'Search Doc Group', 'well_textdomain' ),
		'popular_items'              => __( 'Popular Doc Group', 'well_textdomain' ),
		'all_items'                  => __( 'All Doc Group', 'well_textdomain' ),
		'edit_item'                  => __( 'Edit Doc Group', 'well_textdomain' ),
		'update_item'                => __( 'Update Doc Group', 'well_textdomain' ),
		'add_new_item'               => __( 'Add New Doc Group', 'well_textdomain' ),
		'new_item_name'              => __( 'New Doc Group Name', 'well_textdomain' ),
		'separate_items_with_commas' => __( 'Separate Doc Group with commas', 'well_textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Doc Group', 'well_textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Doc Group', 'well_textdomain' ),
		'not_found'                  => __( 'No Doc Group found.', 'well_textdomain' ),
		'menu_name'                  => __( 'Group', 'well_textdomain' ),
	);
  register_taxonomy(
		'docwell_group',
		'docwell_items',
		array(
			'labels' => $labels,
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'docwell_register_postType' );

//Add Tx filter
new Tax_CTP_Filter(array(
    'docwell' => array('docwell_cat'),
	'docwell_items' => array('docwell_group'),
));


//Add Column
$type_columns = new CPT_columns('docwell_items');
$type_columns->add_column('group',
    array(
        'label'    => __('Group'),
        'type'     => 'custom_tax',
        'taxonomy' => 'docwell_group',
        'sortable' => true,
        'prefix' => "",
        'suffix' => ""
    )
);