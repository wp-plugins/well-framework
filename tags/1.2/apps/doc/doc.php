<?php
$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('DOCWELL', 'Well Doc' );
define('DOCWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('DOCWELL_DRI', $path_dir );

require_once('doc-typs.php');
require_once('doc-functions.php');
require_once('doc-script.php');
//require_once('doc-tinymce.php');
require_once('doc-metabox.php');
require_once('doc-shortcodes.php');
require_once('doc-theme-compat.php');