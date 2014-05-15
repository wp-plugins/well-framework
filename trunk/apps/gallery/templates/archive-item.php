<div class="gallerywell-archive">
	<a href="<?php the_permalink(); ?>">
		<div class="gallerywell-archive-image"><?php echo get_the_post_thumbnail(get_the_ID(), 'gallerywell-single', array('alt'=> get_the_title())); ?></div>
		<div class="gallerywell-archive-overlly">
        	<div class="gallerywell-archive-overlly-content">
                <span class="gallerywell-archive-icon"><i class="fa fa-plus-circle"></i></span>
                <h3 class="gallerywell-archive-heading"><?php the_title(); ?></h3>
                <p><?php echo gallerywell_post_taxonomys_name(get_the_ID(), 'gallerywell_cat'); ?></p>
            </div>
		</div>
	</a>
</div>