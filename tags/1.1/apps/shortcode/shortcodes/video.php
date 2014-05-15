<?php
//////////////////////////////////////////////////////////////////
// Youtube shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('shortwell_youtube', 'shortwell_youtube_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'youtube', 'shortwell_youtube_shortcode');
function shortwell_youtube_shortcode($atts) {
	extract(shortcode_atts(array(
		'id' => '',
		'height' => 360
	), $atts));

	return '<div><div class="video-shortcode"><iframe title="YouTube video player" style="width: 100%; min-height:' . $height . 'px;" src="http://www.youtube.com/embed/' . $id . '?wmode=transparent" frameborder="0" allowfullscreen></iframe></div></div>';
}


//////////////////////////////////////////////////////////////////
// Vimeo shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('shortwell_vimeo', 'shortwell_vimeo_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'vimeo', 'shortwell_vimeo_shortcode');
function shortwell_vimeo_shortcode($atts) {
	extract(shortcode_atts(array(
		'id' => '',
		'height' => 360
	), $atts));
		
	return '<div><div class="video-shortcode"><iframe src="http://player.vimeo.com/video/' . $id . '" style="width: 100%; min-height:' . $height . 'px;" frameborder="0"></iframe></div></div>';
}