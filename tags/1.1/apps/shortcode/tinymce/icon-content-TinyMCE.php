<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'icon_content';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'icon_content';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'icon',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon ', 'well_textdomain' ),
		'des' => '<small>Slect the icon or copy and past the icon from <a href="http://fontawesome.io/cheatsheet/" target="_blank">Font Awesome</a> (EXAN : "fa-adjust" )</small>',
		'post_type' => '',
		'std' => 'fa-home',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Title', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Nam vel tincidunt diam',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'style',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'none', 'icon-style-1', 'icon-style-2', 'icon-style-3', 'icon-style-4'),
	),
	array(
		'id' => 'content',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Content', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	
	array(
		'id' => 'link',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Link', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'target',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Link Target', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#',
		'multiple' => false,
		'content' => false,
		'option' => array('_blank', '_new', '_parent', '_self', '_top'),
	),
	
	
);
$tinyMCE->html();