<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Text Block", 'well_textdomain'),
		"base" => "shortwell_text_block",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Title"),
				"param_name" => "title",
				"value" => 'Nam vel tincidunt diam',
				"description" => ""
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Content"),
				"param_name" => "content",
				"value" => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.',
				"description" => ""
			),
		)
	));

endif;