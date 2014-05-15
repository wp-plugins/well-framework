<?php
$tmwell_TinyMCE = new Easy_TinyMCE_Class;
$tmwell_TinyMCE->title = 'Well Testimonial Shortcodes';
$tmwell_TinyMCE->js_url = TMWELL_URL.'tinymce/tinyMCE-plugin.js';
$tmwell_TinyMCE->uid = 'tmwell';
$tmwell_TinyMCE->templates = array(
	array('name'=> 'Testimonial [Grid]', 'url'=> TMWELL_DRI.'tinymce/grid.php'),
	array('name'=> 'Testimonial [Slideshow]', 'url'=> TMWELL_DRI.'tinymce/slideshow.php'),
	array('name'=> 'Testimonial [Carousel]', 'url'=> TMWELL_DRI.'tinymce/carousel.php'),
);