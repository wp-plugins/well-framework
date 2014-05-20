<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'dropcap';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'dropcap';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'style',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'none', 'circle', 'box', 'round'),
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