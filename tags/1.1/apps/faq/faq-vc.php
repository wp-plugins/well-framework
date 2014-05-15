<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("FAQ", 'well_textdomain'),
		"base" => "well_faq",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_taxonomy",
				"holder" => "div",
				"class" => "",
				"heading" => __("FAQ Category", 'well_textdomain'),
				"param_name" => "cat",
				"value" => '',
				"taxonomy" => 'faqwell_cat',
				"description" => __("Select a Category to display FAQ items form that category", "well_textdomain")
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
				"description" => 'Select No if you select a category to display FAQ items'
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Post limit"),
				"param_name" => "limit",
				"value" => '10',
				"description" => ""
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
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("IDs"),
				"param_name" => "ids",
				"value" => '',
				"description" => __("example: 1, 2, 3")
			),
		)
	));

endif;