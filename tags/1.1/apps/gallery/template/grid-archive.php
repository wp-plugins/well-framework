<?php
global $wefr_portfolio_template_path;
$isotope = new acoc_isotope_html(array('column'=>$column, 'margin'=>$column_margin));
wp_reset_query();
$gallery_query = new WP_Query( $query );
?>
<div class="gallerywell skin-1">
	<?php if( $gallery_query->have_posts()): ?>
    	<?php if($filter == 'yes'){ $isotope->filter('gallerywell_cat'); } ?>
    	<?php $isotope->start(); ?>
        	<?php while ( $gallery_query->have_posts() ) : $gallery_query->the_post(); ?>
            	<?php $isotope->in_loop_start( $isotope->post_tax_class(get_the_ID(), 'gallerywell_cat')); ?>
                	<?php include($wefr_gallery_template_path->dri().'content-archive.php'); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
        <?php if($pagination == 'yes'){ echo acoc_paginate($gallery_query); } ?>
    <?php else: ?>
    	<?php _e('No Gallery found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>