<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Soundcloud Audio", 'well_textdomain'),
		"base" => "shortwell_soundcloud",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Soundcloud Audio Url"),
				"param_name" => "url",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Width"),
				"param_name" => "width",
				"value" => '100%',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Height"),
				"param_name" => "height",
				"value" => '81',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Comments", 'well_textdomain'),
				"param_name" => "comments",
				"value" => array(
					__("True", "well_textdomain") => "true",
					__("False", "well_textdomain") => "false",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Auto Play", 'well_textdomain'),
				"param_name" => "auto_play",
				"value" => array(
					__("True", "well_textdomain") => "true",
					__("False", "well_textdomain") => "false",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Color"),
				"param_name" => "color",
				"value" => '#ff7700',
				"description" => ""
			),
		)
	));

endif;