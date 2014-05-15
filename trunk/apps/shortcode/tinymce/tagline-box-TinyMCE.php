<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'tagline_box';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'tagline_box';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Title', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
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
		'id' => 'align',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Align', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'left', 'right', 'center'),
	),
	array(
		'id' => 'button_margin',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Margin', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '30px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'border_highlight',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Border Highlight', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#E2E2E2',
		'multiple' => false,
		'content' => false,
		'option' => array('top', 'left', 'right', 'bottom', 'none'),
	),
	array(
		'id' => 'shadow',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Shadow', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('', 'yes', 'no'),
	),
	array(
		'id' => 'button',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Text', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Read More',
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
	
	array(
		'id' => 'class',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Div Class', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'button_size',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Size', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('3x', '1x', '2x', '4x', '5x'),
	),
	array(
		'id' => 'border',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Border', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '1px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'shadow_opacity',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Shadow Opacity', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '1',
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