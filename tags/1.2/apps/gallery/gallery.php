<?php
/*
namespace: gallerywell
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('GALLERYWELL', 'Well Gallery' );
define('GALLERYWELL_SHORTCODE_PREFIX', 'ws_' );
define('GALLERYWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('GALLERYWELL_DRI', $path_dir );

/* Setup Themplate File loader
-------------------------------------------------*/
$settings = array(
	'child_url'  => get_stylesheet_directory_uri().'/well-framework/gallery',
	'theme_url'  => get_template_directory_uri().'/well-framework/gallery/',
	'plugin_url' => GALLERYWELL_DRI.'template/',
			
	'child_dri'  => get_stylesheet_directory().'/well-framework/gallery/',
	'theme_dri'  => get_template_directory().'/well-framework/gallery/',
	'plugin_dri' => GALLERYWELL_DRI.'template/',
);
$wefr_gallery_template_path = new acoc_template_file_loader($settings);

require_once('gallery-typs.php');
require_once('gallery-functions.php');
require_once('gallery-script.php');
require_once('gallery-tinymce.php');
require_once('gallery-metabox.php');
require_once('gallery-shortcodes.php');
require_once('gallery-widgets.php');
require_once('gallery-theme-compat.php');
require_once('gallery-vc.php');