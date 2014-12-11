<?php
/*
namespace: portwell
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('PORTWELL', 'Well Gallery' );
define('PORTWELL_SHORTCODE_PREFIX', 'ws_' );
define('PORTWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('PORTWELL_DRI', $path_dir );


/* Setup Themplate File loader
-------------------------------------------------*/
if(!function_exists('portwellwell_gallery_template_path')):
	function portwellwell_gallery_template_path($type='url', $extra = ''){
		$settings = array(
			'child_url'  => get_stylesheet_directory_uri().'/well-framework/portfolio/',
			'theme_url'  => get_template_directory_uri().'/well-framework/portfolio/',
			'plugin_url' => PORTWELL_DRI.'templates/',
					
			'child_dri'  => get_stylesheet_directory().'/well-framework/portfolio/',
			'theme_dri'  => get_template_directory().'/well-framework/portfolio/',
			'plugin_dri' => PORTWELL_DRI.'templates/',
		);
		$template = new acoc_template_file_loader($settings);
		
		if($type == 'url'){
			return $template->url($extra);
		}else{
			return $template->dri($extra);
		}
	}
endif;

require_once('portfolio-typs.php');
require_once('portfolio-functions.php');
require_once('portfolio-script.php');
require_once('portfolio-tinymce.php');
require_once('portfolio-metabox.php');
require_once('portfolio-shortcodes.php');
require_once('portfolio-widgets.php');
require_once('portfolio-theme-compat.php');
require_once('portfolio-vc.php');