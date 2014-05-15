<?php
class peowell_shortcodes{
	function __construct(){
		add_shortcode('well_people_grid', array(&$this, 'grid'));	
		add_shortcode('well_people_slideshow', array(&$this, 'slideshow'));	
		add_shortcode('well_people_carousel', array(&$this, 'carousel'));
		add_shortcode('well_people_single', array(&$this, 'single'));
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
			'post_type' => 'peowell',
			'posts_per_page ' => $limit,
			'posts_per_archive_page' => $limit,
		);
		
		if ( $cat ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'peowell_cat',
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
		
		global $wefr_people_template_path;
		ob_start();
		include($wefr_people_template_path->dri().'grid.php');
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
			'div_class' => 'peowell peowell-wflds-skin skin-1',
			'file_url' => PEOWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'peowell',
			'taxonomy' => 'peowell_cat',
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
			'div_class' => 'peowell peowell-wflds-skin skin-1 peowell-carousel',
			'file_url' => PEOWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'peowell',
			'taxonomy' => 'peowell_cat',
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
		$query_args['post_type'] = array( 'peowell' );
		if($id) { $query_args['post__in'] = explode(",", $id); } 
		$query = new WP_Query($query_args);
			
		ob_start();
			if($query->have_posts()):
				while( $query->have_posts() ): $query->the_post();
					include(PEOWELL_DRI.'templates/single-item.php');
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
new peowell_shortcodes;