<?php
if (!class_exists('faqwell_slideshow_widget') && class_exists( 'WPH_Widget_Mod' )) {
	class faqwell_slideshow_widget extends WPH_Widget_Mod{
		function __construct(){
			$args = array( 
				'slug' => 'faqwell_slideshow_widget', 	
				'label' => __( 'Portfolio Slideshow (well)', 'well_textdomain' ), 						
				'description' => __( 'Show portfolio item on slideshow style', 'well_textdomain' ), 		
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
					'tax' => 'faqwell_cat',
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
			);
			
			
			$this->create_widget( $args );
		}
		
		function widget( $args, $instance ){	
			$out  = $args['before_title'];
			$out .= $instance['title'];
			$out .= $args['after_title'];
			$out .= do_shortcode('[well_portfolio_slideshow ids="'.$instance['ids'].'" cat="'.$instance['cat'].'" limit="'.$instance['limit'].'" /]');
			echo $out;
		}
		
	
	}

	if (!function_exists('faqwell_slideshow_register_widget')){
		function faqwell_slideshow_register_widget(){
			register_widget( 'faqwell_slideshow_widget' );
		}
		add_action( 'widgets_init', 'faqwell_slideshow_register_widget', 1 );
	}
}