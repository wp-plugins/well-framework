<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'counter_box';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'counter_box';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'value',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Value', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '70',
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
		'std' => '',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),	
	
);
$tinyMCE->html();