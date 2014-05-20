<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Button", 'well_textdomain'),
		"base" => "shortwell_button",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Text"),
				"param_name" => "text",
				"value" => 'Button',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Color Style", 'well_textdomain'),
				"param_name" => "color",
				"value" => array(
					__("default", "well_textdomain") => "default",
					__("Red", "well_textdomain") => "red",
					__("Orange", "well_textdomain") => "orange",
					__("Blue", "well_textdomain") => "blue",
					__("Black", "well_textdomain") => "black",
					__("Pink", "well_textdomain") => "pink",
					__("Rosy", "well_textdomain") => "rosy",
					__("Green", "well_textdomain") => "green",
					__("Brown", "well_textdomain") => "brown",
					__("Purple", "well_textdomain") => "purple",
					__("Gold", "well_textdomain") => "gold",
					__("Teal", "well_textdomain") => "teal",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Size", 'well_textdomain'),
				"param_name" => "size",
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
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Link"),
				"param_name" => "link",
				"value" => '',
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
				"heading" => __("Button Title"),
				"param_name" => "title",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Rel"),
				"param_name" => "rel",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Radius"),
				"param_name" => "border_radius",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Class"),
				"param_name" => "class",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Icon Left"),
				"param_name" => "icon_left",
				"value" => '',
				"description" => __("Slect the icon or copy and past the icon from http://fontawesome.io/cheatsheet EXAM fa-adjust"),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Icon Right"),
				"param_name" => "icon_right",
				"value" => '',
				"description" => __("Slect the icon or copy and past the icon from http://fontawesome.io/cheatsheet/ EXAM fa-adjust"),
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("id"),
				"param_name" => "id",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Background color"),
				"param_name" => "bg_color",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Button Text color"),
				"param_name" => "text_color",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Buttom fullwidth", 'well_textdomain'),
				"param_name" => "full_width",
				"value" => array(
					__("", "well_textdomain") => "",
					__("Yes", "well_textdomain") => "yes",
					__("No", "well_textdomain") => "no",
				),
				"description" => ''
			),
		)
	));

endif;