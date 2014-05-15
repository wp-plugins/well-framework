<?php
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'well_portfolio_slideshow';
$tinyMCE->shortcode = 'well_portfolio_slideshow';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'ids',
		'field' => 'post-select', //text, textarea, select post-select, tax-select
		'title' => __( 'Portfolio IDs', 'portwell_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => 'portwell',
		'multiple' => true,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'cat',
		'field' => 'tax-select', //text, textarea, select post-select, tax-select
		'title' => __( 'Category', 'portwell_textdomain' ),
		'des' => '',
		'std' => '',
		'taxonomy' => 'portwell_cat',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'limit',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Post Limit', 'portwell_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => '',
		'multiple' => true,
		'content' => false,
		'option' => '',
	),
);
$tinyMCE->html();