<?php
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'well_logo_grid';
$tinyMCE->shortcode = 'well_logo_grid';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'ids',
		'field' => 'post-select', //text, textarea, select post-select, tax-select
		'title' => __( 'Logo IDs', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => 'logowell',
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
		'taxonomy' => 'logowell_cat',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'limit',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Post Limit', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => '',
		'multiple' => true,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'pagination',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Pagination', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('yes','no'),
	),
	array(
		'id' => 'column',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Columns', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array(2,3,4,5),
	),
	array(
		'id' => 'column_margin',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Column Margin', 'well_textdomain' ),
		'des' => '',
		'std' => '3',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'filter',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Filter', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('no','yes'),
	),
);
$tinyMCE->html();