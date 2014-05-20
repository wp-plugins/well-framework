<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Vimeo", 'well_textdomain'),
		"base" => "shortwell_vimeo",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Vimeo Video id"),
				"param_name" => "id",
				"value" => '85171830',
				"description" => "Example: #85171830"
			),
/*			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Vimeo Video Width"),
				"param_name" => "width",
				"value" => '',
				"description" => "600"
			),*/
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Vimeo Video Height"),
				"param_name" => "height",
				"value" => '360',
				"description" => ""
			),
		)
	));

endif;