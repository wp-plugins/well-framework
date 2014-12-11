<?php
global $wefr_testimonial_template_path;
$isotope = new acoc_isotope_html(array('column'=>$column, 'margin'=>$column_margin));
$testimonial_query = new WP_Query( $query );
?>
<div class="tmwell skin-1">
	<?php if( $testimonial_query->have_posts()): ?>
    	<?php if($filter == 'yes'){ $isotope->filter('tmwell_cat'); } ?>
    	<?php $isotope->start(); ?>
        	<?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
            	<?php $isotope->in_loop_start( $isotope->post_tax_class(get_the_ID(), 'tmwell_cat')); ?>
                	<?php include(testimonialwell_gallery_template_path('dri', 'content-testimonial.php')); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
        <?php if($pagination == 'yes'){ echo acoc_paginate($testimonial_query); } ?>
    <?php else: ?>
    	<?php _e('No testimonial found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>