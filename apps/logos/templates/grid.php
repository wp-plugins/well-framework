<?php
global $wefr_logos_template_path;
$isotope = new acoc_isotope_html(array('column'=>$column, 'margin'=>$column_margin));
wp_reset_query();
$logo_query = new WP_Query( $query );
?>
<div class="logowell skin-1">
	<?php if( $logo_query->have_posts()): ?>
    	<?php if($filter == 'yes'){ $isotope->filter('logowell_cat'); } ?>
    	<?php $isotope->start(); ?>
        	<?php while ( $logo_query->have_posts() ) : $logo_query->the_post(); ?>
            	<?php $isotope->in_loop_start( $isotope->post_tax_class(get_the_ID(), 'logowell_cat')); ?>
                	<?php include(logowell_gallery_template_path('dri', 'content-grid.php')); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
        <?php if($pagination == 'yes'){ echo acoc_paginate($logo_query); } ?>
    <?php else: ?>
    	<?php _e('No Logo found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>