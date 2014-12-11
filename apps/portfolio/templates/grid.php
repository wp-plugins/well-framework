<?php
$isotope = new acoc_isotope_html(array('column'=>$column, 'margin'=>$column_margin));
$portfolio_query = new WP_Query( $query );
?>
<div class="portwell skin-1">
	<?php if( $portfolio_query->have_posts()): ?>
    	<?php if($filter == 'yes'){ $isotope->filter('portwell_cat'); } ?>
    	<?php $isotope->start(); ?>
        	<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
            	<?php $isotope->in_loop_start( $isotope->post_tax_class(get_the_ID(), 'portwell_cat')); ?>
                	<?php include(portwellwell_gallery_template_path('dri', 'content-portfolio.php')); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
        <?php if($pagination == 'yes'){ echo acoc_paginate($portfolio_query); } ?>
    <?php else: ?>
    	<?php _e('No Portfolio found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>