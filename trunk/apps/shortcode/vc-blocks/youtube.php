<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Youtube", 'well_textdomain'),
		"base" => "shortwell_youtube",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Youtube Video id"),
				"param_name" => "id",
				"value" => '7GrodWcxpP0',
				"description" => "Example: 7GrodWcxpP0"
			),
/*			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Youtube Video Width"),
				"param_name" => "width",
				"value" => '',
				"description" => "600"
			),*/
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Youtube Video Height"),
				"param_name" => "height",
				"value" => '360',
				"description" => ""
			),
		)
	));

endif;