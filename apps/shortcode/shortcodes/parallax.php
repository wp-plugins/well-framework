<?php
add_shortcode('shortwell_row', 'shortwell_row_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'row', 'shortwell_row_shortcode');
function shortwell_row_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'bg_color' => '',
		'bg_image' => '',
		'bg_repeat' => 'no-repeat',
		'bg_position' => 'top left',
		'bg_attachment' => 'scroll',
		'border_size' => '1px',
		'border_color' => '#f1f1f1',
		'padding_top' => '20px',
		'padding_bottom' => '20px',
		
		'text_color' => '',
		'heading_color' => '',
		'link_color' => '',
	), $atts));
	
	$uid = 'shortwell-row'.rand();

	$css = ''; if($bg_repeat == 'no-repeat') { $css .= '-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;'; }
	
	$bg_color = ($bg_color) ? 'background-color:'.$bg_color.';' : '';
	$bg_image = ($bg_image) ? 'background-image:url('.$bg_image.');' : '';
	$bg_repeat = ($bg_repeat) ? 'background-repeat:'.$bg_repeat.';' : '';
	$bg_attachment = ($bg_attachment) ? 'background-attachment:'.$bg_attachment.';' : '';
	$bg_position = ($bg_position) ? 'background-position:'.$bg_position.';' : '';
	$border_size = ($border_size) ? 'border-top:'.$border_size.' solid '.$border_color.';border-bottom:'.$border_size.' solid '.$border_color.';' : '';
	$padding_top = ($padding_top) ? 'padding-top:'.$padding_top.';' : '';
	$padding_bottom = ($padding_bottom) ? 'padding-bottom:'.$padding_bottom.';' : '';
	$style = 'style="'.$bg_color.$bg_image.$css.$bg_repeat.$bg_attachment.$bg_position.$border_size.$padding_top.$padding_bottom.'" ';

	$output = NULL;
	
	$output .= '<style type="text/css">
					#'.$uid.'{ color:'.$text_color.'; }
					#'.$uid.' a{ color:'.$link_color.'; }
					#'.$uid.' h1, #'.$uid.' h2, #'.$uid.' h3, #'.$uid.' h4, #'.$uid.' h5, #'.$uid.' h6{ color:'.$heading_color.'; }
				</style>';
	
	$output .= '<div id="'.$uid.'" class="shortwell-row" '.$style.'>';
		$output .= '<div class="shortwell-row-inner">';
			$output .= do_shortcode($content);
			$output .= '<div class="shortwell-clear"></div>';
		$output .= '</div>';
	$output .= '</div>';

	return $output;
}