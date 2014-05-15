<?php
class faqwell_shortcodes{
	function __construct(){
		add_shortcode('well_faq', array(&$this, 'content'));	
	}
	/* Archive Grid
	---------------------------------------*/
	function content( $atts, $content = null  ) {		
		extract( shortcode_atts( array(
			'ids'		=> '',
			'cat'		=> '',
			'filter'	=> 'no',
			'limit'		=> 9,
			'column'		=> '1',
			'column_margin'		=> '.000000001',
			'pagination'=> 'yes',
		), $atts ) );
	
		if($filter == 'yes'){ $filter = true; }else{ $filter = false; }
		if($pagination == 'yes'){ $pagination = true; }else{ $pagination = false; }
						
		$attr = array(		
			'column' => $column,
			'margin' => $column_margin,
			'filter' => $filter,
			'div_class' => 'faqwell skin-1',
			'file_url' => FAQWELL_DRI.'templates/archive-item.php',		
			'post_type' => 'faqwell',
			'post_ids' => $ids,
			'pagination' => $pagination,
			'taxonomy' => 'faqwell_cat',
			'taxonomy_terms' => $cat,
			'post_limit' => $limit,
		);
		ob_start();
		new wp_mixitup_grid($attr);
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
}
new faqwell_shortcodes;