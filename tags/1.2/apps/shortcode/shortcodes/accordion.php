<?php
// Main
add_shortcode( 'shortwell_accordion', 'shortwell_accordion_main_shortcode' );
add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'accordion', 'shortwell_accordion_main_shortcode' );
function shortwell_accordion_main_shortcode( $atts, $content = null  ) {
		
	extract( shortcode_atts( array(
		'class'	=> ''
	), $atts ) );
		
	// Display the accordion	
	return '<div class="shortwell-accordion '. $class .'">' . do_shortcode($content) . '<span class="shortwell-clear"></span>';
}



// Section
add_shortcode( 'shortwell_accordion_item', 'shortwell_accordion_item_shortcode' );
add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'accordion_item', 'shortwell_accordion_item_shortcode' );	
function shortwell_accordion_item_shortcode( $atts, $content = null  ) {
	extract( shortcode_atts( array(
		'title'	=> 'Title',
		'class'	=> '',
	), $atts ) );
		  
	return '<h3 class="shortwell-accordion-trigger '. $class .'"><a href="#">'. $title .'</a></h3><div>' . do_shortcode($content) . '<div class="shortwell-clear"></div></div>';
}