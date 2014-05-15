<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'heading';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'heading';
$tinyMCE->content = true;
$tinyMCE->options = array(	
	array(
		'id' => 'title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Title', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Nam vel tincidunt diam',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'sub_title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Sub Title', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'style',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Heading Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'none', 'style-1', 'style-2', 'style-3', 'style-4', 'style-5', 'style-6', 'style-7'),
	),	
	array(
		'id' => 'align',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Heading Text Align', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'ws_heading_left', 'ws_heading_right', 'ws_heading_center'),
	),	
	array(
		'id' => 'h1_h6',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Select Heading H1 / H2 / H3 / H4 / H5 / H6', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
	),
	array(
		'id' => 'border_color',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Border Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#f1f1f1',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
);
$tinyMCE->html();