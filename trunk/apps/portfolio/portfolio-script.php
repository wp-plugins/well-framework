<?php
add_action( 'wp_enqueue_scripts', 'portwell_script_register' );
function portwell_script_register(){	
	wp_enqueue_style('portwell', PORTWELL_URL.'assets/css/well-portfolio.css' );
	wp_enqueue_script( 'jquery-imagesloaded');
	wp_enqueue_script( 'jquery-isotope');
	//wp_enqueue_script('portwell', PORTWELL_URL.'assets/js/well-portfolio.js', array('jquery'), '', true);	
}



function portwell_admin_script_loader(){
	wp_enqueue_script('well-portfolio-admin', PORTWELL_URL.'assets/js/well-portfolio-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-portfolio-admin', PORTWELL_URL.'assets/css/well-portfolio-admin.css' );	
}
//add_action('admin_enqueue_scripts', 'portwell_admin_script_loader');  