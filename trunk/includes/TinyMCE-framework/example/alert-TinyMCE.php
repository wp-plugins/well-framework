<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'alert';
$tinyMCE->shortcode = 'alert';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'title',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Title', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'type',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Type', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('info', 'danger', 'success', 'error'),
	),
	array(
		'id' => 'close',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Close', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => array('yes', 'no'),
	),
	array(
		'id' => 'content',
		'field' => 'textarea', //text, textarea, select post-select, tax-select
		'title' => __( 'Content', 'zookit_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),
	
);
$tinyMCE->html();