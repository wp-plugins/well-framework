<?php
function wefr_get_attachment_id_by_src ($image_src) {

    global $wpdb;
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
    $id = $wpdb->get_var($query);
    return $id;

}


/* Category name of the post
--------------------------------------------------------*/
function wefr_post_taxonomys_name($post_id, $taxonomy, $divider = ", "){
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
function wefr_hex2rgb($hex, $arry_format = false) {
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

if(function_exists('vc_map')):

	function wefr_VC_posttype_param($settings, $value) {
		$dependency = vc_generate_dependencies_attributes($settings);
		$post_args = array('post_type' =>$settings['post_type'],'numberposts' => '-1');
		$post_ids = get_posts($post_args);
		$output = '';
		
		$output .= '<div class="wefr_param_block">';
			$output .= '<select name="'.$settings['param_name'].'" class="wpb_vc_param_value '.$settings['param_name'].' '.$settings['type'].'_field" id="" '.$dependency.'>';
				foreach($post_ids as $post) : setup_postdata($post);
					$output .= '<option '.selected($value, $post->ID, false).' value="'.$post->ID.'">'.get_the_title($post->ID).'</option>';
				endforeach; wp_reset_postdata();
			$output .= '</select>';
		$output .= '</div>';
		
	   return $output;
	}
	add_shortcode_param('custom_post_type', 'wefr_VC_posttype_param');
	
	
	function wefr_VC_taxonomy_param($settings, $value) {
		$dependency = vc_generate_dependencies_attributes($settings);
		$terms = get_terms($settings['taxonomy'], 'orderby=count&hide_empty=0');
		$terms_count = count($terms);
		$output = '';
		
		$output .= '<div class="wefr_param_block">';
			$output .= '<select name="'.$settings['param_name'].'" class="wpb_vc_param_value '.$settings['param_name'].' '.$settings['type'].'_field" id="" '.$dependency.'>';
				if($terms_count > 0):
					$output .= '<option value="">--</option>';
					foreach($terms as $term) :
						$output .= '<option '.selected($value, $term->slug, false).' value="'.$term->slug.'">'.$term->name.'</option>';
					endforeach;
				else:
					$output .= '<option value="">No '.$settings['heading'].' added</option>';
				endif;
			$output .= '</select>';
		$output .= '</div>';
		
	   return $output;
	}
	add_shortcode_param('custom_taxonomy', 'wefr_VC_taxonomy_param');

endif;