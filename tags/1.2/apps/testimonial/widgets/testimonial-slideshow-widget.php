<?php
if (!class_exists('tmwell_slideshow_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class tmwell_slideshow_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'tmwell_slideshow_widget', 	
				'label' => __( 'Testimonial Slideshow (well)', 'well_textdomain' ), 						
				'description' => __( 'Show Testimonial item on slideshow style', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => __( 'Recent Testimonials', 'well_textdomain' ), 	
				),
				array( 									
					'name' => __( 'Testimonial IDs', 'well_textdomain' ), 					
					'desc' => __( 'Example: <code>1,2,3</code>', 'well_textdomain' ), 
					'id' => 'ids', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '', 
				), 
				array( 									
					'name' => __( 'Category', 'well_textdomain' ), 					
					'desc' => __( 'Select a Testimonial category', 'well_textdomain' ), 
					'id' => 'cat', 							
					'type'=>'select_tax', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => 'tmwell_cat',
				),
				array( 									
					'name' => __( 'Limit', 'well_textdomain' ), 					
					'desc' => __( 'How many Items you want to show?', 'well_textdomain' ), 
					'id' => 'limit', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '9', 
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[well_testimonial_slideshow ids="'.$instance['ids'].'" cat="'.$instance['cat'].'" limit="'.$instance['limit'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('tmwell_slideshow_register_widget')){
		function tmwell_slideshow_register_widget(){
			register_widget( 'tmwell_slideshow_widget' );
		}
		add_action( 'widgets_init', 'tmwell_slideshow_register_widget', 1 );
	}
}