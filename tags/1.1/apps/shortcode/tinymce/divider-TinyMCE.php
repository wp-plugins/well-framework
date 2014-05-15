<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'divider';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'divider';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'style',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Divider Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'none', 'single', 'double', 'dotted', 'dashed', 'shadow'),
	),
	array(
		'id' => 'margin_top',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Margin Top', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '20px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'margin_bottom',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Margin Bottom', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '20px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),

);
$tinyMCE->html();