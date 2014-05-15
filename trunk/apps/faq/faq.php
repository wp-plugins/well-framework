<?php
/*
Name: FAQ
Namespace: faqwell
Since: 0.1
*/
$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('FAQWELL', 'Well Faq' );
define('FAQWELL_SHORTCODE_PREFIX', 'ws_' );
define('FAQWELL_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('FAQWELL_DRI', $path_dir );

require_once('faq-typs.php');
require_once('faq-script.php');
require_once('faq-tinymce.php');
require_once('faq-shortcodes.php');
require_once('faq-theme-compat.php');
require_once('faq-widgets.php');
require_once('faq-vc.php');