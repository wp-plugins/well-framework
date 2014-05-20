<?php
if (!class_exists('portwell_grid_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class portwell_grid_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'portwell_grid_widget', 	
				'label' => __( 'Portfolio Grid (well)', 'well_textdomain' ), 						
				'description' => __( 'Show portfolio item on grid style', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => __( 'Recent Portfolios', 'well_textdomain' ), 	
				),
				array( 									
					'name' => __( 'Portfolio IDs', 'well_textdomain' ), 					
					'desc' => __( 'Example: <code>1,2,3</code>', 'well_textdomain' ), 
					'id' => 'ids', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '', 
				), 
				array( 									
					'name' => __( 'Category', 'well_textdomain' ), 					
					'desc' => __( 'Select a Portfolio category', 'well_textdomain' ), 
					'id' => 'cat', 							
					'type'=>'select_tax', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => 'portwell_cat',
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
					'name' => __( 'Columns', 'well_textdomain' ), 					
					'desc' => __( 'Grid column', 'well_textdomain' ), 
					'id' => 'column', 							
					'type'=>'select', 								
					'class' => 'widefat',					
					'std' => '3',
					'fields' => array(
						array('name'=> '1', 'value'=>'1'),
						array('name'=> '2', 'value'=>'2'),
						array('name'=> '3', 'value'=>'3'),
						array('name'=> '4', 'value'=>'4'),
						array('name'=> '5', 'value'=>'5'),
					), 
				),
				array( 									
					'name' => __( 'Column Margin', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'column_margin', 							
					'type'=>'text', 								
					'class' => 'widefat',
					'multiple' => 'yes', 					
					'std' => '3', 
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
			$out .= do_shortcode('[well_portfolio_grid ids="'.$instance['ids'].'" cat="'.$instance['cat'].'" limit="'.$instance['limit'].'" pagination="'.$instance['pagination'].'" column="'.$instance['column'].'" column_margin="'.$instance['column_margin'].'" filter="'.$instance['filter'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('portwell_grid_register_widget')){
		function portwell_grid_register_widget(){
			register_widget( 'portwell_grid_widget' );
		}
		add_action( 'widgets_init', 'portwell_grid_register_widget', 1 );
	}
}