<?php
/*------------Start Edting------------*/
$tinyMCE = new Easy_TinyMCE_Class_content;
$tinyMCE->id = 'checklist';
$tinyMCE->shortcode = SHORTWELL_SHORTCODE_PREFIX.'checklist';
$tinyMCE->content = true;
$tinyMCE->options = array(
	array(
		'id' => 'icon',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Style', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'multiple' => false,
		'content' => false,
		'option' => array( 'arrow', 'check', 'star', 'asterik', 'cross', 'plus'),
	),
	array(
		'id' => 'iconcolor',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => 'initial',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'iconbg',
		'field' => 'color', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Background Color', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'iconsize',
		'field' => 'text', //text, textarea, select post-select, tax-select
		'title' => __( 'Icon Size', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '9px',
		'multiple' => false,
		'content' => false,
		'option' => '',
	),
	array(
		'id' => 'circle',
		'field' => 'select', //text, textarea, select post-select, tax-select
		'title' => __( 'Circle', 'well_textdomain' ),
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
		'title' => __( 'Content', 'well_textdomain' ),
		'des' => '',
		'post_type' => '',
		'std' => '<ul>
	<li>Etiam suscipit lectus ac dui venenatis placerat.</li>
	<li>Pellentesque ac nulla ipsum. Nunc vitae elit felis.</li>
	<li>Duis facilisis dapibus tortor, ac sollicitudin ipsum venenatis in.</li>
	<li>Curabitur elit lacus, cursus at nunc sit amet, rutrum molestie odio.</li>
</ul>',
		'multiple' => false,
		'content' => true,
		'option' => '',
	),	
);
$tinyMCE->html();