<?php
if (!class_exists('gallerywell_single_slideshow_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class gallerywell_single_slideshow_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'gallerywell_single_slideshow_widget', 	
				'label' => __( 'Gallery Single Slideshow (well)', 'well_textdomain' ), 						
				'description' => __( 'Show Gallery Single item on slideshow style', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => __( 'Recent Gallery Single', 'well_textdomain' ), 	
				),
				array( 									
					'name' => __( 'Gallery Single ID', 'well_textdomain' ), 					
					'desc' => __( 'Example: <code>1,2,3</code>', 'well_textdomain' ), 
					'id' => 'ids', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '', 
				), 
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[well_gallery_single_slideshow id="'.$instance['ids'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('gallerywell_single_slideshow_register_widget')){
		function gallerywell_single_slideshow_register_widget(){
			register_widget( 'gallerywell_single_slideshow_widget' );
		}
		add_action( 'widgets_init', 'gallerywell_single_slideshow_register_widget', 1 );
	}
}