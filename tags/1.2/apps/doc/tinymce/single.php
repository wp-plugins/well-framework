<?php
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'well_portfolio_single';
$tinyMCE->shortcode = 'well_portfolio_single';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'ids',
		'field' => 'post-select', //text, textarea, select post-select, tax-select
		'title' => __( 'Portfolio ID', 'portwell_textdomain' ),
		'des' => '',
		'std' => '',
		'post_type' => 'portwell',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
);
$tinyMCE->html();