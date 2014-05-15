<?php
if( !function_exists('shortwell_taglineBox_shortcode') ) {
	function shortwell_taglineBox_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(		
			'link'	        =>	'',
			'align'	        =>	'left',
			'target'	    =>	'',
			'title'		    =>	'',
			'class'		    =>	'',
			'button'	    =>	'Read More',
			'button_margin'	=>	'',
			'button_size'	=>	'3x',
			'border_highlight'=> 'top', //top, left, right, bottom
			'shadow'        => '', // yes, no
			'border'        => '', // yes, no
			'shadow_opacity'=> '1'
		), $atts ) );
		$uid = rand();
		
		$output = '';
		$output .= "<style type='text/css'>
						#shortwell-TaglineBox-".$uid." .shortwell-TaglineBox-button{ margin-top:".$button_margin.";}
						#shortwell-TaglineBox-".$uid.".shortwell-TaglineBox-shadow-yes .shortwell-TaglineBox-inner:before, 
						#shortwell-TaglineBox-".$uid.".shortwell-TaglineBox-shadow-yes .shortwell-TaglineBox-inner:after{ opacity:".$shadow_opacity."; }
					</style>";
		
		$output .= '<div class="shortwell-TaglineBox '.$class.'" id="shortwell-TaglineBox-'.$uid.'" rel="align-'.$align.' shadow-'.$shadow.' border-'.$border.' border_highlight-'.$border_highlight.'">';
			$output .= '<div class="shortwell-TaglineBox-inner">';
				$output .= '<div class="shortwell-TaglineBox-inner-child">';
				if($link){ $output .= '<a href="'.$link.'" target="'.$target.'" class="shortwell-TaglineBox-button shortwell-button2 size-'.$button_size.'">'.$button.'</a>';}
				$output .= '<div class="shortwell-TaglineBox-text">';			
					if($title){ $output .= '<h2 class="shortwell-TaglineBox-title">'.$title.'</h2>';}
					$output.= '<p class="shortwell-TaglineBox-text">'.do_shortcode($content).'</p>';
				$output .= '</div>';
				if($link){$output .='<a href="'.$link.'" target="'.$target.'" class="shortwell-TaglineBox-button shortwell-button2 size-'.$button_size.' mobile">'.$button.'</a>';}				
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';

		return $output;
	}
	add_shortcode('shortwell_tagline_box', 'shortwell_taglineBox_shortcode');
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'tagline_box', 'shortwell_taglineBox_shortcode');
}