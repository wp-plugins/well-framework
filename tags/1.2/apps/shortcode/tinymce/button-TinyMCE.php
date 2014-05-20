<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'button';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'button';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'color',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Color Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'default', 'red', 'orange', 'blue', 'black', 'pink', 'rosy', 'green', 'brown', 'purple', 'gold', 'teal'),
	),
	array(
		'id' => 'size',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Size', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( '1x', '2x', '3x', '4x', '5x'),
	),
	array(
		'id' => 'link',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Link', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#',
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
		'id' => 'title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Title', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	
	array(
		'id' => 'rel',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button rel', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'border_radius',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Radius', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'class',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button class', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'icon_left',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Icon Left', 'well_textdomain' ),
		'des' => '<small>Slect the icon or copy and past the icon from <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a> (EXAN : "fa-adjust" )</small>',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'icon_right',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Icon Right', 'well_textdomain' ),
		'des' => '<small>Slect the icon or copy and past the icon from <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a> (EXAN : "fa-adjust" )</small>',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'id',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Button id', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'bg_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Background color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'text_color',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Text color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'text',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Button Text', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'Button',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	array(
		'id' => 'full_width',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Button fullwidth', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( '', 'yes', 'no'),
	),
);
$tinyMCE->html();