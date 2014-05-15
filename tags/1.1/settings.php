<?php
new acoc_setting_api_class(
	array(
		'id' => 'well-framework-settings',
		'option_name' => 'well_framework',
		'page_title' => "Well Framework",
		'menu_title' => "Well Framework",
		'capability' => 'manage_options',
		'menu_slug' => 'well-framework-settings',
		'parent_slug' => NULL,
		'icon_url' => NULL,
		'position' => NULL,
		'fields' => array(
			array(
				'id' => 'module_faq',
				'class' => '',
				'label' => 'FAQ Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_gallery',
				'class' => '',
				'label' => 'Gallery Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_logos',
				'class' => '',
				'label' => 'Logos Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_people',
				'class' => '',
				'label' => 'People Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_portfolio',
				'class' => '',
				'label' => 'Portfolio Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_testimonials',
				'class' => '',
				'label' => 'Testimonials Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_shortcode',
				'class' => '',
				'label' => 'Shortcode Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_doc',
				'class' => '',
				'label' => 'Doc Module',
				'type' => 'select',
				'std' => 'no',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_slideshow',
				'class' => '',
				'label' => 'Slideshow Module',
				'type' => 'select',
				'std' => 'no',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
			array(
				'id' => 'module_edd',
				'class' => '',
				'label' => 'EDD Module',
				'type' => 'select',
				'std' => 'yes',
				'des' => '',
				'filter' => '',
				'options' => array(
					array('label'=>'yes', 'value'=>'yes'),
					array('label'=>'no', 'value'=>'no'),
				)
			),
		)	
	)	
);