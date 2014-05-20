<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'highlight';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'highlight';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'yellow',
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