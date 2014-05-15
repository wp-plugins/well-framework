<?php
$peowell_TinyMCE = new Easy_TinyMCE_Class;
$peowell_TinyMCE->title = 'Well People Shortcodes';
$peowell_TinyMCE->js_url = PEOWELL_URL.'tinymce/tinyMCE-plugin.js';
$peowell_TinyMCE->uid = 'peowell';
$peowell_TinyMCE->templates = array(
	array('name'=> 'People [Grid]', 'url'=> PEOWELL_DRI.'tinymce/grid.php'),
	array('name'=> 'People [Slideshow]', 'url'=> PEOWELL_DRI.'tinymce/slideshow.php'),
	array('name'=> 'People [Carousel]', 'url'=> PEOWELL_DRI.'tinymce/carousel.php'),
	array('name'=> 'People Single', 'url'=> PEOWELL_DRI.'tinymce/single.php'),
);