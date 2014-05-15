<?php
$prefix = 'peowell_';
$meta_box = array(
	'id'         => 'peowell_metabox',
	'title'      => __( 'Aditional Information', 'well_textdomain' ),
	'pages'      => array( 'peowell', ), // Post type
	'context'    => 'normal',
	'priority'   => 'high',
	'show_names' => true, // Show field names on the left
	'fields'     => array(),
);
$meta_box['fields'][] = array(
	'name' => __( 'Jop Title', 'well_textdomain' ),
	'desc' => __( 'The Job description, position or functions of this member', 'well_textdomain' ),
	'id'   => $prefix . 'job_title',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Email', 'well_textdomain' ),
	'desc' => __( 'Contact email for this member.', 'well_textdomain' ),
	'id'   => $prefix . 'email',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Location', 'well_textdomain' ),
	'desc' => __( 'Location / Origin / Address of the member.', 'well_textdomain' ),
	'id'   => $prefix . 'location',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Phone', 'well_textdomain' ),
	'desc' => __( 'Phone Contact Number', 'well_textdomain' ),
	'id'   => $prefix . 'phone',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Personal Website', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'site_link',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( '<h2>SOCIAL PROFILES</h2>', 'well_textdomain' ),
	'desc' => __( 'Use the full URL of the profile page. Example http://www.facebook.com/profile', 'well_textdomain' ),
	'id'   => $prefix . 'social',
	'type' => 'textblock',
);

$meta_box['fields'][] = array(
	'name' => __( 'Linkedin', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'linkedin',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Facebook', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'facebook',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Twitter', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'twitter',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Google Plus', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'plus',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Vimeo', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'vimeo',
	'type' => 'text',
);

$meta_box['fields'][] = array(
	'name' => __( 'Youtube', 'well_textdomain' ),
	'desc' => __( 'Please include the full URL including <code>http://</code>', 'well_textdomain' ),
	'id'   => $prefix . 'youtube',
	'type' => 'text',
);
new cmb_Meta_Box($meta_box);