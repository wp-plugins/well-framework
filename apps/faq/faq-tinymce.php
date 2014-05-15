<?php
$faqwell_TinyMCE = new Easy_TinyMCE_Class;
$faqwell_TinyMCE->title = 'Well Faq Shortcodes';
$faqwell_TinyMCE->js_url = FAQWELL_URL.'tinymce/tinyMCE-plugin.js';
$faqwell_TinyMCE->uid = 'faqwell';
$faqwell_TinyMCE->templates = array(
	array('name'=> 'FAQ', 'url'=> FAQWELL_DRI.'tinymce/grid.php'),
);