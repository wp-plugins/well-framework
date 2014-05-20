<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'image';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'image';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'class',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Class', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'src',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Image src/link', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'radius',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Radius', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '0px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'height',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Height', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'width',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Width', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'align',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Image Align', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('none', 'left', 'right', 'center'),
	),
	array(
		'id' => 'alt',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Image alt', 'well_textdomain' ),
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
		'title' => __( 'Image Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('none', 'dropshadow', 'border', 'glow'),
	),
	array(
		'id' => 'shadow_opacity',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Shadow Opacity', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '0.3',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'link',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Link ', 'well_textdomain' ),
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
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('_blank', '_new', '_parent', '_self', '_top'),
	),
	
	
	
	
	
	array(
		'id' => 'border_width',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'border width', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '8px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'border_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'border color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#f3f3f3',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	
	
);
$tinyMCE->html();