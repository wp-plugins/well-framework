<?php
$shortwell_TinyMCE = new Easy_TinyMCE_Class;
$shortwell_TinyMCE->title = 'Well Shortcodes';
$shortwell_TinyMCE->js_url = SHORTWELL_URL.'tinymce/tinyMCE-plugin.js';
$shortwell_TinyMCE->uid = 'shortwell';
$shortwell_TinyMCE->templates = array(
	array('name'=> 'Soundcloud', 'url'=> SHORTWELL_DRI.'tinymce/audio-TinyMCE.php'),
	array('name'=> 'Alert', 'url'=> SHORTWELL_DRI.'tinymce/alert-TinyMCE.php'),	
	array('name'=> 'Accordion', 'url'=> SHORTWELL_DRI.'tinymce/accordion-TinyMCE.php'),	
	array('name'=> 'Button', 'url'=> SHORTWELL_DRI.'tinymce/button-TinyMCE.php'),	
	array('name'=> 'Checklist', 'url'=> SHORTWELL_DRI.'tinymce/checklist-TinyMCE.php'),	
	array('name'=> 'Column', 'url'=> SHORTWELL_DRI.'tinymce/column-TinyMCE.php'),	
	array('name'=> 'Icon Content', 'url'=> SHORTWELL_DRI.'tinymce/icon-content-TinyMCE.php'),	
	array('name'=> 'Text Block', 'url'=> SHORTWELL_DRI.'tinymce/text-block-TinyMCE.php'),	
	array('name'=> 'Divider', 'url'=> SHORTWELL_DRI.'tinymce/divider-TinyMCE.php'),	
	array('name'=> 'Dropcap', 'url'=> SHORTWELL_DRI.'tinymce/dropcap-TinyMCE.php'),	
	array('name'=> 'Font Awesome', 'url'=> SHORTWELL_DRI.'tinymce/font-awesome-TinyMCE.php'),	
	array('name'=> 'Highlight', 'url'=> SHORTWELL_DRI.'tinymce/highlight-TinyMCE.php'),	
	array('name'=> 'Image', 'url'=> SHORTWELL_DRI.'tinymce/image-TinyMCE.php'),	
	array('name'=> 'Lightbox', 'url'=> SHORTWELL_DRI.'tinymce/lightbox-TinyMCE.php'),	
	array('name'=> 'Map', 'url'=> SHORTWELL_DRI.'tinymce/map-TinyMCE.php'),	
	array('name'=> 'Parallax Row / Row', 'url'=> SHORTWELL_DRI.'tinymce/parallax-TinyMCE.php'),	
	array('name'=> 'Progress Bar', 'url'=> SHORTWELL_DRI.'tinymce/progress-bar-TinyMCE.php'),	
	array('name'=> 'Counter Circle', 'url'=> SHORTWELL_DRI.'tinymce/counter-circle-TinyMCE.php'),
	array('name'=> 'Counter Box', 'url'=> SHORTWELL_DRI.'tinymce/counter-box-TinyMCE.php'),	
	array('name'=> 'Tab', 'url'=> SHORTWELL_DRI.'tinymce/tab-TinyMCE.php'),	
	array('name'=> 'Tagline Box', 'url'=> SHORTWELL_DRI.'tinymce/tagline-box-TinyMCE.php'),		
	array('name'=> 'Toggle', 'url'=> SHORTWELL_DRI.'tinymce/toggle-TinyMCE.php'),	
	array('name'=> 'Tooltip', 'url'=> SHORTWELL_DRI.'tinymce/tooltip-TinyMCE.php'),	
	array('name'=> 'Vimeo', 'url'=> SHORTWELL_DRI.'tinymce/vimeo-TinyMCE.php'),	
	array('name'=> 'Youtube', 'url'=> SHORTWELL_DRI.'tinymce/youtube-TinyMCE.php'),	
	array('name'=> 'Post List', 'url'=> SHORTWELL_DRI.'tinymce/post-list-TinyMCE.php'),	
	array('name'=> 'Heading', 'url'=> SHORTWELL_DRI.'tinymce/heading-TinyMCE.php'),	
);