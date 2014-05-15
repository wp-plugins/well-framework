<?php
if (!class_exists('peowell_carousel_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class peowell_carousel_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'peowell_carousel_widget', 	
				'label' => __( 'People Carousel (well)', 'well_textdomain' ), 						
				'description' => __( 'Show People item on carousel style', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => __( 'Team Members', 'well_textdomain' ), 	
				),
				array( 									
					'name' => __( 'People IDs', 'well_textdomain' ), 					
					'desc' => __( 'Example: <code>1,2,3</code>', 'well_textdomain' ), 
					'id' => 'ids', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '', 
				), 
				array( 									
					'name' => __( 'Category', 'well_textdomain' ), 					
					'desc' => __( 'Select a People category', 'well_textdomain' ), 
					'id' => 'cat', 							
					'type'=>'select_tax', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => 'peowell_cat',
				),
				array( 									
					'name' => __( 'Item Margin', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'item_margin', 							
					'type'=>'text', 								
					'class' => 'widefat',					
					'std' => '20',
					'tax' => '',
				),
				array( 									
					'name' => __( 'Minimum Items', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'min_items', 							
					'type'=>'text', 								
					'class' => 'widefat',					
					'std' => '2',
					'tax' => '',
				),
				array( 									
					'name' => __( 'Maximum Items', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'max_items', 							
					'type'=>'text', 								
					'class' => 'widefat',					
					'std' => '4',
					'tax' => '',
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[well_people_carousel ids="'.$instance['ids'].'" cat="'.$instance['cat'].'" item_margin="'.$instance['item_margin'].'" min_items="'.$instance['min_items'].'" max_items="'.$instance['max_items'].'" /]');
			echo $out;
		}	
	}

	if (!function_exists('peowell_carousel_register_widget')){
		function peowell_carousel_register_widget(){
			register_widget( 'peowell_carousel_widget' );
		}
		add_action( 'widgets_init', 'peowell_carousel_register_widget', 1 );
	}
}