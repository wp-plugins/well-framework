<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Heading", 'well_textdomain'),
		"base" => "shortwell_heading",
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
				"description" => '',
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Sub Title"),
				"param_name" => "sub_title",
				"value" => '',
				"description" => '',
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Style", 'well_textdomain'),
				"param_name" => "style",
				"value" => array(
					__("None", "well_textdomain") => "none",
					__("Style 1", "well_textdomain") => "style-1",
					__("Style 2", "well_textdomain") => "style-2",
					__("Style 3", "well_textdomain") => "style-3",
					__("Style 4", "well_textdomain") => "style-4",
					__("Style 5", "well_textdomain") => "style-5",
					__("Style 6", "well_textdomain") => "style-6",
					__("Style 7", "well_textdomain") => "style-7",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Style", 'well_textdomain'),
				"param_name" => "align",
				"value" => array(
					__("Left", "well_textdomain") => "ws_heading_left",
					__("Right", "well_textdomain") => "ws_heading_right",
					__("Center", "well_textdomain") => "ws_heading_center",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Heading H1 / H2 / H3 / H4 / H5 / H6", 'well_textdomain'),
				"param_name" => "h1_h6",
				"value" => array(
					__("H1", "well_textdomain") => "h1",
					__("H2", "well_textdomain") => "h2",
					__("H3", "well_textdomain") => "h3",
					__("H4", "well_textdomain") => "h4",
					__("H5", "well_textdomain") => "h5",
					__("H6", "well_textdomain") => "h6",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Border Color"),
				"param_name" => "border_color",
				"value" => '#f1f1f1',
				"description" => '',
			),
		)
	));

endif;