<?php
if( !function_exists('shortwell_button_shortcode') ) {
	function shortwell_button_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color'			=> '',
			'size'			=> '2x',
			'link'			=> '#',
			'title'			=> '',
			'text'			=> 'Button',
			'target'		=> '',
			'rel'			=> '',
			'border_radius'	=> '',
			'class'			=> '',
			'icon_left'		=> '',
			'icon_right'	=> '',
			'id'	        => '',
			'bg_color'      => '',
			'text_color'    => '',
			'full_width'    => '',
		), $atts ) );
		
		
		$output = '';
		
		//icon
		$icon_left = ($icon_left) ? '<i class="fa '. $icon_left .'"></i>' : NULL;
		$icon_right = ($icon_right) ? '<i class="fa '. $icon_right .'"></i>' : NULL;
		
		//attribute
		$rel = ($rel) ? 'rel="'.$rel.'" ':NULL;
		$target = ($target) ? 'target="'.$target.'" ':NULL;
		$id = ($id) ? 'id="'.$id.'" ':NULL;
		$title = ($title) ? 'title="'.$title.'" ':NULL;
		
		//class
		$full_width = ($full_width == 'yes') ? 'shortwell-button2-full-width':NULL;
		$icon_left_class = ($icon_left) ? 'icon-left' : NULL;
		$icon_right_class = ($icon_right) ? 'icon-right' : NULL;
		$button_class = 'class="shortwell-button2 '.$full_width.' '.$class.' size-'.$size.' color-'.$color.' '.$icon_left_class.' '.$icon_right_class.'" ';
		
		//style
		$radius = ( $border_radius) ? 'border-radius:'. $border_radius .';' : NULL;
		$bg_color = ( $bg_color) ? 'background-color:'. $bg_color .';' : NULL;
		$text_color = ( $text_color) ? 'color:'. $text_color .';' : NULL;
		$button_style = 'style="'.$radius.$bg_color.$text_color.'" ';
		
		$output .= '<a href="'.$link.'" '.$button_class.$rel.$target.$id.$title.$button_style.'>'.$icon_left.$text.$icon_right.'</a>';
		return $output;
	}
	add_shortcode('shortwell_button', 'shortwell_button_shortcode');
	add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'button', 'shortwell_button_shortcode' );
}