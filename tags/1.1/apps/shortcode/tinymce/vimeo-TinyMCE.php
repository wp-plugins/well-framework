<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'vimeo';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'vimeo';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'id',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Youtube Video Id', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
/*	array(
		'id' => 'width',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Width', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '600',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),*/
	array(
		'id' => 'height',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Height', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '360',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),	
);
$tinyMCE->html();