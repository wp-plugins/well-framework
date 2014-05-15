<?php
add_shortcode('shortwell_map', 'shortwell_map_shortcode');
add_shortcode(SHORTWELL_SHORTCODE_PREFIX.'map', 'shortwell_map_shortcode');
function shortwell_map_shortcode($atts, $content = null) {

	extract(shortcode_atts(array(
		'address' => '',
		'type' => 'satellite',
		'width' => '100%',
		'height' => '300px',
		'zoom' => '14',
		'scrollwheel' => 'true',
		'scale' => 'true',
		'popup' => 'true',
		'zoom_pancontrol' => 'true',
		'icon' => NULL,
	), $atts));

	$uid = 'shortwell-map'.rand();

	if($scrollwheel == 'yes') {
		$scrollwheel = 'true';
	} elseif($scrollwheel == 'no') {
		$scrollwheel = 'false';
	}

	if($scale == 'yes') {
		$scale = 'true';
	} elseif($scale == 'no') {
		$scale = 'false';
	}

	if($zoom_pancontrol == 'yes') {
		$zoom_pancontrol = 'true';
	} elseif($zoom_pancontrol == 'no') {
		$zoom_pancontrol = 'false';
	}

	$addresses = explode('|', $address);
	if($icon){ $icon = "icon: '".$icon."', "; }

	$markers = '';
	foreach($addresses as $address_string) {
		$markers .= "{
			address: '{$address_string}',
			".$icon."
			html: {
				content: '{$address_string}',
				popup: {$popup}
			} 
		},";	
	}

	$html = "<script type='text/javascript'>
	jQuery(document).ready(function($) {
		jQuery('#".$uid."').goMap({
			address: '{$addresses[0]}',
			zoom: {$zoom},
			scrollwheel: {$scrollwheel},
			scaleControl: {$scale},
			navigationControl: {$zoom_pancontrol},
			maptype: '{$type}',
	        markers: [{$markers}]
		});
	});
	</script>";

	$html .= '<div class="shortwell-map" id="'.$uid.'" style="width:'.$width.';height:'.$height.';">';
	$html .= '</div>';

	return $html;
}