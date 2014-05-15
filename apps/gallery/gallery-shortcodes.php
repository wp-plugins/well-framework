<?php
class gallerywell_shortcodes{
	function __construct(){
		add_shortcode('well_gallery_single_grid', array(&$this, 'single_grid'));	
		add_shortcode('well_gallery_single_slideshow', array(&$this, 'single_slideshow'));	
		add_shortcode('well_gallery_single_carousel', array(&$this, 'single_carousel'));	
		
		add_shortcode('well_gallery_archive_grid', array(&$this, 'archive_grid'));	
		add_shortcode('well_gallery_archive_slideshow', array(&$this, 'archive_slideshow'));	
		add_shortcode('well_gallery_archive_carousel', array(&$this, 'archive_carousel'));	
	}
	
	/* Single Grid
	---------------------------------------*/
	function single_grid( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'id'	=> '',
			'column'		=> '3',
			'column_margin'		=> '3',
		), $atts ) );
		
		global $wefr_gallery_template_path;
		ob_start();
		include($wefr_gallery_template_path->dri().'grid-single.php');
		$output = ob_get_contents();
		ob_end_clean();
		
		if($id == "") { $output = __('No ID given in the shortcode','well_textdomain'); }
		return $output;
	}
	
	
	
	/* Archive Carousel
	---------------------------------------*/
	function single_carousel( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'id'	=> '',
			'limit'		=> 9,
			'item_margin' => '10',
			'min_items'		=> '2',
			'max_items'		=> '4',
		), $atts ) );
		
		$query_args = array();
		$query_args['post_type'] = array( 'gallerywell');
		if($id) { $query_args['post__in'] = explode(",", $id); } 
		$query = new WP_Query($query_args);
		
		if($query->have_posts()){
			while( $query->have_posts() ): $query->the_post();
				$gallery_meta = get_post_meta(get_the_ID(),'gallerywell_items', true);
				$gallery_items = $gallery_meta['gallery_items'];
						
				$attr = array(		
					'div_class' => 'gallerywell wflds-skin skin-1',
					'file_url' => GALLERYWELL_DRI.'templates/single-item.php',
					
					'the_array' => $gallery_items,
					
					'post_type' => 'gallerywell',
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
				
			endwhile;
		}
		if($id == "") { $output = __('No ID given in the shortcode','well_textdomain'); }
		return $output;
	}	
	
	
	/* Archive Slideshow
	---------------------------------------*/
	function single_slideshow( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'id'	=> '',
		), $atts ) );
		
		$query_args = array();
		$query_args['post_type'] = array( 'gallerywell');
		if($id) { $query_args['post__in'] = explode(",", $id); } 
		$query = new WP_Query($query_args);
		
		if($query->have_posts()){
			while( $query->have_posts() ): $query->the_post();
				$gallery_meta = get_post_meta(get_the_ID(),'gallerywell_items', true);
				$gallery_items = $gallery_meta['gallery_items'];
						
				$attr = array(		
					'div_class' => 'gallerywell wflds-skin skin-1',
					'file_url' => GALLERYWELL_DRI.'templates/single-item.php',
					
					'the_array' => $gallery_items,
				);
				ob_start();
				new wp_flexslider($attr);
				$output = ob_get_contents();
				ob_end_clean();
				
			endwhile;
		}
		
		if($id == "") { $output = __('No ID given in the shortcode','well_textdomain'); }
		return $output;
	}
	
	
	/* Archive Grid
	---------------------------------------*/
	function archive_grid( $atts, $content = null  ) {		
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
			'post_type' => 'gallerywell',
			'posts_per_page ' => $limit,
			'posts_per_archive_page' => $limit,
		);
		
		if ( $cat ) {
			$query['tax_query'][] = array(
				'taxonomy' => 'gallerywell_cat',
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
								
		
		global $wefr_gallery_template_path;
		ob_start();
		include($wefr_gallery_template_path->dri().'grid-archive.php');
		$output = ob_get_contents();
		ob_end_clean();
		
		return $output;
	}
	
	
	/* Archive Slideshow
	---------------------------------------*/
	function archive_slideshow( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'limit'		=> 9,
		), $atts ) );
						
		$attr = array(		
			'div_class' => 'gallerywell wflds-skin skin-1',
			'file_url' => GALLERYWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'gallerywell',
			'taxonomy' => 'gallerywell_cat',
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
	function archive_carousel( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'limit'		=> 9,
			'item_margin' => '10',
			'min_items'		=> '2',
			'max_items'		=> '4',
		), $atts ) );
						
		$attr = array(		
			'div_class' => 'gallerywell wflds-skin skin-1',
			'file_url' => GALLERYWELL_DRI.'templates/archive-item.php',
							
			'post_type' => 'gallerywell',
			'taxonomy' => 'gallerywell_cat',
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
new gallerywell_shortcodes;