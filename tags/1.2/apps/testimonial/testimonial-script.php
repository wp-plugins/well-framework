<?php
add_action( 'wp_enqueue_scripts', 'tmwell_script_register' );
function tmwell_script_register(){	
	wp_enqueue_script( 'jquery-imagesloaded');
	wp_enqueue_script( 'jquery-isotope');
	wp_enqueue_style('tmwell', TMWELL_URL.'assets/css/well-testimonial.css' );
	//wp_enqueue_script('tmwell', TMWELL_URL.'assets/js/well-testimonial.js', array('jquery'), '', true);	
}



function tmwell_admin_script_loader(){
	wp_enqueue_script('well-testimonial-admin', TMWELL_URL.'assets/js/well-testimonial-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-testimonial-admin', TMWELL_URL.'assets/css/well-testimonial-admin.css' );	
}
//add_action('admin_enqueue_scripts', 'tmwell_admin_script_loader');  