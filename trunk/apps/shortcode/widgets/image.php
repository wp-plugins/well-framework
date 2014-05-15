<?php
if (!class_exists('shortwell_image_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_image_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_image_widget', 	
				'label' => __( 'Image (well)', 'well_textdomain' ), 						
				'description' => __( 'Display Image in good way', 'well_textdomain' ), 		
			 );
		
			$args['fields'] = array( 		
				array( 									
					'name' => __( 'Class', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'class', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),					
				array( 									
					'name' => __( 'Image src/link', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'image', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				array( 									
					'name' => __( 'Radius', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'radius', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '0px', 	
				),	
				array( 									
					'name' => __( 'Height', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'height', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),	
				array( 									
					'name' => __( 'Width', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'width', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '0px', 	
				),
				array( 									
					'name' => __( 'Image Align', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'type', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'none', 'value'=>'none'),
						array('name'=>'left', 'value'=>'left'),
						array('name'=>'right', 'value'=>'right'),
						array('name'=>'center', 'value'=>'center'),
					), 	
				),	
				array( 									
					'name' => __( 'Image alt', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'alt', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				
				array( 									
					'name' => __( 'Image Style', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'style', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'none', 'value'=>'none'),
						array('name'=>'dropshadow', 'value'=>'dropshadow'),
						array('name'=>'border', 'value'=>'border'),
						array('name'=>'glow', 'value'=>'glow'),
					), 	
				),
				array( 									
					'name' => __( 'Shadow Opacity', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'shadow_opacity', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '0.3', 	
				),
				array( 									
					'name' => __( 'link', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'link', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				array( 									
					'name' => __( 'Link Target', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'target', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'_blank', 'value'=>'_blank'),
						array('name'=>'_new', 'value'=>'_new'),
						array('name'=>'_parent', 'value'=>'_parent'),
						array('name'=>'_self', 'value'=>'_self'),
						array('name'=>'_top', 'value'=>'_top'),
					), 	
				),
				
				array( 									
					'name' => __( 'Border width', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'border_width', 							
					'type'=>'text', 								
					'class' => 'widefat',					
					'std' => '',
					'tax' => '8px',
				),
				array( 									
					'name' => __( 'Border Color', 'well_textdomain' ), 					
					'desc' => __( 'Example: #000000', 'well_textdomain' ), 
					'id' => 'border_color', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => 'initial', 	
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			$out = '';
			$out .= do_shortcode('[ws_image class="'.$instance['class'].'" src="'.$instance['image'].'" radius="'.$instance['radius'].'" height="'.$instance['height'].'" width="'.$instance['width'].'" align="'.$instance['align'].'" alt="'.$instance['alt'].'" style="'.$instance['style'].'" shadow_opacity="'.$instance['shadow_opacity'].'" link="'.$instance['link'].'" target="'.$instance['target'].'" border_width="'.$instance['border_width'].'" border_color="'.$instance['border_color'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_image_register_widget')){
		function shortwell_image_register_widget(){
			register_widget( 'shortwell_image_widget' );
		}
		add_action( 'widgets_init', 'shortwell_image_register_widget', 1 );
	}
}