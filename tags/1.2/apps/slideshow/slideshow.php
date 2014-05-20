<?php
define('WEFR_SLIDESHOW_URL', WEFR_URL.'apps/slideshow/');
define('WEFR_SLIDESHOW_DRI', WEFR_DRI.'apps/slideshow/');


/* Register PostType
-------------------------------------------------*/
$seeings = array(
	'post_type_name' => 'slideshow',
	'rewrite' => array( 'slug' => 'slideshow' ),
	'supports' => array( 'title'),
	'menu_icon' => 'dashicons-images-alt2',
	'labels' => array(
		'name'               => _x( 'Slideshow', 'post type general name', 'well_textdomain' ),
		'singular_name'      => _x( 'Slideshow', 'post type singular name', 'well_textdomain' ),
		'menu_name'          => _x( 'Slideshows', 'admin menu', 'well_textdomain' ),
		'name_admin_bar'     => _x( 'Slideshow', 'add new on admin bar', 'well_textdomain' ),
		'add_new'            => _x( 'Add New', 'Slideshow', 'well_textdomain' ),
		'add_new_item'       => __( 'Add New Slideshow', 'well_textdomain' ),
		'new_item'           => __( 'New Slideshow', 'well_textdomain' ),
		'edit_item'          => __( 'Edit Slideshow', 'well_textdomain' ),
		'view_item'          => __( 'View Slideshow', 'well_textdomain' ),
		'all_items'          => __( 'All Slideshows', 'well_textdomain' ),
		'search_items'       => __( 'Search Slideshows', 'well_textdomain' ),
		'parent_item_colon'  => __( 'Parent Slideshows:', 'well_textdomain' ),
		'not_found'          => __( 'No Slideshows found.', 'well_textdomain' ),
		'not_found_in_trash' => __( 'No Slideshows found in Trash.', 'well_textdomain' ),
	),
);
new acoc_post_type_register($seeings);



/* Register Taxonomy
-------------------------------------------------*/
/*~~~~NO Taxonomy Needed ~~~~*/



/* post Taxonomy filtering
-------------------------------------------------*/
/*~~~~NO filtering Needed ~~~~*/



/* Edting post Column
-------------------------------------------------*/
/*~~~~NO post Column Needed ~~~~*/



/* Register Metabox
-------------------------------------------------*/
$prefix = 'wellslider_';
$seeings = array(
	'id' => 'well_slideshow_slider_item_metabox',
	'title' => 'Sliders',
	'post_type' => 'slideshow',
	'context' => 'advanced', //'normal', 'advanced', or 'side'
	'priority' => 'high', //'high', 'core', 'default' or 'low'
	'callback_args' => NULL,
	'fields' => array(
		array(
			'id' => $prefix.'sliders',
			'class' => '',
			'label' => 'Sliders',
			'type' => 'slideshow',
			'std' => '',
			'des' => __( 'Click on the Add New Button to add more slider.', 'well_textdomain' ),
			'filter' => '',
		),
	),
);
new acoc_metabox_register($seeings);


$seeings = array(
	'id' => 'well_slideshow_slider_setting',
	'title' => 'Slider Settings',
	'post_type' => 'slideshow',
	'context' => 'side', //'normal', 'advanced', or 'side'
	'priority' => 'default', //'high', 'core', 'default' or 'low'
	'callback_args' => NULL,
	'fields' => array(
		array(
			'id' => $prefix.'animation',
			'class' => '',
			'label' => 'Animation',
			'type' => 'select',
			'std' => '',
			'des' => '',
			'filter' => '',
			'options' => array(
				array('label'=>'Fade', 'value'=>'fade'),
				array('label'=>'Slide', 'value'=>'slide'),
			)
		),
		array(
			'id' => $prefix.'smoothHeight',
			'class' => '',
			'label' => 'Smooth Height',
			'type' => 'select',
			'std' => '',
			'des' => '',
			'filter' => '',
			'options' => array(
				array('label'=>'false', 'value'=>'false'),
				array('label'=>'true', 'value'=>'true'),
			)
		),
		array(
			'id' => $prefix.'slideshowSpeed',
			'class' => '',
			'label' => 'Slideshow Speed',
			'type' => 'text',
			'std' => '7000',
			'des' => '',
			'filter' => '',
			'options' => ''
		),
		array(
			'id' => $prefix.'animationSpeed',
			'class' => '',
			'label' => 'Animation Speed',
			'type' => 'text',
			'std' => '600',
			'des' => '',
			'filter' => '',
			'options' => ''
		),
		array(
			'id' => $prefix.'controlNav',
			'class' => '',
			'label' => 'Control Nav',
			'type' => 'select',
			'std' => '',
			'des' => '',
			'filter' => '',
			'options' => array(
				array('label'=>'true', 'value'=>'true'),
				array('label'=>'false', 'value'=>'false'),
			)
		),
		array(
			'id' => $prefix.'directionNav',
			'class' => '',
			'label' => 'Direction Nav',
			'type' => 'select',
			'std' => '',
			'des' => '',
			'filter' => '',
			'options' => array(
				array('label'=>'true', 'value'=>'true'),
				array('label'=>'false', 'value'=>'false'),
			)
		),
		array(
			'id' => $prefix.'slider_layout',
			'class' => '',
			'label' => 'Slider Layout',
			'type' => 'select',
			'std' => '',
			'des' => '',
			'filter' => '',
			'options' => array(
				array('label'=>'Media + Content', 'value'=>'media-content'),
				array('label'=>'Content + Media', 'value'=>'content-media'),
				array('label'=>'Media Only', 'value'=>'media-only'),
				array('label'=>'Content Only', 'value'=>'content-only'),
			)
		),
		array(
			'id' => $prefix.'image_w',
			'class' => '',
			'label' => 'Image Width',
			'type' => 'text',
			'std' => '',
			'des' => 'Foeaxmple the Image Size will be <code>960</code>',
			'filter' => '',
			'options' => '',
		),
		array(
			'id' => $prefix.'image_h',
			'class' => '',
			'label' => 'Image Heaight',
			'type' => 'text',
			'std' => '',
			'des' => 'Foeaxmple the Image Size will be <code>400</code>',
			'filter' => '',
			'options' => '',
		),
		array(
			'id' => $prefix.'top_padding',
			'class' => '',
			'label' => 'Top Padding',
			'type' => 'text',
			'std' => '',
			'des' => 'Foeaxmple the Image Size will be <code>50</code>',
			'filter' => '',
			'options' => '',
		),
		array(
			'id' => $prefix.'bottom_padding',
			'class' => '',
			'label' => 'Bottom Padding',
			'type' => 'text',
			'std' => '',
			'des' => 'Foeaxmple the Image Size will be <code>50</code>',
			'filter' => '',
			'options' => '',
		),
	),
);
new acoc_metabox_register($seeings);





/* Setup Themplate File loader
-------------------------------------------------*/
$seeings = array(
	'child_url'  => get_stylesheet_directory_uri().'/well-framework/slideshow/',
	'theme_url'  => get_template_directory_uri().'/well-framework/slideshow/',
	'plugin_url' => WEFR_SLIDESHOW_URL.'template/',
	
	'child_dri'  => get_stylesheet_directory().'/well-framework/slideshow/',
	'theme_dri'  => get_template_directory().'/well-framework/slideshow/',
	'plugin_dri' => WEFR_SLIDESHOW_DRI.'template/',
);
$wefr_slideshow_template_path = new acoc_template_file_loader($seeings);



/* Load Require Scripts
-------------------------------------------------*/
add_action( 'wp_enqueue_scripts', 'well_slideshow_script_register');
function well_slideshow_script_register(){
	$css = WEFR_SLIDESHOW_URL . 'assets/css/';
	$js = WEFR_SLIDESHOW_URL . 'assets/js/';
	
	//wp_enqueue_style( 'acoc-flexslider');
	wp_enqueue_script( 'jquery-flexslider');
	wp_enqueue_style( 'well-slideshow', $css.'well-slideshow.css', '', '' );
	wp_enqueue_script( 'well-slideshow', $js.'well-slideshow.js', '', '', true );
}



/* Register Shortcodes
-------------------------------------------------*/
add_shortcode('well_slideshow', 'well_slideshow_shortcode_register');
function well_slideshow_shortcode_register( $atts, $content = null  ) {		
	extract( shortcode_atts( array(
		'id' => '',
		'skin_class' => 'well-slideshow-skin',
	), $atts ) );
	$output = '';
	$slider_items = get_post_meta($id, 'wellslider_sliders', true);
	global $wefr_slideshow_template_path;
	
	$attr = array(
		'div_class' => $skin_class,
		'file_url' => $wefr_slideshow_template_path->dri().'slideshow.php',	
		'the_array' => $slider_items,
			
		'animation' => get_post_meta($id, 'wellslider_animation', true),
		'smoothHeight' => get_post_meta($id, 'wellslider_smoothHeight', true),
		'slideshow' => 'true',
		'animationLoop' => 'true',
		'slideshowSpeed' => get_post_meta($id, 'wellslider_slideshowSpeed', true),
		'animationSpeed' => get_post_meta($id, 'wellslider_animationSpeed', true),
		'controlNav' => get_post_meta($id, 'wellslider_controlNav', true),
		'directionNav' => get_post_meta($id, 'wellslider_directionNav', true),
		'prevText' => '',
		'nextText' => '',
		'pausePlay' => 'false',
		'pauseText' => 'Pause',
		'playText' => 'Play',
		'itemWidth' => '0',
		'itemMargin' => '0',
		'minItems' => '0',
		'maxItems' => '0',
		'move' => '0',
	);
	ob_start();
	new acoc_flexslider_html($attr, array( 'post_id' => $id ));
	$output = ob_get_contents();
	ob_end_clean();
	
	if($id == "") { $output = __('No ID given in the shortcode','well_textdomain'); }
	
	return 	$output;
}



/* Theme Compact
-------------------------------------------------*/
/*~~~~NO Theme Compact Needed ~~~~*/


/* Register TinyMCE editor
-------------------------------------------------*/



/* Register Widget
-------------------------------------------------*/
/*~~~~NO Widget Needed ~~~~*/



/* Register Option Page
-------------------------------------------------*/
/*~~~~NO Option Page Needed ~~~~*/