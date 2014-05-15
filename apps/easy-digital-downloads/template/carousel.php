<?php
global $wefr_edd_template_path;
$flexslider2 = new acoc_flexslider2_html(array('itemMargin'=>$item_margin, 'minItems'=>$min_items, 'maxItems'=>$max_items, 'itemWidth'=>$item_width));
$downloads = new WP_Query( $query );
?>
<div class="acoc-flexslider2-skin">
	<?php if( $downloads->have_posts()): ?>
    	<?php $flexslider2->start(); ?>
        	<?php while ( $downloads->have_posts() ) : $downloads->the_post(); ?>
            	<?php $flexslider2->in_loop_start(); ?>
                	<?php include($wefr_edd_template_path->dri().'content-product.php'); ?>
                <?php $flexslider2->in_loop_end(); ?>
            <?php endwhile; ?>
        <?php $flexslider2->end(); ?>
        <div style="clear:both;"></div>
        <?php wp_reset_postdata(); ?>
    <?php else: ?>
    	<?php _e('No product found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>