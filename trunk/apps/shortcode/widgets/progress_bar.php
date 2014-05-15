<?php
if (!class_exists('shortwell_progress_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_progress_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_progress_widget', 	
				'label' => __( 'Progress Bar (well)', 'well_textdomain' ), 						
				'description' => __( 'Display Counter Circle', 'well_textdomain' ), 		
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
					'name' => __( 'Filled Color', 'well_textdomain' ), 					
					'desc' => __( 'Example: #000000', 'well_textdomain' ), 
					'id' => 'filledcolor', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '#45b900', 	
				),
				array( 									
					'name' => __( 'Unfilled Color', 'well_textdomain' ), 					
					'desc' => __( 'Example: #000000', 'well_textdomain' ), 
					'id' => 'unfilledcolor', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '#f1f1f1', 	
				),
				array( 									
					'name' => __( 'Value', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'value', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '70', 	
				),
				array( 									
					'name' => __( 'Content', 'well_textdomain' ), 					
					'desc' => __( 'Example: HTML, CSS', 'well_textdomain' ),
					'id' => 'content', 							
					'type'=>'textarea', 
					'rows'=>'4', 								
					'class' => 'widefat',					
					'std' => "",
					'tax' => '',
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[ws_progress filled_color="'.$instance['filledcolor'].'" unfilled_color="'.$instance['unfilledcolor'].'" value="'.$instance['value'].'" ]'.$instance['content'].'[/ws_progress]');
			
			
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_progress_register_widget')){
		function shortwell_progress_register_widget(){
			register_widget( 'shortwell_progress_widget' );
		}
		add_action( 'widgets_init', 'shortwell_progress_register_widget', 1 );
	}
}