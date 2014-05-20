<?php
add_action( 'wp_enqueue_scripts', 'faqwell_script_register' );
function faqwell_script_register(){	
	wp_enqueue_style('faqwell', FAQWELL_URL.'assets/css/well-faq.css' );
	wp_enqueue_script('faqwell', FAQWELL_URL.'assets/js/well-faq.js', array('jquery'), '', true);	
}



function faqwell_admin_script_loader(){
	wp_enqueue_script('well-faq-admin', FAQWELL_URL.'assets/js/well-faq-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-faq-admin', FAQWELL_URL.'assets/css/well-faq-admin.css' );	
}
//add_action('admin_enqueue_scripts', 'faqwell_admin_script_loader');  