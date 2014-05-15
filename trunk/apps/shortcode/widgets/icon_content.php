<?php
if (!class_exists('shortwell_icon_content_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class shortwell_icon_content_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'shortwell_icon_content_widget', 	
				'label' => __( 'Icon Content (well)', 'well_textdomain' ), 						
				'description' => __( 'Contents with Icons', 'well_textdomain' ), 		
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
					'name' => __( 'Icon', 'well_textdomain' ), 					
					'desc' => 'Slect the icon or copy and past the icon from <a href="http://fontawesome.io/cheatsheet/" target="_blank">Font Awesome</a> (EXAN : "fa-adjust" )', 
					'id' => 'icon', 							
					'type'=>'text', 								
					'class' => 'widefat', 					
					'std' => 'fa-heart', 
				),						
				array( 									
					'name' => __( 'Style', 'well_textdomain' ), 					
					'desc' => '', 
					'id' => 'style', 							
					'type'=>'select', 								
					'class' => 'widefat', 					
					'std' => '', 
					'fields' => array(
						array('name'=>'', 'value'=>''),
						array('name'=>'icon-style-1', 'value'=>'icon-style-1'),
						array('name'=>'icon-style-2', 'value'=>'icon-style-2'),
						array('name'=>'icon-style-3', 'value'=>'icon-style-3'),
						array('name'=>'icon-style-4', 'value'=>'icon-style-4'),
					)
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
				array( 									
					'name' => __( 'Link', 'well_textdomain' ), 					
					'desc' => __( 'include the full url including http://', 'well_textdomain' ), 
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
					)
				),
			);
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = '';
			$out .= do_shortcode('[ws_icon_content icon="'.$instance['icon'].'" title="'.$instance['title'].'" style="'.$instance['style'].'" link="'.$instance['link'].'" target="'.$instance['target'].'" ]'.$instance['content'].'[/ws_icon_content]');
			echo $out;
		}
	
	}
	if (!function_exists('shortwell_icon_content_register_widget')){
		function shortwell_icon_content_register_widget(){
			register_widget( 'shortwell_icon_content_widget' );
		}
		add_action( 'widgets_init', 'shortwell_icon_content_register_widget', 1 );
	}
}