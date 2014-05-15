<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'icon';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'icon';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'icon',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon', 'well_textdomain' ),
		'des' => '<small>Slect the icon or copy and past the icon from <a href="http://fontawesome.io/cheatsheet/" target="_blank">Font Awesome</a> (EXAN : "fa-adjust" )</small>',
		'post_type' => '',
		'std' => 'fa-heart',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
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
		'std' => '#',
		'multiple' => false,
		'content' => false,
		'option' => array( 'none', 'background', 'border'),
	),
	array(
		'id' => 'shape',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Shape', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( '', 'circle', 'round'),
	),
	array(
		'id' => 'size',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Size', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( '2x', '1x', '3x', '4x', '5x', '6x'),
	),
	array(
		'id' => 'effect',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Effect', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'fade', 'rotate'),
	),
	array(
		'id' => 'link',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Link', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'link_target',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Link Target', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( '_self', '_blank', '_self'),
	),	
	
	array(
		'id' => 'align',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Align', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( '', 'none', 'left', 'right', 'center'),
	),
	
	
);
$tinyMCE->html();