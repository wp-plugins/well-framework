<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Fontawesome Icon", 'well_textdomain'),
		"base" => "shortwell_icon",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon"),
				"param_name" => "icon",
				"value" => 'fa-heart',
				"description" => __("Slect the icon or copy and past the icon from a <href='http://fontawesome.io/cheatsheet/' target='_blank'>Font Awesome</a> EXAN fa-adjust"),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Color"),
				"param_name" => "color",
				"value" => '',
				"description" => "Add the color here . EX: #000000"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Style", 'well_textdomain'),
				"param_name" => "style",
				"value" => array(
					__("None", "well_textdomain") => "none",
					__("Background", "well_textdomain") => "background",
					__("Border", "well_textdomain") => "border",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Shape", 'well_textdomain'),
				"param_name" => "shape",
				"value" => array(
					__("", "well_textdomain") => "",
					__("Shape", "well_textdomain") => "shape",
					__("Round", "well_textdomain") => "round",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Size", 'well_textdomain'),
				"param_name" => "size",
				"value" => array(
					__("2x", "well_textdomain") => "2x",
					__("1x", "well_textdomain") => "1x",
					__("3x", "well_textdomain") => "3x",
					__("4x", "well_textdomain") => "4x",
					__("5x", "well_textdomain") => "5x",
					__("6x", "well_textdomain") => "6x",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Effect", 'well_textdomain'),
				"param_name" => "effect",
				"value" => array(
					__("", "well_textdomain") => "",
					__("Fade", "well_textdomain") => "fade",
					__("Rotate", "well_textdomain") => "rotate",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Link"),
				"param_name" => "link",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Link Target", 'well_textdomain'),
				"param_name" => "link_target",
				"value" => array(
					__("_self", "well_textdomain") => "_self",
					__("_blank", "well_textdomain") => "_blank",
					__("_new", "well_textdomain") => "_new",
					__("_parent", "well_textdomain") => "_parent",
					__("_top", "well_textdomain") => "_top",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Align", 'well_textdomain'),
				"param_name" => "align",
				"value" => array(
					__("", "well_textdomain") => "",
					__("None", "well_textdomain") => "none",
					__("Left", "well_textdomain") => "left",
					__("Right", "well_textdomain") => "right",
					__("Center", "well_textdomain") => "center",
				),
				"description" => ''
			),
		)
	));

endif;