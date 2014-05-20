<?php
if (!class_exists('shortwell_map_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_map_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_map_widget', 	
				'label' => __( 'map (well)', 'well_textdomain' ), 						
				'description' => __( 'Display map in good way', 'well_textdomain' ), 		
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
					'name' => __( 'Addpress', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'addpress', 							
					'type'=>'textarea', 
					'rows'=>'5', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => '',
				),	
				array( 									
					'name' => __( 'Type', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'maptype', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'satellite', 'value'=>'satellite'),
						array('name'=>'roadmap', 'value'=>'roadmap'),
						array('name'=>'HYBRID', 'value'=>'hybrid'),
						array('name'=>'TERRAIN', 'value'=>'terrain'),
					), 	
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
					'name' => __( 'Height', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'height', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '300px', 	
				),
				array( 									
					'name' => __( 'Zoom', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'zoom', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '14', 	
				),
				array( 									
					'name' => __( 'Scroll Wheel', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'scrollwheel', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'true', 'value'=>'true'),
						array('name'=>'false', 'value'=>'false'),
					), 	
				),
				array( 									
					'name' => __( 'Popup', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'popup', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'true', 'value'=>'true'),
						array('name'=>'false', 'value'=>'false'),
					), 	
				),
				array( 									
					'name' => __( 'Scale', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'scale', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'true', 'value'=>'true'),
						array('name'=>'false', 'value'=>'false'),
					), 	
				),
				array( 									
					'name' => __( 'Zoom Pancontrol', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'zoompancontrol', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'true', 'value'=>'true'),
						array('name'=>'false', 'value'=>'false'),
					), 	
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			
			$out = '';
			$out .= do_shortcode('[shortwell_map address="'.$instance['addpress'].'" type="'.$instance['maptype'].'" width="'.$instance['width'].'" height="'.$instance['height'].'" zoom="'.$instance['zoom'].'" scrollwheel="'.$instance['scrollwheel'].'" scale="'.$instance['scale'].'" popup="'.$instance['popup'].'" zoom_pancontrol="'.$instance['zoompancontrol'].'" /]');
			
			
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_map_register_widget')){
		function shortwell_map_register_widget(){
			register_widget( 'shortwell_map_widget' );
		}
		add_action( 'widgets_init', 'shortwell_map_register_widget', 1 );
	}
}