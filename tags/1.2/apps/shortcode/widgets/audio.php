<?php
if (!class_exists('shortwell_soundcloud_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_soundcloud_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_soundcloud_widget', 	
				'label' => __( 'SoundCloud (well)', 'well_textdomain' ), 						
				'description' => __( 'Display soundcloud in good way', 'well_textdomain' ), 		
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
					'name' => __( 'Soundcloud Audio url', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'url', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),	
				array( 									
					'name' => __( 'Width', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'width', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '100%', 	
				),	
				array( 									
					'name' => __( 'height', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'height', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '81', 	
				),
				array( 									
					'name' => __( 'Comments', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'comments', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'true', 'value'=>'true'),
						array('name'=>'false', 'value'=>'false'),
					), 	
				),
				array( 									
					'name' => __( 'Auto Play', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'autoplay', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'true', 'value'=>'true'),
						array('name'=>'false', 'value'=>'false'),
					), 	
				),
				array( 									
					'name' => __( 'Color', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'color', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '#ff7700', 	
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			$out = '';
			$out .= do_shortcode('[ws_soundcloud url="'.$instance['url'].'" width="'.$instance['width'].'" height="'.$instance['height'].'" comments="'.$instance['comments'].'" auto_play="'.$instance['autoplay'].'" color="'.$instance['color'].'" /]');		
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_soundcloud_register_widget')){
		function shortwell_soundcloud_register_widget(){
			register_widget( 'shortwell_soundcloud_widget' );
		}
		add_action( 'widgets_init', 'shortwell_soundcloud_register_widget', 1 );
	}
}