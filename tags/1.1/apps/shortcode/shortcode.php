<?php
/*
namespace: shortwell
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('SHORTWELL', 'Well Shortcode' );
define('SHORTWELL_SHORTCODE_PREFIX', 'ws_' );
define('SHORTWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('SHORTWELL_DRI', $path_dir );

require_once('shortcode-functions.php');
require_once('shortcode-script.php');
require_once('shortcode-tinymce.php');
require_once('shortcode-shortcodes.php');
require_once('shortcode-widgets.php');
require_once('shortcode-vc.php');