<?php
$gallerywell_TinyMCE = new Easy_TinyMCE_Class;
$gallerywell_TinyMCE->title = 'Well Gallery Shortcodes';
$gallerywell_TinyMCE->js_url = GALLERYWELL_URL.'tinymce/tinyMCE-plugin.js';
$gallerywell_TinyMCE->uid = 'gallerywell';
$gallerywell_TinyMCE->templates = array(
	array('name'=> 'Gallery Single [Grid]', 'url'=> GALLERYWELL_DRI.'tinymce/single-grid.php'),
	array('name'=> 'Gallery Single [Slideshow]', 'url'=> GALLERYWELL_DRI.'tinymce/single-slideshow.php'),
	array('name'=> 'Gallery Single [Carousel]', 'url'=> GALLERYWELL_DRI.'tinymce/single-carousel.php'),
	
	array('name'=> 'Gallery Archive [Grid]', 'url'=> GALLERYWELL_DRI.'tinymce/archive-grid.php'),
	array('name'=> 'Gallery Archive [Slideshow]', 'url'=> GALLERYWELL_DRI.'tinymce/archive-slideshow.php'),
	array('name'=> 'Gallery Archive [Carousel]', 'url'=> GALLERYWELL_DRI.'tinymce/archive-carousel.php'),
);