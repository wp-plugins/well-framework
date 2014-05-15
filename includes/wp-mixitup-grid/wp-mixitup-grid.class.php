<?php
/*
Script Name: 	WP Mixitup Grid
Author     : 	Sazzad Hussain (@sazzadh / sazzadh.com)
Description: 	This will output gridbase content with filtersing based on Jquery Mixitup
Version: 		1.0
*/

/**
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

/************************************************************************
		You should not edit the code below or things might explode!
*************************************************************************/

class wp_mixitup_grid{
	
	public $uid;
	
	public $column;
	public $margin;
	public $filter;
	public $div_class;
	public $file_url;
	
	public $the_array;
	
	public $post_type;
	public $post_ids;
	public $pagination;
	public $taxonomy;
	public $taxonomy_terms;
	public $post_limit;
	public $extra_query;
	
	
	
	/**
	* Get started
	* @since  1.0
	*/
	function __construct($data){
		$default = array(			
			'column' => '3',
			'margin' => '3',
			'filter' => false,
			'div_class' => 'default',
			'file_url' => NULL,
			
			'the_array' => NULL,
			
			'post_type' => NULL,
			'post_ids' => NULL,
			'pagination' => true,
			'taxonomy' => NULL,
			'taxonomy_terms' => NULL,
			'post_limit' => 9,
			'extra_query' => NULL,
		);
		$data = array_merge($default, $data);
		
		$this->uid = 'wp-mixitup-grid-'.rand();
		
		$this->column = $data['column'];
		$this->margin = $data['margin'];
		$this->filter = $data['filter'];
		$this->div_class = $data['div_class'];
		$this->file_url = $data['file_url'];
		
		$this->the_array = $data['the_array'];
		
		$this->post_type = $data['post_type'];
		$this->post_ids = $data['post_ids'];
		$this->pagination = $data['pagination'];
		$this->taxonomy = $data['taxonomy'];
		$this->taxonomy_terms = $data['taxonomy_terms'];
		$this->post_limit = $data['post_limit'];
		$this->extra_query = $data['extra_query'];
		
		$this->content();
	}
	
	
	
	/**
	* Get the Path or URL and DRI
	* @since  1.0
	*/
	static function path($type){
		$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
		$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));
		
		if($type == 'url'){ return site_url(str_replace( $path_abs, '', $path_dir )); }
		elseif($type == 'dri'){ return $path_dir; }
	}

	
	
	/**
	* This will output the inline css of the grid
	* @since  1.0
	*/
	function the_css(){
		$width = 100 + $this->margin;
		$column_width = (100 - ( $this->margin * $this->column )) / $this->column;
		echo '<style type="text/css">';
			echo '#'.$this->uid.' ul.wp-mixitup-grid-loop{ width: '.$width.'%; margin-left:-'.$this->margin.'%; }';
			echo '#'.$this->uid.' ul.wp-mixitup-grid-loop li{ width: '.$column_width.'%; margin-bottom:'.$this->margin.'%; margin-left:'.$this->margin.'%; }';
			if($this->filter == true){ echo '#'.$this->uid.' ul.wp-mixitup-grid-loop li{ opacity: 0;  display: none; }'; }
		echo '</style>';
	}
	
	
	
	/**
	* This will output the inline JavaScript of the grid
	* @since  1.0
	*/
	function the_js(){
		echo '<script type="text/javascript">';
			echo 'jQuery(document).ready(function($){';
				echo "$('#".$this->uid."-loop').mixitup({
						targetSelector: '.mix',
						filterSelector: '.filter',
					});";
			echo '});';
		echo '</script>';
	}
	
	
	
	/**
	* Main Content Output Fucntion
	* @since  1.0
	*/
	function content(){
		ob_start();
			$this->the_css();
			echo '<div class="wp-mixitup-grid-clear"></div>';
			echo '<div class="wp-mixitup-grid '.$this->div_class.' column_'.$this->column.'" id="'.$this->uid.'">';
				$this->filter_content();
				echo '<div class="wp-mixitup-grid-clear"></div>';
				$this->main_loop();
			echo '</div>';
			echo '<div class="wp-mixitup-grid-clear"></div>';
			$this->the_js();
		$output = ob_get_contents();
		ob_end_clean();
		echo $output;
	}
	
	
	
	/**
	* Main Loop: from main_loop_array() & main_loop_typs()
	* @since  1.0
	*/
	function main_loop(){
		
			if(is_array($this->the_array) && !empty($this->the_array)){
				$this->main_loop_array();
			}elseif($this->post_type != NULL){
				$this->main_loop_typs();
			}else{
				echo '<li>No Content found</li>';	
			}
		
	}
	
	
	
	/**
	* Content before the loop start
	* @since  1.0
	*/
	function before_loop(){
		echo '<ul class="wp-mixitup-grid-loop" id="'.$this->uid.'-loop">';
	}
	
	
	
	/**
	* content after the loop end
	* @since  1.0
	*/
	function after_loop(){
		echo '</ul>';
	}
	
	
	
	
	/**
	* Main Loop: This function run when we use ARRAY to output the grid
	* @since  1.0
	*/
	function main_loop_array(){
		$this-> before_loop();
		if(is_array($this->the_array) && !empty($this->the_array)){
			foreach($this->the_array as $item){
				echo '<li>';
						include($this->file_url);
				echo '</li>';
			}
		}
		$this->after_loop();
	}
	
	
	
	/**
	* Main Loop: This function run when we use CUSTOM POST TYPE to output the grid
	* @since  1.0
	*/
	function main_loop_typs(){

		if($this->post_type != NULL){
			$query_args = array();
			$query_args['post_type'] = array( $this->post_type );
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$query_args['paged'] = $paged;
			if($this->post_ids) { $query_args['post__in'] = explode(",", $this->post_ids); } 
			if($this->taxonomy_terms){ $query_args['tax_query'] = array(array('taxonomy' => $this->taxonomy,'field' => 'slug','terms' => $this->taxonomy_terms)); }
			$query_args['posts_per_page'] = $this->post_limit;
			$query = new WP_Query($query_args);
			
			if($query->have_posts()):
				$this-> before_loop();
					while( $query->have_posts() ): $query->the_post();
						echo '<li class="'.$this->post_taxonomy_class(get_the_ID(), $this->taxonomy).' mix">';
							include($this->file_url);
						echo '</li>';
					endwhile;
				$this->after_loop();
				echo '<div class="wp-mixitup-grid-clear"></div>';
				$this->pagination($query);
			else:
				echo 'No Post Found';
			endif;
		}
	}
	
	
	
	/**
	* Display Inner fontent of the loop
	* @since  1.0
	*/
	function inner_loop($file, $class = '', $id = '', $item = NULL ){
		echo '<li class="'.$class.'" id="'.$id.'">';
			include($file);
		echo '</li>';
	}
	
	
	
	/**
	* Display the filter content from filter_content_array() & filter_content_type()
	* @since  1.0
	*/
	function filter_content(){
		$html = '';
		if( $this->filter == true ):
			 $terms = get_terms($this->taxonomy);
			 $count = count($terms);
			 
			 $the_array = array();
			 
			 if ( $count > 0 ){
				$html .= '<ul id="'.$this->uid.'-filter" class="wp-mixitup-grid-filter">';
				$html .= '<li class="filter" data-filter="all">'.__('All', 'zoohub_taxdomain').'</li>';
				foreach ( $terms as $term ) {
					$html .= '<li class="filter" data-filter="'.$term->slug.'">'.$term->name.'</li>';
				}
				$html .= "</ul>";
			 }
		 endif;
		 
		 echo $html;
	}
	
	
	
	/**
	* Output the taxonomy nameslagof the post type as class. This is for taxonomy filter
	* @since  1.0
	*/
	function post_taxonomy_class($post_id, $taxonomy){
		$terms = get_the_terms( $post_id, $taxonomy );
							
		if ( $terms && ! is_wp_error( $terms ) ) : 
			$draught_links = array();
			foreach ( $terms as $term ) {
				$draught_links[] = $term->slug;
			}					
			$on_draught = join( " ", $draught_links );
			return $on_draught;
		endif; 
	}
	
	
	
	/**
	* Output the pagination of the Post Type
	* @since  1.0
	*/
	function pagination($query = ''){
		global $wp_query;
		$output = null; 
		if($query == ''){ $query = $wp_query; }
		
		if ($query->max_num_pages > 1) {
			$output .= '<div class="wp-mixitup-grid-pagenav">';
				$big = 999999999; // need an unlikely integer		
				$output .= paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $query->max_num_pages
				));
			$output .= '</div>';
		}
		
		if($this->pagination == true){
			echo $output;
		}
	}
}



/**
* Registers scripts and styles for the Class
* @since  1.0
*/
add_action( 'wp_enqueue_scripts', 'wp_mixitup_grid_scripts' );
function wp_mixitup_grid_scripts(){
	wp_register_style('jquery-mixitup', wp_mixitup_grid::path('url').'css/mixitup.css' );
	wp_enqueue_style('jquery-mixitup');
	wp_register_script('jquery-mixitup', wp_mixitup_grid::path('url').'js/jquery.mixitup.min.js', array('jquery'), '', true);	
	wp_enqueue_script('jquery-mixitup');	
}