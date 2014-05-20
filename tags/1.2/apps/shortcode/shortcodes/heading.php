<?php
if( !function_exists('shortwell_Heading_shortcode') ) {
	function shortwell_Heading_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(
			'h1_h6' => 'h1',
			'style' => '', //icon-style-1, 'icon-style-2', 'icon-style-3', 'icon-style-4'
			'title'     	=> '',
			'sub_title'     	=> '',
			'align'     	=> '',
			'border_color'     	=> '#f1f1f1',
		), $atts ) );
		
		$uid = rand();
		  
		$output = '<style type="text/css">
		.shortwell-heading.'.$style.' .shortwell-heading-title:before{  border-color: '.$border_color.'; }
		.shortwell-heading.'.$style.' .shortwell-heading-title:after{  border-color: '.$border_color.'; }
	</style>';					
		$output .= '<div id="heading-'.$uid.'" class="shortwell-heading '.$style.' '.$align.'">';
			$output .= '<'.$h1_h6.' class="shortwell-heading-title"><span>'.$title.'</span></'.$h1_h6.'>';
			$output .= '<span class="shortwell-heading-subtitle">'.$sub_title.'</span>';
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('shortwell_heading', 'shortwell_Heading_shortcode');
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'heading', 'shortwell_Heading_shortcode');
}