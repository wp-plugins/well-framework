<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'tabgroup';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'tabgroup';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'content',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Content', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '['.SHORTWELL_SHORTCODE_PREFIX.'tab title="Tab One"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'tab]
		['.SHORTWELL_SHORTCODE_PREFIX.'tab title="Tab Two"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'tab]
		['.SHORTWELL_SHORTCODE_PREFIX.'tab title="Tab Three"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'tab]',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	
);
$tinyMCE->html();