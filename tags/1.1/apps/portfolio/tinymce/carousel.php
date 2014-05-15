<?php
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'well_portfolio_carousel';
$tinyMCE->shortcode = 'well_portfolio_carousel';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'ids',
		'field' => 'post-select', //text, textarea, select post-select, tax-select
		'title' => __( 'Portfolio IDs', 'well_textdomain' ),
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
		'title' => __( 'Category', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'taxonomy' => 'portwell_cat',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'item_margin',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Item margin', 'well_textdomain' ),
		'des' => '',
		'std' => '10',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'min_items',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Min items', 'well_textdomain' ),
		'des' => '',
		'std' => '2',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array(2,3,4,5),
	),
	array(
		'id' => 'max_items',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Max items', 'well_textdomain' ),
		'des' => '',
		'std' => '4',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array(2,3,4,5),
	),
	
);
$tinyMCE->html();