<div class="post-item">
	<div class="post-item-image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'postitam-img', array('alt'=> get_the_title())); ?></a></div>
	<div class="post-item-details">
    	<span class="post-date"><?php the_date(); ?></span>
		<h4 class="post-item-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="post-item-content"><?php the_excerpt(); ?></div>
	</div>
</div>