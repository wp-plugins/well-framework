<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'row';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'row';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'bg_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Row Background Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'bg_image',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Row Background Image Url', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'bg_repeat',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Row Background Image Repeat', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'no-repeat',
		'multiple' => false,
		'content' => false,
		'option' => array('no-repeat', 'inherit', 'repeat', 'repeat-x', 'repeat-y'),
	),
	array(
		'id' => 'bg_position',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Row Background Image Position', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('top left', 'bottom center', 'inherit', 'right top', 'top', 'bottom', 'center', 'left', 'right', 'center top', 'center left', 'center right'),
	),
	array(
		'id' => 'bg_attachment',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Row Background Image Attachment', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('scroll', 'fixed', 'inherit'),
	),
	
	
	
	array(
		'id' => 'border_size',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Border Size', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '1px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'border_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Border Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#f1f1f1',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'padding_top',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Padding Top', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '20px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'padding_bottom',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Padding Bottom', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '20px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'text_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Text Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'heading_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Heading Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'link_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Link Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
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