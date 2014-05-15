<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Alert", 'well_textdomain'),
		"base" => "shortwell_alert",
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
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Type", 'well_textdomain'),
				"param_name" => "type",
				"value" => array(
					__("Info", "well_textdomain") => "info",
					__("Danger", "well_textdomain") => "danger",
					__("Success", "well_textdomain") => "success",
					__("Error", "well_textdomain") => "error",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Enable Close", 'well_textdomain'),
				"param_name" => "close",
				"value" => array(
					__("Yes", "well_textdomain") => "yes",
					__("No", "well_textdomain") => "no",
				),
				"description" => ''
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