<?php
if( !function_exists('shortwell_column_shortcode') ) {
	function shortwell_column_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(
			'size'		=> 'one-third', //one-half, one-third, two-third, 
			'position'	=>'first',
			'class'		=> '',
			'bg_color' => '',
			'text_align' => '',
			'text_color' => '',
			'heading_color' => '',
			'link_color' => '',
			'padding' => '',
		  ), $atts ) );
		  
		  $output = '';
		  $uid = 'shortwell-column'.rand();
		  $bg_color = ($bg_color) ? 'background-color:'.$bg_color.';' : '';
		  $padding = ($padding) ? 'padding:'.$padding.';' : '';
		  
		  $output .= '<style type="text/css">
					#'.$uid.'{ color:'.$text_color.'; }
					#'.$uid.' a{ color:'.$link_color.'; }
					#'.$uid.' h1, #'.$uid.' h2, #'.$uid.' h3, #'.$uid.' h4, #'.$uid.' h5, #'.$uid.' h6{ color:'.$heading_color.'; }
				</style>';
		  
		$output .= '<div id="'.$uid.'" class="shortwell-column shortwell-' . $size . ' shortwell-column-'.$position.' '. $class .'" style="'.$bg_color.'">';
			$output .= '<div class="shortwell-column-inner" style="'.$padding.'">' . do_shortcode($content) . '</div>';
		$output .= '</div>';
		   
		return $output;
	}
	add_shortcode('shortwell_column', 'shortwell_column_shortcode');
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'column', 'shortwell_column_shortcode');
}