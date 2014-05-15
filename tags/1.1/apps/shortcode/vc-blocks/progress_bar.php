<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Progress Bar", 'well_textdomain'),
		"base" => "shortwell_progress",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Filled Color"),
				"param_name" => "filled_color",
				"value" => '#45b900',
				"description" => "Add Filled Color EXAM: #000000"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Unfilled Color"),
				"param_name" => "unfilled_color",
				"value" => '#f1f1f1',
				"description" => "Add Unfilled Color EXAM: #000000"
			),
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