<div class="logowell-item">
	<a href="<?php echo get_post_meta(get_the_ID(), 'logowell_link', true); ?>">
		<div class="logowell-item-image"><img src="<?php echo LOGOWELL_URL; ?>assets/images/bg.png" /></div>
		<div class="logowell-item-overlly">
        	<div class="logowell-item-overlly-content">
               <?php echo get_the_post_thumbnail(get_the_ID(), 'logowell-img', array('alt'=> get_the_title())); ?>
            </div>
		</div>
	</a>
</div>