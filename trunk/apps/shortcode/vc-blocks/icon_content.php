<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Icon Content", 'well_textdomain'),
		"base" => "shortwell_icon_content",
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
				"value" => 'fa-home',
				"description" => __("Slect the icon or copy and past the icon from a http://fontawesome.io/cheatsheet/ EXAM: fa-adjust"),
			),
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
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Style", 'well_textdomain'),
				"param_name" => "style",
				"value" => array(
					__("None", "well_textdomain") => "none",
					__("Style 1", "well_textdomain") => "icon-style-1",
					__("Style 2", "well_textdomain") => "icon-style-2",
					__("Style 3", "well_textdomain") => "icon-style-3",
					__("Style 4", "well_textdomain") => "icon-style-4",
				),
				"description" => ''
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Content"),
				"param_name" => "content",
				"value" => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.',
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
				"heading" => __("Link Target", 'well_textdomain'),
				"param_name" => "link_target",
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
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("CSS Animation", 'well_textdomain'),
				"param_name" => "css_animation",
				"value" => array(
					__("No", "well_textdomain") => "no",
					__("Top to bottom", "well_textdomain") => "wpb_animate_when_almost_visible wpb_top-to-bottom",
					__("Bottom to top", "well_textdomain") => "wpb_animate_when_almost_visible wpb_bottom-to-top",
					__("Left to right", "well_textdomain") => "wpb_animate_when_almost_visible wpb_left-to-right",
					__("Right to left", "well_textdomain") => "wpb_animate_when_almost_visible wpb_right-to-left",
					__("Appear from center", "well_textdomain") => "wpb_animate_when_almost_visible wpb_appear",
				),
				"description" => ''
			),		
		)
	));

endif;