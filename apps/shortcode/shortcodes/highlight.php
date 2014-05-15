<?php
add_shortcode('shortwell_highlight', 'shortwell_highlight_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'highlight', 'shortwell_highlight_shortcode');
function shortwell_highlight_shortcode($atts, $content = null) {
	$atts = shortcode_atts(
		array(
			'color' => 'yellow',
	), $atts);
			
	if($atts['color'] == 'black') {
		return '<span class="shortwell-highlight2" style="background-color:'.$atts['color'].'; color:#fff;">' .do_shortcode($content). '</span>';
	} else {
		return '<span class="shortwell-highlight1" style="background-color:'.$atts['color'].';">' .do_shortcode($content). '</span>';
	}

}