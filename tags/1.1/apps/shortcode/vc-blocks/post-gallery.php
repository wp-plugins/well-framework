<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Post Gallery", 'well_textdomain'),
		"base" => "shortwell_post_gallery",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Id"),
				"param_name" => "id",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Class"),
				"param_name" => "class",
				"value" => '',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Column", 'well_textdomain'),
				"param_name" => "column",
				"value" => array(
					__("2", "well_textdomain") => "2",
					__("3", "well_textdomain") => "3",
					__("4", "well_textdomain") => "4",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Column Margin"),
				"param_name" => "column_margin",
				"value" => '2',
				"description" => ""
			),
		)
	));

endif;