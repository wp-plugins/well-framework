<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Counter Box", 'well_textdomain'),
		"base" => "shortwell_counter_box",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Value"),
				"param_name" => "value",
				"value" => '70',
				"description" => ""
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Content"),
				"param_name" => "content",
				"value" => '',
				"description" => ""
			),
		)
	));

endif;