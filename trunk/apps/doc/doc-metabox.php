<?php
$gallery_mb = new WPAlchemy_MetaBox_Mod(array(
	'id' => 'docwell_items',
	'title' => __('Doc Items', 'gallerywell_textdomain'),
	'template' => DOCWELL_DRI . 'metaboxes/doc-items.php',
	'types' => array('docwell')
));

$prefix = 'docwell_';
$meta_box = array(
	'id'         => 'docwell_items_metabox',
	'title'      => __( 'Display Title', 'well_textdomain' ),
	'pages'      => array( 'docwell_items', ), // Post type
	'context'    => 'normal',
	'priority'   => 'high',
	'show_names' => true, // Show field names on the left
	'fields'     => array(),
);
$meta_box['fields'][] = array(
	'name' => __( 'Display Title', 'well_textdomain' ),
	'desc' => '',
	'id'   => $prefix . 'title',
	'type' => 'text',
);
new cmb_Meta_Box($meta_box);