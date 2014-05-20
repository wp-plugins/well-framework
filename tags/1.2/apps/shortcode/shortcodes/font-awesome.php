<?php
add_shortcode('shortwell_icon', 'shortwell_icon_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'icon', 'shortwell_icon_shortcode');
function shortwell_icon_shortcode( $atts, $content = null ) {  
	extract(shortcode_atts(array(
		'icon' => 'fa-arrow',
		'shape' => '', //circle, round,
		'style' => 'none', //background, border
		'color' => '',
		'size' => '2x', // 1x, 2x, 3x, 4x, 5x, 6x
		'effect' => '',
		'align' => '', //none, left, right, center
		'link' => '',
		'link_target' => '_self', //_blank, _self
	), $atts));
	
	$output = '';
	$rand = rand();
	
	$output .= '<style type="text/css">
		#shortwell-icon-'.$rand.'{ color:'.$color.'; }
		#shortwell-icon-'.$rand.'.shortwell-icon-style-background{ background-color:'.$color.'; color:#ffffff !important; }
		#shortwell-icon-'.$rand.'.shortwell-icon-style-border{ border-color:'.$color.'; }
	</style>';
	
	if(!empty($link)){ $output .= '<a href="'.$link.'" target="'.$link_target.'">'; }
	$output .= '<i class="shortwell-icon  shortwell-icon-shape-'.$shape.'  shortwell-icon-size-'.$size.' shortwell-icon-effect-'.$effect.' shortwell-icon-align-'.$align.' shortwell-icon-style-'.$style.' fa '.$icon.'" id="shortwell-icon-'.$rand.'"></i>';
	if(!empty($link)){ $output .= '</a>'; }
	
	return $output;	
}