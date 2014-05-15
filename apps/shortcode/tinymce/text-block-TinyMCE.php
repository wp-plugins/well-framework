<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'text_block';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'text_block';
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
		'id' => 'content',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Content', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	
);
$tinyMCE->html();