<?php
if (!class_exists('shortwell_tabgroup_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_tabgroup_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_tabgroup_widget', 	
				'label' => __( 'Tab (well)', 'well_textdomain' ), 						
				'description' => __( 'Display Tabs', 'well_textdomain' ), 		
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
					'name' => __( 'Content', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'content', 							
					'type'=>'textarea', 
					'rows'=>'5', 								
					'class' => 'widefat',					
					'std' => '['.SHORTWELL_SHORTCODE_PREFIX.'tab title="Tab One"] .... Content onw11 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'tab]
 ['.SHORTWELL_SHORTCODE_PREFIX.'tab title="Tab Two"] .... Content onw22 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'tab]
 ['.SHORTWELL_SHORTCODE_PREFIX.'tab title="Tab Three"] .... Content onw33 ....[/'.SHORTWELL_SHORTCODE_PREFIX.'tab]',
					'tax' => '',
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('['.SHORTWELL_SHORTCODE_PREFIX.'tabgroup]'.$instance['content'].'[/'.SHORTWELL_SHORTCODE_PREFIX.'tabgroup]');
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_tabgroup_register_widget')){
		function shortwell_tabgroup_register_widget(){
			register_widget( 'shortwell_tabgroup_widget' );
		}
		add_action( 'widgets_init', 'shortwell_tabgroup_register_widget', 1 );
	}
}