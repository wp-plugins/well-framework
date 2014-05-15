<?php
if (!class_exists('shortwell_vimeo_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_vimeo_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_vimeo_widget', 	
				'label' => __( 'Vimeo (well)', 'well_textdomain' ), 						
				'description' => __( 'Display vimeo in good way', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 	
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				array( 									
					'name' => __( 'Vimeo Video Id', 'well_textdomain' ), 					
					'desc' => __( 'Example: #85171830', 'well_textdomain' ), 
					'id' => 'vimeoid', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '85171830', 	
				),	
/*				array( 									
					'name' => __( 'Width', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'width', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '600', 	
				),	*/			
				array( 									
					'name' => __( 'Height', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'height', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '360', 	
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			
			$out = '';
			$out .= do_shortcode('[ws_vimeo id="'.$instance['vimeoid'].'" width="'.$instance['width'].'" height="'.$instance['height'].'" /]');
			
			
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_vimeo_register_widget')){
		function shortwell_vimeo_register_widget(){
			register_widget( 'shortwell_vimeo_widget' );
		}
		add_action( 'widgets_init', 'shortwell_vimeo_register_widget', 1 );
	}
}