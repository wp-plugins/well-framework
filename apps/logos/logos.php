<?php
/*
namespace: logowell
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('LOGOWELL', 'Well Logo' );
define('LOGOWELL_SHORTCODE_PREFIX', 'ws_' );
define('LOGOWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('LOGOWELL_DRI', $path_dir );

/* Setup Themplate File loader
-------------------------------------------------*/
if(!function_exists('logowell_gallery_template_path')):
	function logowell_gallery_template_path($type='url', $extra = ''){
		$settings = array(
			'child_url'  => get_stylesheet_directory_uri().'/well-framework/logos',
			'theme_url'  => get_template_directory_uri().'/well-framework/logos/',
			'plugin_url' => LOGOWELL_DRI.'templates/',
					
			'child_dri'  => get_stylesheet_directory().'/well-framework/logos/',
			'theme_dri'  => get_template_directory().'/well-framework/logos/',
			'plugin_dri' => LOGOWELL_DRI.'templates/',
		);
		$template = new acoc_template_file_loader($settings);
		
		if($type == 'url'){
			return $template->url($extra);
		}else{
			return $template->dri($extra);
		}
	}
endif;


require_once('logos-typs.php');
require_once('logos-functions.php');
require_once('logos-script.php');
require_once('logos-tinymce.php');
require_once('logos-metabox.php');
require_once('logos-shortcodes.php');
require_once('logos-widgets.php');
require_once('logos-theme-compat.php');
require_once('logos-vc.php');