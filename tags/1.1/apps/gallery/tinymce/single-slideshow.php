<?php
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'well_gallery_single_slideshow';
$tinyMCE->shortcode = 'well_gallery_single_slideshow';
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
);
$tinyMCE->html();