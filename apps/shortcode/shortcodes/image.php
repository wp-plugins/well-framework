<?php
add_shortcode('shortwell_image', 'shortwell_image_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'image', 'shortwell_image_shortcode');
function shortwell_image_shortcode($atts, $content = null) {
	extract( shortcode_atts( array(
		'class' => '',
		'link' => '',
		'src' => '',
		'alt' => '',
		'height' => '',
		'width' => '',
		'target' => '',
		'align' => 'none', //left, right, center, none
		'style' => 'none', //dropshadow, border, glow,
		'radius' => '0px', //
		
		'border_width' => '8px',//2px
		'border_color' => '#f3f3f3',
		
		'shadow_opacity' => '0.3',
	), $atts ) );
	
	$uid = 'shortwell-image'.rand();
			
	$output = '';
	
	
	$output .= '<style type="text/css">
					#'.$uid.' .shortwell-image-img{ -webkit-border-radius: '.$radius.'; -moz-border-radius: '.$radius.'; border-radius: '.$radius.'; }
					#'.$uid.' .shortwell-image-img{ border-width:'.$border_width.';  border-color:'.$border_color.'; }
					#'.$uid.'.shortwell-image-style-dropshadow .shortwell-image-img{ -moz-box-shadow: 2px 3px 7px rgba(0,0,0,'.$shadow_opacity.');	-webkit-box-shadow: 2px 3px 7px rgba(0,0,0,'.$shadow_opacity.'); box-shadow: 2px 3px 7px rgba(0,0,0,'.$shadow_opacity.'); }
					#'.$uid.'.shortwell-image-style-bottomshadow .shortwell-image-img{  }
					#'.$uid.'.shortwell-image-style-glow .shortwell-image-img{ -moz-box-shadow: 0 0 3px rgba(0,0,0,'.$shadow_opacity.'); -webkit-box-shadow: 0 0 3px rgba(0,0,0,'.$shadow_opacity.');box-shadow: 0 0 3px rgba(0,0,0,'.$shadow_opacity.'); }
				</style>';
	
	$output .= '<div class="shortwell-image '.$class.' shortwell-image-style-'.$style.'" id="'.$uid.'">';
		if($link){ $output .= '<a href="'.$link.'" target="'.$target.'">'; }
			$output .= '<img src="'.$src.'" alt="'.$alt.'" height="'.$height.'" width="'.$width.'" class="shortwell-image-img align'.$align.'" />';
		if($link){ $output .= '</a>'; }
	$output .= '</div>';
	
	return $output;
}