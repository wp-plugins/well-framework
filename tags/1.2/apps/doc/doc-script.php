<?php
add_action( 'wp_enqueue_scripts', 'docwell_script_register' );
function docwell_script_register(){	
	wp_enqueue_style('font-awesome', DOCWELL_URL.'assets/css/font-awesome.min.css' ); 
	wp_enqueue_style('docwell', DOCWELL_URL.'assets/css/well-doc.css' );
	wp_enqueue_script('docwell', DOCWELL_URL.'assets/js/well-doc.js', array('jquery'), '', true);	
}



function docwell_admin_script_loader(){	
	wp_enqueue_style('well-doc-admin', DOCWELL_URL.'assets/css/well-doc-admin.css' );	
}
add_action('admin_enqueue_scripts', 'docwell_admin_script_loader');  