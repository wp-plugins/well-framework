<?php
$logowell_TinyMCE = new Easy_TinyMCE_Class;
$logowell_TinyMCE->title = 'Well Testimonial Shortcodes';
$logowell_TinyMCE->js_url = LOGOWELL_URL.'tinymce/tinyMCE-plugin.js';
$logowell_TinyMCE->uid = 'logowell';
$logowell_TinyMCE->templates = array(
	array('name'=> 'Logo [Grid]', 'url'=> LOGOWELL_DRI.'tinymce/grid.php'),
	array('name'=> 'Logo [Slideshow]', 'url'=> LOGOWELL_DRI.'tinymce/slideshow.php'),
	array('name'=> 'Logo [Carousel]', 'url'=> LOGOWELL_DRI.'tinymce/carousel.php'),
);