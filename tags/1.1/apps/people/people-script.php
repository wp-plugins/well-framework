<?php
add_action( 'wp_enqueue_scripts', 'peowell_script_register' );
function peowell_script_register(){	
	wp_enqueue_script( 'jquery-imagesloaded');
	wp_enqueue_script( 'jquery-isotope');
	wp_enqueue_style('peowell', PEOWELL_URL.'assets/css/well-people.css' );
	//wp_enqueue_script('peowell', PEOWELL_URL.'assets/js/well-people.js', array('jquery'), '', true);	
}



function peowell_admin_script_loader(){
	wp_enqueue_script('well-people-admin', PEOWELL_URL.'assets/js/well-people-admin.js', array('jquery'), '', true);	
	wp_enqueue_style('well-people-admin', PEOWELL_URL.'assets/css/well-people-admin.css' );	
}
//add_action('admin_enqueue_scripts', 'peowell_admin_script_loader');  