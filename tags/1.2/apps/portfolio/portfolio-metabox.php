<?php
$prefix = 'portwell_';
$meta_box = array(
	'id'         => 'portwell_metabox',
	'title'      => __( 'Portfolio Options', 'well_textdomain' ),
	'pages'      => array( 'portwell', ), // Post type
	'context'    => 'normal',
	'priority'   => 'high',
	'show_names' => true, // Show field names on the left
	'fields'     => array(),
);
$meta_box['fields'][] = array(
	'name' => __( 'Video Code', 'well_textdomain' ),
	'desc' => '',
	'id'   => $prefix . 'company',
	'type' => 'textarea',
);
/*$meta_box['fields'][] = array(
	'name' => __( 'External Link', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'link',
	'type' => 'text',
);*/
$meta_box['fields'][] = array(
	'name' => __( 'Skills Needed', 'well_textdomain' ),
	'desc' => __( 'Example: <code>html, css , PHP</code>', 'well_textdomain' ),
	'id'   => $prefix . 'skills',
	'type' => 'text',
);
$meta_box['fields'][] = array(
	'name' => __( 'Website URL', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'link',
	'type' => 'text',
);
$meta_box['fields'][] = array(
	'name' => __( 'Copyright Text', 'well_textdomain' ),
	'desc' => __( 'Example: <code>Ashik</code>', 'well_textdomain' ),
	'id'   => $prefix . 'copText',
	'type' => 'text',
);
$meta_box['fields'][] = array(
	'name' => __( 'Copyright URL', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'copyrightlink',
	'type' => 'text',
);
new cmb_Meta_Box($meta_box);