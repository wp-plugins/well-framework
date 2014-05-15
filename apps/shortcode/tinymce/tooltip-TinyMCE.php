<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'tooltip';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'tooltip';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Title', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'none',
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