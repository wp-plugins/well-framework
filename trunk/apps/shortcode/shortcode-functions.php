<?php
if( !function_exists('shortwell_fix_shortcodes') ) {
	function shortwell_fix_shortcodes($content){   
		$array = array (
			'<p>['		=> '[', 
			']</p>'		=> ']', 
			']<br />'	=> ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'shortwell_fix_shortcodes');
}
add_image_size('blog_gallery_image', 350, 350, true);
add_image_size('postitam-img', 140, 140, true);

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );