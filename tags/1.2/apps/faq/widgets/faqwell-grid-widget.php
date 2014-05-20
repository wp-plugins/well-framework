<?php
if (!class_exists('faqwell_grid_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class faqwell_grid_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'faqwell_grid_widget', 	
				'label' => __( 'FAQ (well)', 'well_textdomain' ), 						
				'description' => __( 'Show Well item ', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => __( 'Recent FAQs', 'well_textdomain' ), 	
				),
				array( 									
					'name' => __( 'FAQ IDs', 'well_textdomain' ), 					
					'desc' => __( 'Example: <code>1,2,3</code>', 'well_textdomain' ), 
					'id' => 'ids', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '', 
				), 
				array( 									
					'name' => __( 'Category', 'well_textdomain' ), 					
					'desc' => __( 'Select a FAQ category', 'well_textdomain' ), 
					'id' => 'cat', 							
					'type'=>'select_tax', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => 'faqwell_cat',
				),
				array( 									
					'name' => __( 'Filter', 'well_textdomain' ), 					
					'desc' => __( 'do you want to enable filter?', 'well_textdomain' ), 
					'id' => 'filter', 							
					'type'=>'select', 								
					'class' => 'widefat',					
					'std' => '',
					'fields' => array(
						array('name'=> 'yes', 'value'=>'yes'),
						array('name'=> 'no', 'value'=>'no'),
					),
				),
				array( 									
					'name' => __( 'Limit', 'well_textdomain' ), 					
					'desc' => __( 'How many Items you want to show?', 'well_textdomain' ), 
					'id' => 'limit', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '9', 
				),
				array( 									
					'name' => __( 'Pagination', 'well_textdomain' ), 					
					'desc' => __( 'do you want to enable pagination?', 'well_textdomain' ), 
					'id' => 'pagination', 							
					'type'=>'select', 								
					'class' => 'widefat',					
					'std' => '',
					'fields' => array(
						array('name'=> 'yes', 'value'=>'yes'),
						array('name'=> 'no', 'value'=>'no'),
					),
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[well_faq ids="'.$instance['ids'].'" cat="'.$instance['cat'].'" limit="'.$instance['limit'].'" pagination="'.$instance['pagination'].'" filter="'.$instance['filter'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('faqwell_grid_register_widget')){
		function faqwell_grid_register_widget(){
			register_widget( 'faqwell_grid_widget' );
		}
		add_action( 'widgets_init', 'faqwell_grid_register_widget', 1 );
	}
}