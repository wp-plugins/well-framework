<?php
add_shortcode('shortwell_tooltip', 'shortwell_tooltip_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'tooltip', 'shortwell_tooltip_shortcode');
function shortwell_tooltip_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'title' => 'none',
	), $atts));

	$html = '<span class="shortwell-tooltip" title="'.$title.'">';
		$html .= $content;
	$html .= '</span>';

	return $html;
}