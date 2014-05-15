<?php
add_image_size('gallerywell-single', 600, 500, true);
function gallerywell_get_attachment_id_by_src ($image_src) {

    global $wpdb;
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
    $id = $wpdb->get_var($query);
    return $id;

}


/* Category name of the post
--------------------------------------------------------*/
function gallerywell_post_taxonomys_name($post_id, $taxonomy, $divider = ", "){
	$terms = get_the_terms( $post_id, $taxonomy );
						
	if ( $terms && ! is_wp_error( $terms ) ) : 
		$draught_links = array();
		foreach ( $terms as $term ) {
			$draught_links[] = $term->name;
		}					
		$on_draught = join( $divider, $draught_links );
		return $on_draught;
	else:
		return '&nbsp;';
	endif; 
}


/*-**************************************************************
	hex2rgb
-****************************************************************/
function gallerywell_hex2rgb($hex, $arry_format = false) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   
   if( $arry_format == true ){
		return $rgb; // returns an array with the rgb values
   }else{
		return implode(",", $rgb); // returns the rgb values separated by commas
   } 
}