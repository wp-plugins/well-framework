<?php $meta = get_post_meta(get_the_ID(), 'docwell_items', true); ?>
<br /><p><?php _e('Click on the <code>"Add New Doc Item"</code> Button to add new Doc.', 'docwell_textdomain'); ?></p><br />
<?php while($mb->have_fields_and_multi('doc_items')): ?>
	<?php $mb->the_group_open(); ?>
    	<div class="docwell_doc_metabox_item">            
            <?php $mb->the_field('title'); ?>
            <input type="text" class="text-filed" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" placeholder="<?php _e('Title', 'docwell_textdomain'); ?>"/>
            
            <?php $mb->the_field('post_id'); ?>
            <textarea name="<?php $mb->the_name(); ?>" style="width:100%;" rows="7"><?php $mb->the_value(); ?></textarea>
            <a href="#" class="dodelete">Remove</a>
        </div>
	<?php $mb->the_group_close(); ?>
<?php endwhile; ?>
<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-doc_items button button-primary"><?php _e('Add New Doc Item', 'docwell_textdomain'); ?></a></p>
<script type="text/javascript">
//<![CDATA[
	jQuery(function($){
		$('#wpa_loop-doc_items').sortable();
		//$(".docwell-metabox-select").select2();
	});
//]]>
</script>