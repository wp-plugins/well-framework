<?php
add_action( 'wp_enqueue_scripts', 'wefr_script_register' );
function wefr_script_register(){
	
	wp_register_script('modernizr', WEFR_URL.'assets/js/modernizr.custom.42257.js');
	wp_register_script('jquery-easing', WEFR_URL.'assets/js/jquery.easing.1.3.js', array('jquery'), '', true);
	wp_enqueue_script('jquery-fitvids', WEFR_URL.'assets/js/jquery.fitvids.js', array('jquery'), '', true);
	
	//prettyPhoto
	wp_register_style( 'prettyPhoto', WEFR_URL.'assets/css/prettyPhoto.css' );
	wp_register_script('jquery-prettyPhoto', WEFR_URL.'assets/js/jquery.prettyPhoto.js', array('jquery'), '', true);
	
	//gauge
	wp_register_script('gauge', WEFR_URL.'assets/js/gauge.min.js', array('jquery'), '', true);
	
	//waypoints
	wp_register_script('jquery-waypoints', WEFR_URL.'assets/js/waypoints.min.js', array('jquery'), '', true);
	
	//font-awesome
	wp_register_style('font-awesome', WEFR_URL.'assets/css/font-awesome.min.css' );
	
	//gmap
	wp_register_script( 'google-map', 'http://maps.google.com/maps/api/js?sensor=true', array(), null);
	wp_register_script( 'jquery-gomap', WEFR_URL.'assets/js/jquery.gomap-1.3.2.min.js', array(), null);
	
}



function wefr_admin_script_loader(){
	wp_enqueue_script('well-framwork-admin', WEFR_URL.'assets/js/well-shortcode-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-framwork-admin', WEFR_URL.'assets/css/well-framwork-admin.css' );	
}
add_action('admin_enqueue_scripts', 'wefr_admin_script_loader');  