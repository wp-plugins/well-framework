<?php
add_action( 'wp_enqueue_scripts', 'shortwell_script_register' );
function shortwell_script_register(){
	
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-accordion');
	wp_enqueue_script('jquery-ui-tabs');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-effects-core');
	wp_enqueue_script('jquery-ui-tooltip');
	wp_enqueue_script('jquery-ui-sortable');
	
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery-easing');
	wp_enqueue_script('jquery-fitvids');
	
	//prettyPhoto
	wp_enqueue_style( 'prettyPhoto');
	wp_enqueue_script('jquery-prettyPhoto');
	
	//gauge
	wp_enqueue_script('gauge');
	
	//waypoints
	wp_enqueue_script('jquery-waypoints');
	
	//font-awesome
	wp_enqueue_style('font-awesome');
	
	//gmap
	wp_enqueue_script( 'google-map');
	wp_enqueue_script( 'jquery-gomap');
	
	//well-shortcode
	wp_enqueue_style('shortwell', SHORTWELL_URL.'assets/css/well-shortcode.css' );
	wp_enqueue_script('shortwell', SHORTWELL_URL.'assets/js/well-shortcode.js', array('jquery'), '', true);	
}



function shortwell_admin_script_loader(){
	wp_enqueue_script('well-shortcode-admin', SHORTWELL_URL.'assets/js/well-shortcode-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-shortcode-admin', SHORTWELL_URL.'assets/css/well-shortcode-admin.css' );	
}
add_action('admin_enqueue_scripts', 'shortwell_admin_script_loader');  