<?php
/*
namespace: peowell
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('PEOWELL', 'Well Gallery' );
define('PEOWELL_SHORTCODE_PREFIX', 'ws_' );
define('PEOWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('PEOWELL_DRI', $path_dir );

/* Setup Themplate File loader
-------------------------------------------------*/
$settings = array(
	'child_url'  => get_stylesheet_directory_uri().'/well-framework/people/',
	'theme_url'  => get_template_directory_uri().'/well-framework/people/',
	'plugin_url' => PEOWELL_DRI.'template/',
			
	'child_dri'  => get_stylesheet_directory().'/well-framework/people/',
	'theme_dri'  => get_template_directory().'/well-framework/people/',
	'plugin_dri' => PEOWELL_DRI.'template/',
);
$wefr_people_template_path = new acoc_template_file_loader($settings);

require_once('people-typs.php');
require_once('people-functions.php');
require_once('people-script.php');
require_once('people-tinymce.php');
require_once('people-metabox.php');
require_once('people-shortcodes.php');
require_once('people-widgets.php');
require_once('people-theme-compat.php');
require_once('people-vc.php');