<?php
function shortwell_checklist_shortcode( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'icon' => 'arrow',
		'iconcolor' => 'initial',
		'iconbg' => 'rgba(0,0,0,0)',
		'iconsize' => '9px',
		'circle' => 'yes'
	), $atts));
	
	$rand = rand();
	$output = '';
	$output .= "<style type='text/css'>
	#shortwell-checklist-".$rand." ul li:before{color:{$iconcolor} !important;}
	#shortwell-checklist-".$rand." ul li:before{background-color:{$iconbg} !important;}
	#shortwell-checklist-".$rand." ul li:before{font-size:{$iconsize} !important;}
	</style>";
	
	$output .= '<div class="shortwell-checklist shortwell-checklist-circle-'.$circle.' shortwell-checklist-icon-'.$icon.'" id="shortwell-checklist-'.$rand.'">';
		$output .= do_shortcode($content);
	$output .= '</div>';
	
	return $output;
}
add_shortcode('shortwell_checklist', 'shortwell_checklist_shortcode');
add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'checklist', 'shortwell_checklist_shortcode' );