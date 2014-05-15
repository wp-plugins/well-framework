<?php
if (!class_exists('shortwell_alert_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_alert_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_alert_widget', 	
				'label' => __( 'Alert (well)', 'well_textdomain' ), 						
				'description' => __( 'Alert message boxes', 'well_textdomain' ), 		
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
					'name' => __( 'Type', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'type', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'info', 'value'=>'info'),
						array('name'=>'danger', 'value'=>'danger'),
						array('name'=>'success', 'value'=>'success'),
						array('name'=>'error', 'value'=>'error'),
					), 	
				),
				array( 									
					'name' => __( 'Content', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'content', 							
					'type'=>'textarea', 
					'rows'=>'5', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => '',
				),
				array( 									
					'name' => __( 'Class', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'class', 							
					'type'=>'text', 								
					'class' => 'widefat',			
					'std' => '', 
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			$out = '';
			$out .= do_shortcode('[shortwell_alert title="'.$instance['title'].'" type="'.$instance['type'].'"]'.$instance['content'].'[/shortwell_alert]');
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_alert_register_widget')){
		function shortwell_alert_register_widget(){
			register_widget( 'shortwell_alert_widget' );
		}
		add_action( 'widgets_init', 'shortwell_alert_register_widget', 1 );
	}
}