<?php
/*
 * alert
 * @since v1.0
 *
 */

// Main
if( !function_exists('shortwell_alert_shortcode') ) {
	function shortwell_alert_shortcode( $atts, $content = null  ) {
		
		extract( shortcode_atts( array(
			'title' => '',
			'type' => 'info', //danger, success, error, info, 
			'close' => 'yes',
		), $atts ) );
		
		$output = '';
		
		$output .= '<div class="shortwell-alert shortwell-alert-block shortwell-alert-'.$type.'">';
			if( $close == 'yes'){ $output .= '<div class="shortwell-alert-close">×</div>'; }
			if( $title != ''){ $output .= '<h4 class="shortwell-alert-heading">'.$title.'</h4>'; }
			$output .= do_shortcode($content);
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode( 'shortwell_alert', 'shortwell_alert_shortcode' );
	add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'alert', 'shortwell_alert_shortcode' );
}