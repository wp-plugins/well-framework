<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Post List", 'well_textdomain'),
		"base" => "shortwell_post_list",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("IDs"),
				"param_name" => "ids",
				"value" => '',
				"description" => __("example: 1, 2, 3")
			),
			array(
				"type" => "post",
				"holder" => "div",
				"class" => "",
				"heading" => __("Post Category", 'well_textdomain'),
				"param_name" => "cat",
				"value" => '',
				"taxonomy" => 'category',
				"description" => __("Select a Category to display Post items form that category", "well_textdomain")
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Enable Category Filtering", 'well_textdomain'),
				"param_name" => "filter",
				"value" => array(
					__("No", "well_textdomain") => "no",
					__("Yes", "well_textdomain") => "yes"
				),
				"description" => __('Select No if you select a category to display Post items', "well_textdomain")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Post limit"),
				"param_name" => "limit",
				"value" => '9',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Column", 'well_textdomain'),
				"param_name" => "column",
				"value" => array(
					__("2", "well_textdomain") => "2",
					__("3", "well_textdomain") => "3",
					__("4", "well_textdomain") => "4",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Column Margin", 'well_textdomain'),
				"param_name" => "column_margin",
				"value" => array(
					__("3", "well_textdomain") => "3",
					__("0.5", "well_textdomain") => "0.5",
					__("1", "well_textdomain") => "1",
					__("2", "well_textdomain") => "2",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Enable Pagination", 'well_textdomain'),
				"param_name" => "pagination",
				"value" => array(
					__("Yes", "well_textdomain") => "yes",
					__("No", "well_textdomain") => "no"
				),
				"description" => ''
			),
		)
	));

endif;