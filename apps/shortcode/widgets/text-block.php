<?php
if (!class_exists('shortwell_text_block_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_text_block_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_text_block_widget', 	
				'label' => __( 'Text Block (well)', 'well_textdomain' ), 						
				'description' => __( 'Text Block', 'well_textdomain' ), 		
			 );
			$args['fields'] = array( 	
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => 'Nam vel tincidunt diam', 	
				),						
				array( 									
					'name' => __( 'Content', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'content', 							
					'type'=>'textarea', 
					'rows'=>'7', 								
					'class' => 'widefat',					
					'std' => "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.",
					'tax' => '',
				),
			);
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = '';
			$out .= do_shortcode('[ws_text_block title="'.$instance['title'].'"]'.$instance['content'].'[/ws_text_block]');
			echo $out;
		}
	
	}
	if (!function_exists('shortwell_text_block_register_widget')){
		function shortwell_text_block_register_widget(){
			register_widget( 'shortwell_text_block_widget' );
		}
		add_action( 'widgets_init', 'shortwell_text_block_register_widget', 1 );
	}
}