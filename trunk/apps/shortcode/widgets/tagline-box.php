<?php
if (!class_exists('shortwell_tagline_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_tagline_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_tagline_widget', 	
				'label' => __( 'Tagline (well)', 'well_textdomain' ), 						
				'description' => __( 'Display tagline in good way', 'well_textdomain' ), 		
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
					'name' => __( 'Link', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'link', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				array( 									
					'name' => __( 'Align', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'align', 							
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
					'name' => __( 'Button Margin', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'buttonmargin', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '30px', 	
				),
				array( 									
					'name' => __( 'Border Highlight', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'highlight', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => 'left', 
					'fields' => array(
						array('name'=>'top', 'value'=>'top'),
						array('name'=>'left', 'value'=>'left'),
						array('name'=>'right', 'value'=>'right'),
						array('name'=>'bottom', 'value'=>'bottom'),
					), 	
				),	
				array( 									
					'name' => __( 'Shadow', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'shadow', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'', 'value'=>''),
						array('name'=>'yes', 'value'=>'yes'),
						array('name'=>'no', 'value'=>'no'),
					), 	
				),	
				array( 									
					'name' => __( 'Button Text', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'buttontext', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => 'Read More', 	
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
					'name' => __( 'Div Class', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'divclass', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				array( 									
					'name' => __( 'Button Size', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'buttonsize', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '3x', 
					'fields' => array(
						array('name'=>'1x', 'value'=>'1x'),
						array('name'=>'2x', 'value'=>'2x'),
						array('name'=>'3x', 'value'=>'3x'),
						array('name'=>'4x', 'value'=>'4x'),
						array('name'=>'5x', 'value'=>'5x'),
					), 	
				),
				array( 									
					'name' => __( 'Border', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'border', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '1px', 	
				),
				array( 									
					'name' => __( 'Shadow Opacity', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'shadowopacity', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '1', 	
				),
				array( 									
					'name' => __( 'Content', 'well_textdomain' ), 					
					'desc' => __( '', 'well_textdomain' ),
					'id' => 'content', 							
					'type'=>'textarea', 
					'rows'=>'4', 								
					'class' => 'widefat',					
					'std' => "",
					'tax' => '',
				),
			);
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){
			$out = '';
			$out .= do_shortcode('[ws_tagline_box title="'.$instance['title'].'" link="'.$instance['link'].'" align="'.$instance['align'].'" button_margin="'.$instance['buttonmargin'].'" border_highlight="'.$instance['highlight'].'" shadow="'.$instance['shadow'].'" button="'.$instance['buttontext'].'" target="'.$instance['target'].'" class="'.$instance['divclass'].'" button_size="'.$instance['buttonsize'].'" border="'.$instance['border'].'" shadow_opacity="'.$instance['shadowopacity'].'" ]'.$instance['content'].'[/ws_tagline_box]');
			echo $out;
		}
	}

	if (!function_exists('shortwell_tagline_register_widget')){
		function shortwell_tagline_register_widget(){
			register_widget( 'shortwell_tagline_widget' );
		}
		add_action( 'widgets_init', 'shortwell_tagline_register_widget', 1 );
	}
}