<?php
if (!class_exists('shortwell_checklist_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_checklist_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_checklist_widget', 	
				'label' => __( 'Checklist (well)', 'well_textdomain' ), 						
				'description' => __( 'Display Checklist using ul tag', 'well_textdomain' ), 		
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
					'rows'=>'7', 								
					'class' => 'widefat',					
					'std' => "<ul>\n<li>Etiam suscipit lectus ac dui venenatis placerat.</li>\n<li>Pellentesque ac nulla ipsum. Nunc vitae elit felis.</li>\n<li>Duis facilisis dapibus tortor, ac sollicitudin ipsum venenatis in.</li>\n<li>Curabitur elit lacus, cursus at nunc sit amet, rutrum molestie odio.</li>\n</ul>",
					'tax' => '',
				),
				array( 									
					'name' => __( 'Icon', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'icon', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'arrow', 'value'=>'arrow'),
						array('name'=>'check', 'value'=>'check'),
						array('name'=>'star', 'value'=>'star'),
						array('name'=>'asterik', 'value'=>'asterik'),
						array('name'=>'cross', 'value'=>'cross'),
						array('name'=>'plus', 'value'=>'plus'),
					), 	
				),
				array( 									
					'name' => __( 'Icon Color', 'well_textdomain' ), 					
					'desc' => __( 'Example: #000000', 'well_textdomain' ), 
					'id' => 'iconcolor', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => 'initial', 	
				),
				array( 									
					'name' => __( 'Icon Background Color', 'well_textdomain' ), 					
					'desc' => __( 'Example: #000000', 'well_textdomain' ), 
					'id' => 'iconbg', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '', 	
				),
				array( 									
					'name' => __( 'Icon Size', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'iconsize', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => '9px', 	
				),
				array( 									
					'name' => __( 'Circle', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'circle', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'yes', 'value'=>'yes'),
						array('name'=>'no', 'value'=>'no'),
					), 	
				),
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[shortwell_checklist icon="'.$instance['icon'].'" iconcolor="'.$instance['iconcolor'].'" iconbg="'.$instance['iconbg'].'" iconsize="'.$instance['iconsize'].'" circle="'.$instance['circle'].'"]'.$instance['content'].'[/shortwell_checklist]');
			echo $out;
		}
		
	
	}

	if (!function_exists('shortwell_checklist_register_widget')){
		function shortwell_checklist_register_widget(){
			register_widget( 'shortwell_checklist_widget' );
		}
		add_action( 'widgets_init', 'shortwell_checklist_register_widget', 1 );
	}
}