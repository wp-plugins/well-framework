<?php
if( !function_exists('shortwell_toggle_shortcode') ) {
	function shortwell_toggle_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title'	=> 'Toggle Title',
			'class'	=> '',
		), $atts ) );
		
		
		// Display the Toggle
		return '<div class="shortwell-toggle '. $class .'"><h3 class="shortwell-toggle-trigger">'. $title .'</h3><div class="shortwell-toggle-container">' . do_shortcode($content) . '</div></div>';
	}
	add_shortcode('shortwell_toggle', 'shortwell_toggle_shortcode');
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'toggle', 'shortwell_toggle_shortcode');
}