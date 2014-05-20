<?php
add_action( 'wp_enqueue_scripts', 'logowell_script_register' );
function logowell_script_register(){	
	wp_enqueue_script( 'jquery-imagesloaded');
	wp_enqueue_script( 'jquery-isotope');
	wp_enqueue_style('logowell', LOGOWELL_URL.'assets/css/well-logo.css' );
	//wp_enqueue_script('logowell', LOGOWELL_URL.'assets/js/well-logo.js', array('jquery'), '', true);	
}



function logowell_admin_script_loader(){
	wp_enqueue_script('well-testimonial-admin', LOGOWELL_URL.'assets/js/well-logo-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-testimonial-admin', LOGOWELL_URL.'assets/css/well-logo-admin.css' );	
}
//add_action('admin_enqueue_scripts', 'logowell_admin_script_loader');  