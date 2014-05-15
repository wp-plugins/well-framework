<?php
class docwell_shortcodes{
	function __construct(){
		add_shortcode('well_doc', array(&$this, 'single'));	
		add_shortcode('well_doc_archive', array(&$this, 'archive'));	
	}
	
	function archive( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'class'		=> '',
			'limit'		=> '10',
			'skin'	=> 'st1',
		), $atts ) );

		$output = '';
		$rand = 'docwell_'.rand();
		$query_args = array();
		$query_args['post_type'] = array( 'docwell');
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query_args['paged'] = $paged;
		if($ids) { $query_args['post__in'] = explode(",", $ids); } 
		if($cat){ $query_args['tax_query'] = array(array('taxonomy' =>'docwell_cat','field' => 'slug','terms' => $cat)); }
		$query_args['posts_per_page'] = $limit;
		
		$output .= '<div class="docwell-archive '.$class.' '.$skin.'" id="'.$rand.'">';
			$query = new WP_Query($query_args);
			if($query->have_posts()):
				while( $query->have_posts() ): $query->the_post();
					$output .= '<div class="docwell-archive-item">';
						$output .= get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('alt'=> get_the_title()));
						$output .= '<h2 class="docwell-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
					$output .= '</div>';
				endwhile;
				$output .= docwell_paginate($query);
			endif;
			wp_reset_query();
		$output .= '</div>';		
		return $output;
	}
	
	function single( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'id'		=> '',
			'class'		=> '',
			'skin'	=> 'st1',
		), $atts ) );

		$output = '';
		$rand = 'docwell_'.rand();
		$query_args = array();
		$query_args['post_type'] = array( 'docwell');
		if($id) { $query_args['post__in'] = explode(",", $id); } 
		
		$output .= '<div class="docwell-single '.$class.' '.$skin.'" id="'.$rand.'">';
			$query = new WP_Query($query_args);
			if($query->have_posts()):
				while( $query->have_posts() ): $query->the_post();
					$meta = get_post_meta(get_the_ID(), 'docwell_items', true);
					$output .= $this->menu($meta['doc_items']);
					$output .= $this->content($meta['doc_items'], $rand );
				endwhile;
			endif;
			wp_reset_query();
		$output .= '</div>';		
		return $output;
	}
	
	
	
	function menu($meta){
		$output = '';
		
		$output .= '<div class="docwell-single-nav" >';
			$output .= '<div class="docwell-clear"></div>';
			$output .= '<ul>';
				$heading = 0;
				foreach($meta as $item):
					if(isset($item['post_id']) && !empty($item['post_id'])){
						 $post_slugs = explode( '||', $item['post_id'] );
						 $output .= '<li><a>'.$item['title'].'</a>';
						 	$output .= '<ul>';
								foreach($post_slugs as $slug){
									$content = get_page_by_path($slug, ARRAY_A, 'docwell_items');
									if($content){
										$title = get_the_title($content['ID']);
										if( get_post_meta($content['ID'], 'docwell_title', true) ){ $title = get_post_meta($content['ID'], 'docwell_title', true); }
										$output .= '<li><a href="#'.docwell_create_slug($content['ID']).'">'.$title.'</a></li>';
									}
								}
							$output .= '</ul>';
						 $output .= '</li>';
					}
				endforeach;
				
				
			$output .= '</ul>';
			$output .= '<div class="docwell-clear"></div>';
		$output .= '</div>';
		$output .= '<div class="docwell-clear"></div>';
		return $output;	
	}
	
	
	function content($meta, $rand ){
		$output = '';
		$output .= '<div class="docwell-single-content">';
			foreach($meta as $item):
				if(isset($item['post_id']) && !empty($item['post_id'])){
					$post_slugs = explode( '||', $item['post_id'] );
					
					foreach($post_slugs as $slug){
						$content = get_page_by_path($slug, ARRAY_A, 'docwell_items');
						if($content){
							$title = get_the_title($content['ID']);
							if( get_post_meta($content['ID'], 'docwell_title', true) ){ $title = get_post_meta($content['ID'], 'docwell_title', true); }
										
							$output .= '<div class="docwell-single-item" id="'.docwell_create_slug($content['ID']).'">';
								$output .= '<h2 class="docwell-title">';
									$output .= $title.' <a class="docwell-parmalink"href="#'.docwell_create_slug($content['ID']).'"><i class="fa fa-link"></i></a>';
								$output .= '</h2>';
								$output .= '<div class="docwell-single-text">'.apply_filters('docwell_content', docwell_content($content['ID'])).'</div>';
								$output .= '<div class="docwell-clear"></div>';
								$output .= '<a class="docwell-backto" href="#'.$rand.'"><i class="fa fa-arrow-circle-up"></i>'.__("Back To Top", "well_textdomain").'</a>';
								$output .= '<div class="docwell-clear"></div>';
							$output .= '</div>';
						}
					}
					
				}
			endforeach;
		$output .= '</div>';	
		return $output;	
	}
	
	
	
}
new docwell_shortcodes;