<?php
global $wefr_gallery_template_path;
$isotope = new acoc_isotope_html(array('column'=>$column, 'margin'=>$column_margin));
$gallery_meta = get_post_meta($id,'gallerywell_items', true);
$gallery_items = $gallery_meta['gallery_items'];
?>
<div class="gallerywell skin-1">
	<?php if( is_array($gallery_items)): ?>
    	<?php $isotope->start(); ?>
        	<?php foreach($gallery_items as $item): ?>
            	<?php $isotope->in_loop_start(); ?>
                	<?php include(gallerywell_gallery_template_path('dri', 'content-single.php')); ?>
                <?php $isotope->in_loop_end(); ?>
            <?php endforeach; ?>
        <?php $isotope->end(); ?>
        <div style="clear:both;"></div>
    <?php else: ?>
    	<?php _e('No Images found.', 'well_textdomain'); ?>
    <?php endif; ?>
</div>