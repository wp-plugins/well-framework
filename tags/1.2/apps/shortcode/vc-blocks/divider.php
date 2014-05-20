<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Divider", 'well_textdomain'),
		"base" => "shortwell_divider",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Divider Style", 'well_textdomain'),
				"param_name" => "style",
				"value" => array(
					__("None", "well_textdomain") => "none",
					__("Single", "well_textdomain") => "single",
					__("Double", "well_textdomain") => "double",
					__("Dotted", "well_textdomain") => "dotted",
					__("Dashed", "well_textdomain") => "dashed",
					__("Shadow", "well_textdomain") => "shadow",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Margin Top"),
				"param_name" => "margin_top",
				"value" => '20px',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Margin Bottom"),
				"param_name" => "margin_bottom",
				"value" => '2px',
				"description" => ""
			),
		)
	));

endif;