<?php
//////////////////////////////////////////////////////////////////
// Counter (Circle)
//////////////////////////////////////////////////////////////////
add_shortcode('shortwell_counter_circle', 'shortwell_counter_circle_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'counter_circle', 'shortwell_counter_circle_shortcode');
function shortwell_counter_circle_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'filled_color' => '#45b900',
		'unfilled_color' => '#f1f1f1',
		'value' => '70'
	), $atts));

	$uid = 'shortwell_CounterCircle'.rand();

	$output = "<script type='text/javascript'>
	jQuery(document).ready(function() {
		var opts = {
		  lines: 12, // The number of lines to draw
		  angle: 0.5, // The length of each line
		  lineWidth: 0.05, // The line thickness
		  colorStart: '".$filled_color."',   // Colors
		  colorStop: '".$filled_color."',    // just experiment with them
		  strokeColor: '".$unfilled_color."',   // to see which ones work best for you
		  generateGradient: false
		};
		var gauge_".$uid." = new Donut(document.getElementById('".$uid."')).setOptions(opts);
		gauge_".$uid.".maxValue = 100; // set max gauge value
		gauge_".$uid.".animationSpeed = 128; // set animation speed (32 is default value)
		gauge_".$uid.".set(".$value."); // set actual value
	});
	</script>";


	$output .= '<div class="shortwell-CounterCircle-wrapper">';
		$output .= '<canvas width="220" height="220" class="shortwell-CounterCircle" id="'.$uid.'">';
		$output .= '</canvas>';
		$output .= '<div class="shortwell-CounterCircle-content">';
			$output .= do_shortcode($content);
		$output .= '</div>';
	$output .= '</div>';

	return $output;
}


//////////////////////////////////////////////////////////////////
// Counter Box
//////////////////////////////////////////////////////////////////
add_shortcode('shortwell_counter_box', 'shortwell_counter_box_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'counter_box', 'shortwell_counter_box_shortcode');
function shortwell_counter_box_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'value' => '70'
	), $atts));

	$output = '';
	$output .= '<div class="shortwell-counterBox-wrapper">';
		$output .= '<div class="shortwell-counterBox-percentage">';
			$output .= '<span class="display-percentage" data-percentage="'.$value.'">0</span><span class="percent">%</span>';
		$output .= '</div>';
		$output .= '<div class="shortwell-counterBox-content">';
			$output .= do_shortcode($content);
		$output .= '</div>';
	$output .= '</div>';

	return $output;
}



//////////////////////////////////////////////////////////////////
// Progess Bar
//////////////////////////////////////////////////////////////////
add_shortcode('shortwell_progress', 'shortwell_progress_shortcode');
add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'progress', 'shortwell_progress_shortcode');
function shortwell_progress_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'filled_color' => '#45b900',
		'unfilled_color' => '#f1f1f1',
		'value' => '70'
	), $atts));

	$output = '';
	$output .= '<div class="shortwell-progressBar" style="background-color:'.$unfilled_color.' !important;border-color:'.$unfilled_color.' !important;">';
		$output .= '<div class="shortwell-progressBar-content" data-percentage="'.$value.'" style="width: ' . $value . '%;background-color:'.$filled_color.' !important;border-color:'.$filled_color.' !important;">';
		$output .= '</div>';
		$output .= '<span class="shortwell-progressBar-title">' . $content . ' ' . $value . '%</span>';
	$output .= '</div>';

	return $output;
}