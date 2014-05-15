<?php
if (!class_exists('shortwell_divider_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_divider_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_divider_widget', 	
				'label' => __( 'Divider (well)', 'well_textdomain' ), 						
				'description' => __( 'Divider', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Style', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'style', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'none', 'value'=>'none'),
						array('name'=>'single', 'value'=>'single'),
						array('name'=>'double', 'value'=>'double'),
						array('name'=>'dotted', 'value'=>'dotted'),
						array('name'=>'dashed', 'value'=>'dashed'),
						array('name'=>'shadow', 'value'=>'shadow'),
					), 	
				),
				array( 									
					'name' => __( 'Margin Top', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'margin_top', 							
					'type'=>'text', 							
					'class' => 'widefat',					
					'std' => '20px',
				),
				array( 									
					'name' => __( 'Margin Bottom', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'margin_bottom', 							
					'type'=>'text', 								
					'class' => 'widefat',			
					'std' => '20px', 
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			$out = '';
			$out .= do_shortcode('[ws_divider style="'.$instance['style'].'" margin_top="'.$instance['margin_top'].'" margin_bottom="'.$instance['margin_bottom'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_divider_register_widget')){
		function shortwell_divider_register_widget(){
			register_widget( 'shortwell_divider_widget' );
		}
		add_action( 'widgets_init', 'shortwell_divider_register_widget', 1 );
	}
}