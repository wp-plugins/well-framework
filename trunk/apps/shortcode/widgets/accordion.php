<?php
if (!class_exists('shortwell_accordion_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_accordion_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_accordion_widget', 	
				'label' => __( 'Accordion (well)', 'well_textdomain' ), 						
				'description' => __( 'Display Accordion Tabs', 'well_textdomain' ), 		
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
					'std' => "[".SHORTWELL_SHORTCODE_PREFIX."accordion_item title=\"Accordion Title 1\"] .... Some Content ..... [/".SHORTWELL_SHORTCODE_PREFIX."accordion_item]\n[".SHORTWELL_SHORTCODE_PREFIX."accordion_item title=\"Accordion Title 1\"] .... Some Content ..... [/".SHORTWELL_SHORTCODE_PREFIX."accordion_item]\n[".SHORTWELL_SHORTCODE_PREFIX."accordion_item title=\"Accordion Title 1\"] .... Some Content ..... [/".SHORTWELL_SHORTCODE_PREFIX."accordion_item]\n",
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
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('['.SHORTWELL_SHORTCODE_PREFIX.'accordion class="'.$instance['class'].'"]'.$instance['content'].'[/'.SHORTWELL_SHORTCODE_PREFIX.'accordion]');
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_accordion_register_widget')){
		function shortwell_accordion_register_widget(){
			register_widget( 'shortwell_accordion_widget' );
		}
		add_action( 'widgets_init', 'shortwell_accordion_register_widget', 1 );
	}
}