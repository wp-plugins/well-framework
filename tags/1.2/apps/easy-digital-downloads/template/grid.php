<?php
global $wefr_edd_template_path;
$isotope = new acoc_isotope_html(array('column'=>$columns, 'margin'=>$margin));
$downloads = new WP_Query( $query );
?>
<div class="digita-edd-grid">
	<?php if( $downloads->have_posts()): ?>
    	<?php $isotope->start(); ?>
        	<?php while ( $downloads->have_posts() ) : $downloads->the_post(); ?>
            	<?php $isotope->in_loop_start(); ?>
                	<?php include($wefr_edd_template_path->dri().'content-product.php'); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
        <?php echo acoc_paginate($downloads); ?>
    <?php else: ?>
    	<?php _e('No product found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>