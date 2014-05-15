<div class="tmwell-testimonial">
	<div class="tmwell-testimonial-content"><?php echo get_the_content(); ?></div>
	<div class="tmwell-testimonial-info">
		<?php echo get_the_post_thumbnail(get_the_ID(), 'tmwell-img', array('alt'=> get_the_title())); ?>
		<span class="tmwell-testimonial-author"><?php the_title(); ?></span><br />
		<span class="tmwell-testimonial-pogition"><?php echo get_post_meta(get_the_ID(), 'tmwell_position', true); ?></span>
	</div>
</div>