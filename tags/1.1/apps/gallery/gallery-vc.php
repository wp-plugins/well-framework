<?php
if(function_exists('vc_map')):
	vc_map( array(
		"name" => __("Gallery Archive [Grid]", 'well_textdomain'),
		"base" => "well_gallery_archive_grid",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_taxonomy",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery Category", 'well_textdomain'),
				"param_name" => "cat",
				"value" => '',
				"taxonomy" => 'gallerywell_cat',
				"description" => __("Select a Category to display Galery items form that category", "well_textdomain")
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
				"description" => __('Select No if you select a category to display Gallery items', "well_textdomain")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery limit"),
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
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Column", 'well_textdomain'),
				"param_name" => "column",
				"value" => array(
					__("2", "well_textdomain") => "2",
					__("3", "well_textdomain") => "3",
					__("4", "well_textdomain") => "4",
					__("5", "well_textdomain") => "5"
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
	
	vc_map( array(
		"name" => __("Gallery Archive [Slideshow]", 'well_textdomain'),
		"base" => "well_gallery_archive_slideshow",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_taxonomy",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery Category", 'well_textdomain'),
				"param_name" => "cat",
				"value" => '',
				"taxonomy" => 'gallerywell_cat',
				"description" => __("Select a Category to display Galery items form that category", "well_textdomain")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery limit"),
				"param_name" => "limit",
				"value" => '10',
				"description" => ""
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
	
	vc_map( array(
		"name" => __("Gallery Archive [carousel]", 'well_textdomain'),
		"base" => "well_gallery_archive_carousel",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_taxonomy",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery Category", 'well_textdomain'),
				"param_name" => "cat",
				"value" => '',
				"taxonomy" => 'gallerywell_cat',
				"description" => __("Select a Category to display Galery items form that category", "well_textdomain")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery limit"),
				"param_name" => "limit",
				"value" => '10',
				"description" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Item Margin", 'well_textdomain'),
				"param_name" => "item_margin",
				"value" => array(
					__("5", "well_textdomain") => "5",
					__("10", "well_textdomain") => "10",
					__("15", "well_textdomain") => "15",
					__("20", "well_textdomain") => "20"
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Min Items", 'well_textdomain'),
				"param_name" => "min_items",
				"value" => array(
					__("2", "well_textdomain") => "2",
					__("1", "well_textdomain") => "1",
					__("3", "well_textdomain") => "3",
					__("4", "well_textdomain") => "4",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Max Items", 'well_textdomain'),
				"param_name" => "max_items",
				"value" => array(
					__("5", "well_textdomain") => "5",
					__("4", "well_textdomain") => "4",
					__("3", "well_textdomain") => "3",
					__("2", "well_textdomain") => "2",
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
	
	vc_map( array(
		"name" => __("Gallery Single [Grid]", 'well_textdomain'),
		"base" => "well_gallery_single_grid",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_post_type",
				"post_type" => "gallerywell",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery ID"),
				"param_name" => "id",
				"value" => '',
				"description" => __("example: 1, 2, 3")
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
					__("5", "well_textdomain") => "5"
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Column Margin"),
				"param_name" => "column_margin",
				"value" => '3',
				"description" => __("example: 1, 2, 3")
			),
		)
	));
	
	vc_map( array(
	"name" => __("Gallery Single [slideshow]", 'well_textdomain'),
	"base" => "well_gallery_single_slideshow",
	"class" => "",
	"category" => __('Content', 'well_textdomain'),
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_post_type",
				"post_type" => "gallerywell",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery ID"),
				"param_name" => "id",
				"value" => '',
				"description" => __("Select Single gallary")
			),
		)
	));
	
	vc_map( array(
		"name" => __("Gallery Single [carousel]", 'well_textdomain'),
		"base" => "well_gallery_single_carousel",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "custom_post_type",
				"post_type" => "gallerywell",
				"holder" => "div",
				"class" => "",
				"heading" => __("Gallery ID"),
				"param_name" => "id",
				"value" => '',
				"description" => __("Select Single gallary")
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Item Margin", 'well_textdomain'),
				"param_name" => "item_margin",
				"value" => array(
					__("10", "well_textdomain") => "10",
					__("5", "well_textdomain") => "5",
					__("15", "well_textdomain") => "15",
					__("20", "well_textdomain") => "20"
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Min Items", 'well_textdomain'),
				"param_name" => "min_items",
				"value" => array(
					__("2", "well_textdomain") => "2",
					__("1", "well_textdomain") => "1",
					__("3", "well_textdomain") => "3",
					__("4", "well_textdomain") => "4",
				),
				"description" => ''
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Max Items", 'well_textdomain'),
				"param_name" => "max_items",
				"value" => array(
					__("4", "well_textdomain") => "4",
					__("5", "well_textdomain") => "5",
					__("3", "well_textdomain") => "3",
					__("2", "well_textdomain") => "2",
				),
				"description" => ''
			),
		)
	));
endif;