<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'progress';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'progress';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'filled_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Filled Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#45b900',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'unfilled_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Unfilled Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#f1f1f1',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
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