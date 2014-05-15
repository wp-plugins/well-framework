<?php
$docwell_TinyMCE = new Easy_TinyMCE_Class;
$docwell_TinyMCE->title = 'Well Portfolio Shortcodes';
$docwell_TinyMCE->js_url = PORTWELL_URL.'tinymce/tinyMCE-plugin.js';
$docwell_TinyMCE->uid = 'docwell';
$docwell_TinyMCE->templates = array(
	array('name'=> 'Portfolio [Grid]', 'url'=> PORTWELL_DRI.'tinymce/doc.php'),
);