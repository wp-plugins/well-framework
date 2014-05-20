<?php
class portwell_shortcodes{
	function __construct(){
		add_shortcode('well_portfolio_grid', array(&$this, 'grid'));	
		add_shortcode('well_portfolio_slideshow', array(&$this, 'slideshow'));	
		add_shortcode('well_portfolio_carousel', array(&$this, 'carousel'));
		add_shortcode('well_portfolio_single', array(&$this, 'single'));
		
		
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
			'post_type' => 'portwell',
			'posts_per_page ' => $limit,
			'posts_per_archive_page' => $limit,
		);
		
		if ( $cat ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'portwell_cat',
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
		
		global $wefr_portfolio_template_path;
		ob_start();
		include($wefr_portfolio_template_path->dri().'grid.php');
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
			'div_class' => 'portwell portwell-wflds-skin skin-1',
			'file_url' => PORTWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'portwell',
			'taxonomy' => 'portwell_cat',
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
			'div_class' => 'portwell portwell-wflds-skin skin-1 portwell-carousel',
			'file_url' => PORTWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'portwell',
			'taxonomy' => 'portwell_cat',
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
	
	/* Single
	---------------------------------------*/
	function  single( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'id'		=> '',
		), $atts ) );
		$query_args = array();
		$query_args['post_type'] = array( 'portwell' );
		if($id) { $query_args['post__in'] = explode(",", $id); } 
		$query = new WP_Query($query_args);
			
		ob_start();
			if($query->have_posts()):
				while( $query->have_posts() ): $query->the_post();
					include(PORTWELL_DRI.'templates/single-item.php');
				endwhile;
			else:
				echo 'No Post Found';
			endif;
		$output = ob_get_contents();
		ob_end_clean();
		
		if($id == ''){ $output = __('No ID defined', 'well_textdomain'); }
		return $output;
	}
}
new portwell_shortcodes;