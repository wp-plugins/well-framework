<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'column';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'column';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'size',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Lolumn size', 'shortwell_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'one-half', 'one-third', 'one-fourth', 'one-fifth', 'one-sixth', 'two-third', 'two-fifth', 'three-fourth', 'three-fifth', 'four-fifth', 'five-sixth'),
	),
	array(
		'id' => 'position',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Position', 'shortwell_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'first', 'last'),
	),
	array(
		'id' => 'class',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Div class', 'shortwell_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'content',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Content', 'shortwell_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	
);
$tinyMCE->html();