<?php global $wpalchemy_mod_media_access; ?>
<br /><p><?php _e('Here you will add the images of this gallery. Click on the <code>"Add New Gallery Item"</code> Button to add new image.', 'well_textdomain'); ?></p><br />
<?php while($mb->have_fields_and_multi('gallery_items')): ?>
	<?php $mb->the_group_open(); ?>
    	<div class="gallerywell_gallery_metabox_item">
			
            <?php $mb->the_field('imgurl'); ?>
            <?php $wpalchemy_mod_media_access->setGroupName('gallery_items')->setInsertButtonLabel('Insert Image'); ?>
			<div class="img_holder">
				<?php echo $wpalchemy_mod_media_access->getField_image(array('src' => $mb->get_the_value(),'height' => 'auto','width' => '100', 'class' => 'gallerywell_img')); ?>
            </div>
            <?php echo $wpalchemy_mod_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
            <?php echo $wpalchemy_mod_media_access->getButton(array('label'=>'Insert Image', 'class' => 'button-primary')); ?> <div class="mclear"></div>
            
            <?php $mb->the_field('title'); ?>
            <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" placeholder="<?php _e('Title', 'well_textdomain'); ?>"/>
            
            <a href="#" class="dodelete">Remove</a>
            
        </div>
	<?php $mb->the_group_close(); ?>
<?php endwhile; ?>
<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-gallery_items button button-primary"><?php _e('Add New Gallery Item', 'well_textdomain'); ?></a></p>
<script type="text/javascript">
//<![CDATA[
	jQuery(function($){
		$('#wpa_loop-gallery_items').sortable();
	});
//]]>
</script>