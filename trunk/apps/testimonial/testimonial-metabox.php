<?php
$prefix = 'tmwell_';
$meta_box = array(
	'id'         => 'tmwell_metabox',
	'title'      => __( 'Testimonial Info', 'well_textdomain' ),
	'pages'      => array( 'tmwell', ), // Post type
	'context'    => 'normal',
	'priority'   => 'high',
	'show_names' => true, // Show field names on the left
	// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
	'fields'     => array(),
);
/*$meta_box['fields'][] = array(
	'name' => __( 'Company Name', 'well_textdomain' ),
	'desc' => '',
	'id'   => $prefix . 'company',
	'type' => 'text',
	// 'repeatable' => true,
	// 'on_front' => false, // Optionally designate a field to wp-admin only
);*/
$meta_box['fields'][] = array(
	'name' => __( 'Position', 'well_textdomain' ),
	'desc' => '',
	'id'   => $prefix . 'position',
	'type' => 'text',
	// 'repeatable' => true,
	// 'on_front' => false, // Optionally designate a field to wp-admin only
);
/*$meta_box['fields'][] = array(
	'name' => __( 'Link', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'link',
	'type' => 'text',
	// 'repeatable' => true,
	// 'on_front' => false, // Optionally designate a field to wp-admin only
);*/
new cmb_Meta_Box($meta_box);