<?php
global $wefr_people_template_path;
$isotope = new acoc_isotope_html(array('column'=>$column, 'margin'=>$column_margin));
$people_query = new WP_Query( $query );
?>
<div class="peowell skin-1">
	<?php if( $people_query->have_posts()): ?>
    	<?php if($filter == 'yes'){ $isotope->filter('peowell_cat'); } ?>
    	<?php $isotope->start(); ?>
        	<?php while ( $people_query->have_posts() ) : $people_query->the_post(); ?>
            	<?php $isotope->in_loop_start( $isotope->post_tax_class(get_the_ID(), 'peowell_cat')); ?>
                	<?php include(peoplewell_gallery_template_path('dri', 'content-people.php')); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
        <?php if($pagination == 'yes'){ echo acoc_paginate($people_query); } ?>
    <?php else: ?>
    	<?php _e('No People found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>