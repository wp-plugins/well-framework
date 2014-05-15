<?php
add_shortcode('shortwell_soundcloud', 'shortwell_soundcloud_shortcode');
add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'soundcloud', 'shortwell_soundcloud_shortcode' );

function shortwell_soundcloud_shortcode($atts) {
	$atts = shortcode_atts(
		array(
			'url' => '',
			'width' => '100%',
			'height' => 81,
			'comments' => 'true',
			'auto_play' => 'true',
			'color' => 'ff7700',
		), $atts);

	if($atts['comments'] == 'yes') {
		$atts['comments'] = 'true';
	} elseif($atts['comments'] == 'no') {
		$atts['comments'] = 'false';
	}

	if($atts['auto_play'] == 'yes') {
		$atts['auto_play'] = 'true';
	} elseif($atts['auto_play'] == 'no') {
		$atts['auto_play'] = 'false';
	}

	return '<iframe width="'.$atts['width'].'" height="'.$atts['height'].'" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=' . urlencode($atts['url']) . '&amp;show_comments=' . $atts['comments'] . '&amp;auto_play=' . $atts['auto_play'] . '&amp;color=' . $atts['color'] . '"></iframe>';

}