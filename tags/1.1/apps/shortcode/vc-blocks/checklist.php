<?php
if(function_exists('vc_map')):					
	vc_map( array(
		"name" => __("Checklist", 'well_textdomain'),
		"base" => "shortwell_checklist",
		"class" => "",
		"category" => __('Content', 'well_textdomain'),
		//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
		//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Select Icon Type", 'well_textdomain'),
				"param_name" => "icon",
				"value" => array(
					__("arrow", "well_textdomain") => "arrow",
					__("check", "well_textdomain") => "check",
					__("star", "well_textdomain") => "star",
					__("asterik", "well_textdomain") => "asterik",
					__("cross", "well_textdomain") => "cross",
					__("plus", "well_textdomain") => "plus",
				),
				"description" => ''
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Color"),
				"param_name" => "iconcolor",
				"value" => 'initial',
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Background Color"),
				"param_name" => "iconbg",
				"value" => 'rgba(0,0,0,0)',
				"description" => "Add color code 'rgba(0,0,0,0)' OR #000000"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Icon Size"),
				"param_name" => "iconsize",
				"value" => '9px',
				"description" => ""
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => __("Enable Circle", 'well_textdomain'),
				"param_name" => "circle",
				"value" => array(
					__("Yes", "well_textdomain") => "yes",
					__("No", "well_textdomain") => "no",
				),
				"description" => ''
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Content"),
				"param_name" => "content",
				"value" => '<ul>
	<li>Etiam suscipit lectus ac dui venenatis placerat.</li>
	<li>Pellentesque ac nulla ipsum. Nunc vitae elit felis.</li>
	<li>Duis facilisis dapibus tortor, ac sollicitudin ipsum venenatis in.</li>
	<li>Curabitur elit lacus, cursus at nunc sit amet, rutrum molestie odio.</li>
</ul>',
				"description" => ""
			),
		)
	));

endif;