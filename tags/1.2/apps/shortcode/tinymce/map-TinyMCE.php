<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'map';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'map';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'address',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Addpress', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'type',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Type', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'satellite'),
	),
	array(
		'id' => 'width',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Width', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '100%',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'height',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Height', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '300px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'zoom',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Zoom', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '14',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'scrollwheel',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Scroll Wheel', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('true', 'false'),
	),
	array(
		'id' => 'scale',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Scale', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('true', 'false'),
	),
	array(
		'id' => 'popup',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Popup', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('true', 'false'),
	),
	array(
		'id' => 'zoom_pancontrol',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Zoom Pancontrol', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('true', 'false'),
	),
	
);
$tinyMCE->html();