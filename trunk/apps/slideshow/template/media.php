<div class="media_left">
	<?php if($item['video'] != ''): ?>
    	<?php echo $item['video']; ?>
    <?php else: ?>
		<?php if($item['image'] != ''): 
			$w = get_post_meta($additional_data['post_id'], 'wellslider_image_w', true);
			$h = get_post_meta($additional_data['post_id'], 'wellslider_image_h', true);
		?>
        	<img src="<?php echo acoc_image_size($item['image'], $w, $h ); ?>" alt="<?php echo $item['title']; ?>" title="<?php echo $item['title']; ?>" />
		<?php endif; ?>
    <?php endif; ?>
</div>