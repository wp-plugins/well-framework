<?php
if (!class_exists('shortwell_youtube_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_youtube_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_youtube_widget', 	
				'label' => __( 'youtube (well)', 'well_textdomain' ), 						
				'description' => __( 'Display youtube in good way', 'well_textdomain' ), 		
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
					'name' => __( 'Youtube Video Id', 'well_textdomain' ), 					
					'desc' => __( 'Example: #7GrodWcxpP0', 'well_textdomain' ), 
					'id' => 'youtubeid', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '7GrodWcxpP0', 	
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
			$out .= do_shortcode('[ws_youtube id="'.$instance['youtubeid'].'" width="'.$instance['width'].'" height="'.$instance['height'].'" /]');
			
			
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_youtube_register_widget')){
		function shortwell_youtube_register_widget(){
			register_widget( 'shortwell_youtube_widget' );
		}
		add_action( 'widgets_init', 'shortwell_youtube_register_widget', 1 );
	}
}