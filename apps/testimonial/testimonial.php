<?php
/*
namespace: tmwell
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('TMWELL', 'Well Testimonial' );
define('TMWELL_SHORTCODE_PREFIX', 'ws_' );
define('TMWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('TMWELL_DRI', $path_dir );

/* Setup Themplate File loader
-------------------------------------------------*/
if(!function_exists('testimonialwell_gallery_template_path')):
	function testimonialwell_gallery_template_path($type='url', $extra = ''){
		$settings = array(
			'child_url'  => get_stylesheet_directory_uri().'/well-framework/testimonial/',
			'theme_url'  => get_template_directory_uri().'/well-framework/testimonial/',
			'plugin_url' => TMWELL_DRI.'templates/',
					
			'child_dri'  => get_stylesheet_directory().'/well-framework/testimonial/',
			'theme_dri'  => get_template_directory().'/well-framework/testimonial/',
			'plugin_dri' => TMWELL_DRI.'templates/',
		);
		$template = new acoc_template_file_loader($settings);
		
		if($type == 'url'){
			return $template->url($extra);
		}else{
			return $template->dri($extra);
		}
	}
endif;

require_once('testimonial-typs.php');
require_once('testimonial-functions.php');
require_once('testimonial-script.php');
require_once('testimonial-tinymce.php');
require_once('testimonial-metabox.php');
require_once('testimonial-shortcodes.php');
require_once('testimonial-widgets.php');
require_once('testimonial-theme-compat.php');
require_once('testimonial-vc.php');