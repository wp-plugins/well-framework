<div class="portwell-portfolio-item">
	<a href="<?php the_permalink(); ?>">
		<div class="portwell-portfolio-item-image"><?php echo get_the_post_thumbnail(get_the_ID(), 'portwell-img', array('alt'=> get_the_title())); ?></div>
		<div class="portwell-portfolio-item-details">
			<h3 class="portwell-portfolio-item-heading"><?php the_title(); ?></h3>
			<span class="portwell-portfolio-item-subheading"><?php echo portwell_post_taxonomys_name(get_the_ID(), 'portwell_cat'); ?></span>
			<i class="fa fa-caret-up iconcolor"></i>
		</div>
	</a>
</div>