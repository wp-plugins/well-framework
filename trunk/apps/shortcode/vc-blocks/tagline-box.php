<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Tagline Box", 'well_textdomain'),
		"base" => "shortwell_tagline_box",
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
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Link"),
				"param_name" => "link",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Align", 'well_textdomain'),
				"param_name" => "align",
				"value" => array(
					__("None", "well_textdomain") => "none",
					__("Left", "well_textdomain") => "left",
					__("Right", "well_textdomain") => "right",
					__("Center", "well_textdomain") => "center",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Margin"),
				"param_name" => "button_margin",
				"value" => '30px',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Border Highlight", 'well_textdomain'),
				"param_name" => "border_highlight",
				"value" => array(
					__("Top", "well_textdomain") => "top",
					__("Left", "well_textdomain") => "left",
					__("Right", "well_textdomain") => "right",
					__("Bottom", "well_textdomain") => "bottom",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Shadow", 'well_textdomain'),
				"param_name" => "shadow",
				"value" => array(
					__("Yes", "well_textdomain") => "yes",
					__("No", "well_textdomain") => "no",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Text"),
				"param_name" => "button",
				"value" => 'Read More',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Link Target", 'well_textdomain'),
				"param_name" => "target",
				"value" => array(
					__("_blank", "well_textdomain") => "_blank",
					__("_new", "well_textdomain") => "_new",
					__("_parent", "well_textdomain") => "_parent",
					__("_self", "well_textdomain") => "_self",
					__("_top", "well_textdomain") => "_top",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button class"),
				"param_name" => "class",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Size", 'well_textdomain'),
				"param_name" => "button_size",
				"value" => array(
					__("1x", "well_textdomain") => "1x",
					__("2x", "well_textdomain") => "2x",
					__("3x", "well_textdomain") => "3x",
					__("4x", "well_textdomain") => "4x",
					__("5x", "well_textdomain") => "5x",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Border", 'well_textdomain'),
				"param_name" => "border",
				"value" => array(
					__("Yes", "well_textdomain") => "yes",
					__("No", "well_textdomain") => "no",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Shadow Opacity"),
				"param_name" => "shadow_opacity",
				"value" => '1',
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