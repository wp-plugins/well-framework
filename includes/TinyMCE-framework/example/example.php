<?php
$shortwell_TinyMCE = new Easy_TinyMCE_Class;
$shortwell_TinyMCE->title = 'Shotcode Title';
$shortwell_TinyMCE->js_url = et_template_directory_uri().'tinymce/tinyMCE-plugin.js';
$shortwell_TinyMCE->uid = 'shortcode_is';
$shortwell_TinyMCE->templates = array(
	array('name'=> 'Soundcloud', 'url'=> get_template_directory().'tinymce/audio-TinyMCE.php'),
	array('name'=> 'Alert', 'url'=> get_template_directory().'tinymce/alert-TinyMCE.php'),	
);