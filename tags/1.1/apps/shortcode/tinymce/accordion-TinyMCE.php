<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'accordion';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'accordion';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'class',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Div Class', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	
	array(
		'id' => 'link',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Link', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '['.SHORTWELL_SHORTCODE_PREFIX.'accordion_item title="Accordion 1"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'accordion_item]
		['.SHORTWELL_SHORTCODE_PREFIX.'accordion_item title="Accordion 1"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'accordion_item]
		['.SHORTWELL_SHORTCODE_PREFIX.'accordion_item title="Accordion 1"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'accordion_item]',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	
);
$tinyMCE->html();