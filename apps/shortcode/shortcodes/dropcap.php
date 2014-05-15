<?php
add_shortcode('shortwell_dropcap', 'shortwell_dropcap_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'dropcap', 'shortwell_dropcap_shortcode');
function shortwell_dropcap_shortcode( $atts, $content = null ) {  
	extract(shortcode_atts(array(
		'style' => 'none', //circle, box, round
	), $atts));
	
	$output = '';
	$rand = rand();
	
	$output .= '<span class="shortwell-dropcap shortwell-dropcap-style-'.$style.'" id="shortwell-dropcap-'.$rand.'">' .do_shortcode($content). '</span>';  
	
	return $output;	
}