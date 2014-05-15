<?php
add_shortcode('shortwell_lightbox', 'shortwell_lightbox_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'lightbox', 'shortwell_lightbox_shortcode');
function shortwell_lightbox_shortcode($atts, $content = null) {
	extract( shortcode_atts( array(
		'class' => '',
		'src' => '',
		'title' => '',
	), $atts ) );
	
	$uid = 'shortwell-lightbox'.rand();
			
	$output = '';

	$output .= '<a href="'.$src.'" rel="prettyPhoto" title="'.$title.'" class="'.$class.'">';
		$output .= do_shortcode($content);
	$output .= '</a>'; 

	
	return $output;
}