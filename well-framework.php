<?php
/*
Plugin Name: Well Framework
Plugin URI: http://themeforest.net/user/bignet
Description: A wordpress Plugin
Version: 1.5.2
Author: Bignet
Author URI: http://themeforest.net/user/bignet/portfolio

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html

textdomain: well_textdomain

namespace: wefr

WEFR
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('WEFR', 'Well Framwork' );
define('WEFR_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
define('WEFR_DRI', $path_dir );
define('WEFR_VERSION', 1.5 );

if( !class_exists('cmb_Meta_Box') ){ require_once(WEFR_DRI.'includes/metabox-framework/init.php'); }
if( !class_exists('CPT_columns') ){require_once(WEFR_DRI.'includes/CPT_columns/CPT_columns.php'); }
if( !class_exists('Tax_CTP_Filter') ){require_once(WEFR_DRI.'includes/Tax_CTP_Filter/Tax_CTP_Filter.php'); }
if( !class_exists('WPH_Widget_Mod') ){require_once(WEFR_DRI.'includes/wph-widget-class/wph-widget-class.php'); }
if( !class_exists('Easy_TinyMCE_Class') ){
	require_once(WEFR_DRI.'includes/TinyMCE-framework/Easy-tinyMCE.class.php');
	require_once(WEFR_DRI.'includes/TinyMCE-framework/Easy-tinyMCE-content.class.php');
}
if( !class_exists('WPAlchemy_MetaBox_Mod') ){require_once(WEFR_DRI.'includes/wpalchemy/MetaBox.php'); }
if( !class_exists('WPAlchemy_MediaAccess_mod')){require_once(WEFR_DRI.'includes/wpalchemy/MediaAccess.php');$wpalchemy_mod_media_access = new WPAlchemy_MediaAccess_mod();}
if( !class_exists('wp_mixitup_grid') ){require_once(WEFR_DRI.'includes/wp-mixitup-grid/wp-mixitup-grid.class.php'); }
if( !class_exists('wp_flexslider') ){require_once(WEFR_DRI.'includes/wp-flexslider/wp-flexslider.class.php'); }


/*
 ACOC
--------------------------------*/
require(WEFR_DRI.'acoc/acoc.php');


/*
 Files
--------------------------------*/
require_once(WEFR_DRI.'functions.php');
require_once(WEFR_DRI.'script-loader.php');
require_once(WEFR_DRI.'settings.php');

$wefr_options = get_option('well_framework', array(
	'module_faq' => 'yes',
	'module_gallery' => 'yes',
	'module_logos' => 'yes',
	'module_people' => 'yes',
	'module_portfolio' => 'yes',
	'module_testimonials' => 'yes',
	'module_shortcode' => 'yes',
	'module_doc' => 'no',
	'module_slideshow' => 'no',
	'module_edd' => 'yes',
));



/*
 apps
--------------------------------*/
if( $wefr_options['module_faq'] == 'yes' ){ require_once(WEFR_DRI.'apps/faq/faq.php'); }
if( $wefr_options['module_gallery'] == 'yes' ){ require_once(WEFR_DRI.'apps/gallery/gallery.php'); }
if( $wefr_options['module_logos'] == 'yes' ){ require_once(WEFR_DRI.'apps/logos/logos.php'); }
if( $wefr_options['module_people'] == 'yes' ){ require_once(WEFR_DRI.'apps/people/people.php'); }
if( $wefr_options['module_portfolio'] == 'yes' ){ require_once(WEFR_DRI.'apps/portfolio/portfolio.php'); }
if( $wefr_options['module_testimonials'] == 'yes' ){ require_once(WEFR_DRI.'apps/testimonial/testimonial.php'); }
if( $wefr_options['module_shortcode'] == 'yes' ){ require_once(WEFR_DRI.'apps/shortcode/shortcode.php'); }
if( $wefr_options['module_doc'] == 'yes' ){ require_once(WEFR_DRI.'apps/doc/doc.php'); }
if( $wefr_options['module_slideshow'] == 'yes' ){require_once(WEFR_DRI.'apps/slideshow/slideshow.php');}
if( $wefr_options['module_edd'] == 'yes' ){require_once(WEFR_DRI.'apps/easy-digital-downloads/easy-digital-downloads.php'); }


/*
 Load textdomain
--------------------------------*/
function wefr_load_plugin_textdomain() {
  load_plugin_textdomain( 'well_textdomain', false, dirname(plugin_basename(__FILE__)).'/lang/' );
}
add_action('init', 'wefr_load_plugin_textdomain');