<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'soundcloud';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'soundcloud';
$tinyMCE->content = false;
$tinyMCE->options = array(
	array(
		'id' => 'url',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Audio url', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'width',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Width', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '100%',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'height',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Height', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '81',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'comments',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'comments', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'true', 'false'),
	),
	array(
		'id' => 'auto_play',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Auto Play', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'true', 'false'),
	),
	array(
		'id' => 'color',
		'field' => 'color', //text, textarea, select post-select, tax-select, color
		'title' => __( 'Color', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '#ff7700',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	
);
$tinyMCE->html();