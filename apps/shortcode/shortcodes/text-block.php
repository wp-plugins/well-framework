<?php
if( !function_exists('shortwell_TextBlock_shortcode') ) {
	function shortwell_TextBlock_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(
			'title'     	=> '',
		), $atts ) );
		
		$uid = rand();
		  
		$output = '';					
		$output .= '<div id="TextBlock-'.$uid.'" class="shortwell-TextBlock">';
				$output .= '<h4 class="shortwell-TextBlock-title">'.$title.'</h4>';
				$output .= '<div class="shortwell-TextBlock-content">'.do_shortcode($content).'</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode('shortwell_text_block', 'shortwell_TextBlock_shortcode');
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'text_block', 'shortwell_TextBlock_shortcode');
}