<?php
if( !function_exists('shortwell_post_list_shortcode') ) { 
	function shortwell_post_list_shortcode( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'filter'	=> 'no',
			'limit'		=> 9,
			'column'		=> '3',
			'column_margin'		=> '3',
			'pagination'=> 'yes',
		), $atts ) );
		
		if($filter == 'yes'){ $filter = true; }else{ $filter = false; }
		if($pagination == 'yes'){ $pagination = true; }else{ $pagination = false; }
						
		$attr = array(		
			'column' => $column,
			'margin' => $column_margin,
			'filter' => $filter,
			'div_class' => 'postlist skin-1',
			'file_url' => SHORTWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'post',
			'post_ids' => $ids,
			'pagination' => $pagination,
			'taxonomy' => 'category',
			'taxonomy_terms' => $cat,
			'post_limit' => $limit,
		);
		ob_start();
		new wp_mixitup_grid($attr);
		$output = ob_get_contents();
		ob_end_clean();
		return $output;	
		
	}
	add_shortcode( 'shortwell_post_list', 'shortwell_post_list_shortcode' );
	add_shortcode( SHORTWELL_SHORTCODE_PREFIX.'post_list', 'shortwell_post_list_shortcode' );
}