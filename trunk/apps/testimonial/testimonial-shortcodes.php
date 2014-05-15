<?php
class tmwell_shortcodes{
	function __construct(){
		add_shortcode('well_testimonial_grid', array(&$this, 'grid'));	
		add_shortcode('well_testimonial_slideshow', array(&$this, 'slideshow'));	
		add_shortcode('well_testimonial_carousel', array(&$this, 'carousel'));	
	}
	
	
	
	/* Archive Grid
	---------------------------------------*/
	function grid( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'filter'	=> 'no',
			'limit'		=> 9,
			'column'		=> '3',
			'column_margin'		=> '3',
			'pagination'=> 'yes',
		), $atts ) );
		
		
		$query = array(
			'post_type' => 'tmwell',
			'posts_per_page ' => $limit,
			'posts_per_archive_page' => $limit,
		);
		
		if ( $cat ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'tmwell_cat',
				'terms'    => explode( ',', $cat ),
				'field'    => 'slug'
			);
		}
		
		if( ! empty( $ids ) )
			$query['post__in'] = explode( ',', $ids );
	
		if ( get_query_var( 'paged' ) )
			$query['paged'] = get_query_var('paged');
		else if ( get_query_var( 'page' ) )
			$query['paged'] = get_query_var( 'page' );
		else
			$query['paged'] = 1;
		
		global $wefr_testimonial_template_path;
		ob_start();
		include($wefr_testimonial_template_path->dri().'grid.php');
		$output = ob_get_contents();
		ob_end_clean();
		
		return 	$output;
	}
	
	
	/* Archive Slideshow
	---------------------------------------*/
	function slideshow( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'limit'		=> 9,
		), $atts ) );
						
		$attr = array(		
			'div_class' => 'tmwell tmwell-wflds-skin skin-1',
			'file_url' => TMWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'tmwell',
			'taxonomy' => 'tmwell_cat',
			'taxonomy_terms' => $cat,
			'post_limit' => $limit,
		);
		ob_start();
		new wp_flexslider($attr);
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
	
	/* Archive Carousel
	---------------------------------------*/
	function  carousel( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'limit'		=> 9,
			'item_margin' => '10',
			'min_items'		=> '2',
			'max_items'		=> '4',
		), $atts ) );
						
		$attr = array(		
			'div_class' => 'tmwell tmwell-wflds-skin skin-1 tmwell-carousel',
			'file_url' => TMWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'tmwell',
			'taxonomy' => 'tmwell_cat',
			'taxonomy_terms' => $cat,
			'post_limit' => $limit,
			
			'animationLoop' => 'false',
			'itemWidth' => '201',
			'itemMargin' => $item_margin,
			'minItems' => $min_items,
			'maxItems' => $max_items,
		);
		ob_start();
		new wp_flexslider($attr);
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
}
new tmwell_shortcodes;