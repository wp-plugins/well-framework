<?php
if (!function_exists('shortwell_tabgroup_shortcode')) {
	function shortwell_tabgroup_shortcode( $atts, $content = null ) {
	
		// Display Tabs
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		$output = '';
		if( count($tab_titles) ){
		    $output .= '<div id="shortwell-tab-'. rand(1, 100) .'" class="shortwell-tabs">';
			$output .= '<ul class="ui-tabs-nav ">';
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#shortwell-tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    $output .= '</ul><div class="shortwell-clear"></div>';
		    $output .= do_shortcode( $content );
		    $output .= '</div>';
		} else {
			$output .= do_shortcode( $content );
		}
		return $output;
	}
	add_shortcode( 'shortwell_tabgroup', 'shortwell_tabgroup_shortcode' );
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'tabgroup', 'shortwell_tabgroup_shortcode');
}



if (!function_exists('shortwell_tab_shortcode')) {
	function shortwell_tab_shortcode( $atts, $content = null ) {
		$defaults = array(
			'title'	=> 'Tab',
			'class'	=> ''
		);
		extract( shortcode_atts( $defaults, $atts ) );
		return '<div id="shortwell-tab-'. sanitize_title( $title ) .'" class="tab-content '. $class .'">'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'shortwell_tab', 'shortwell_tab_shortcode' );
	add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'tab', 'shortwell_tab_shortcode');
}