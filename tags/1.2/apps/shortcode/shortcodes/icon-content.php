<?php
if( !function_exists('shortwell_IconContent_shortcode') ) {
	function shortwell_IconContent_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(
			'icon'	        => '',
			'style' => '', //icon-style-1, 'icon-style-2', 'icon-style-3', 'icon-style-4'
			'css_animation' => '',
			'title'     	=> '',
			'link' => '',
			'link_target' => '_blank', // _new, _parent, _self, _top
		), $atts ) );
		
		$uid = rand();
		  
		$output = '';					
		$output .= '<div id="IconContent-'.$uid.'" class="shortwell-IconContent '.$style.' '.$css_animation.'">';
			if($link != ''){ $output .= '<a href="'.$link.'">'; }
				$output .= '<div class="heading heading-and-icon">';
					$output .= '<span class="shortwell-IconContent-icon"><i class="fa '.$icon.'"></i></span>';
					$output .= '<h4 class="shortwell-IconContent-title">'.$title.'</h4>';
				$output .= '</div>';
				$output .= '<div class="shortwell-IconContent-content">'.do_shortcode($content).'</div>';
			if($link != ''){ $output .= '</a>'; }
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode('shortwell_icon_content', 'shortwell_IconContent_shortcode');
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'icon_content', 'shortwell_IconContent_shortcode');
}