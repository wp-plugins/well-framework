<?php
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'well_gallery_single_grid';
$tinyMCE->shortcode = 'well_gallery_single_grid';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'id',
		'field' => 'post-select', //text, textarea, select post-select, tax-select
		'title' => __( 'Gallery ID', 'well_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => 'gallerywell',
		'multiple' => false,
		'content' => false,
		'option' => '',
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
);
$tinyMCE->html();