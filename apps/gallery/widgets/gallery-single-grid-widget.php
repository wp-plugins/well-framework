<?php
if (!class_exists('gallerywell_single_grid_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class gallerywell_single_grid_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'gallerywell_single_grid_widget', 	
				'label' => __( 'Gallery Single Grid (well)', 'well_textdomain' ), 						
				'description' => __( 'Show Gallery Single item on grid style', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 							
				array( 									
					'name' => __( 'Title', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'title', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => __( 'Recent Gallery Single', 'well_textdomain' ), 	
				),
				array( 									
					'name' => __( 'Gallery Single ID', 'well_textdomain' ), 					
					'desc' => __( 'Example: <code>1,2,3</code>', 'well_textdomain' ), 
					'id' => 'ids', 							
					'type'=>'text', 								
					'class' => 'widefat',				
					'std' => '', 
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
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[well_gallery_single_grid id="'.$instance['ids'].'" column="'.$instance['column'].'" column_margin="'.$instance['column_margin'].'" /]');

			echo $out;
		}
		
	
	}

	if (!function_exists('gallerywell_single_grid_register_widget')){
		function gallerywell_single_grid_register_widget(){
			register_widget( 'gallerywell_single_grid_widget' );
		}
		add_action( 'widgets_init', 'gallerywell_single_grid_register_widget', 1 );
	}
}