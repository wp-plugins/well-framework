<?php
if( !function_exists('shortwell_post_gallery_shortcode') ) { 
	function shortwell_post_gallery_shortcode( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'id'	=> '',
			'class'	=>	'',
			'column'	=>	'4',
			'column_margin'	=>	'2',
			'image_size' => 'blog_gallery_image',
		), $atts ) );
		 
		$output = '';
		$rand = rand();
		
		global $post;
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_status' => null,
			'post_parent' => $post->ID
		);
                
		$attachments = get_posts( $args );
		
		$attr = array(		
			'column' => $column,
			'margin' => $column_margin,
			'filter' => false,
			'div_class' => 'shortwell-post-image-gallery skin-1',
			'file_url' => SHORTWELL_DRI.'shortcodes/post-gallery-tpl.php',
							
			'the_array' => $attachments,
		);
		ob_start();
		new wp_mixitup_grid($attr);
		$output = ob_get_contents();
		ob_end_clean();
		return $output;	
		
		return $output;		
		
	}
	add_shortcode( 'shortwell_post_gallery', 'shortwell_post_gallery_shortcode' );
	add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'post_gallery', 'shortwell_post_gallery_shortcode' );
}