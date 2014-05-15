<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Map", 'well_textdomain'),
		"base" => "shortwell_map",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Address"),
				"param_name" => "address",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Map Type", 'well_textdomain'),
				"param_name" => "type",
				"value" => array(
					__("Satellite", "well_textdomain") => "satellite",
					__("Roadmap", "well_textdomain") => "roadmap",
					__("Hybrid", "well_textdomain") => "hybrid",
					__("Terrain", "well_textdomain") => "terrain",
				),
				"description" => ''
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
				"value" => '300px',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("zoom"),
				"param_name" => "zoom",
				"value" => '14',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Scroll Wheel", 'well_textdomain'),
				"param_name" => "scrollwheel",
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
				"heading" => __("Scale", 'well_textdomain'),
				"param_name" => "scale",
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
				"heading" => __("Popup", 'well_textdomain'),
				"param_name" => "popup",
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
				"heading" => __("Zoom Pancontrol", 'well_textdomain'),
				"param_name" => "zoom_pancontrol",
				"value" => array(
					__("True", "well_textdomain") => "true",
					__("False", "well_textdomain") => "false",
				),
				"description" => ''
			),
		)
	));

endif;