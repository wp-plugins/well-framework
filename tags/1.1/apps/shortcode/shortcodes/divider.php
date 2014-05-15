<?php
add_shortcode('shortwell_divider', 'shortwell_divider_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'divider', 'shortwell_divider_shortcode');
function shortwell_divider_shortcode($atts, $content = null) {
	
	extract(shortcode_atts(array(
		'style' => 'none', //single, double, dotted, dashed, shadow
		'margin_top' => '20px',
		'margin_bottom' => '2px',
	), $atts));
	
	$output = '';
	$rand = rand();
	
	$output .= '<style type="text/css">
		#shortwell-divider-'.$rand.'{  margin-bottom:'.$margin_bottom.'; margin-top:'.$margin_top.'; }
	</style>';
	$output .= '<div class="shortwell-clear"></div>';
	$output .= '<div class="shortwell-divider shortwell-divider-style-'.$style.'" id="shortwell-divider-'.$rand.'"></div>';
	$output .= '<div class="shortwell-clear"></div>';
	return $output;
}