<?php
add_action( 'wp_enqueue_scripts', 'gallerywell_script_register' );
function gallerywell_script_register(){
	
	wp_enqueue_script( 'jquery-imagesloaded');
	wp_enqueue_script( 'jquery-isotope');	
	//wp_enqueue_script( 'jquery-shuffle');	
	//prettyPhoto
	wp_enqueue_style( 'prettyPhoto', GALLERYWELL_URL.'assets/css/prettyPhoto.css' );
	wp_enqueue_script('jquery-prettyPhoto', GALLERYWELL_URL.'assets/js/jquery.prettyPhoto.js', array('jquery'), '', true);
	
	wp_enqueue_style('gallerywell', GALLERYWELL_URL.'assets/css/well-gallery.css' );
	wp_enqueue_script('gallerywell', GALLERYWELL_URL.'assets/js/well-gallery.js', array('jquery'), '', true);	
}



function gallerywell_admin_script_loader(){
	wp_enqueue_script('well-gallery-admin', GALLERYWELL_URL.'assets/js/well-gallery-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-gallery-admin', GALLERYWELL_URL.'assets/css/well-gallery-admin.css' );	
}
add_action('admin_enqueue_scripts', 'gallerywell_admin_script_loader');  