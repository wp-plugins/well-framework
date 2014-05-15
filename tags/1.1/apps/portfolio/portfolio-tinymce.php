<?php
$portwell_TinyMCE = new Easy_TinyMCE_Class;
$portwell_TinyMCE->title = 'Well Portfolio Shortcodes';
$portwell_TinyMCE->js_url = PORTWELL_URL.'tinymce/tinyMCE-plugin.js';
$portwell_TinyMCE->uid = 'portwell';
$portwell_TinyMCE->templates = array(
	array('name'=> 'Portfolio [Grid]', 'url'=> PORTWELL_DRI.'tinymce/grid.php'),
	array('name'=> 'Portfolio [Slideshow]', 'url'=> PORTWELL_DRI.'tinymce/slideshow.php'),
	array('name'=> 'Portfolio [Carousel]', 'url'=> PORTWELL_DRI.'tinymce/carousel.php'),
	array('name'=> 'Portfolio Single', 'url'=> PORTWELL_DRI.'tinymce/single.php'),
);