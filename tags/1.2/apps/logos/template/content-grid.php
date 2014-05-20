<div class="logowell-logo-item">
	<a href="<?php echo get_post_meta(get_the_ID(), 'logowell_link', true); ?>" target="_blank">
	<div class="logowell-logo-item-inner"><?php echo get_the_post_thumbnail(get_the_ID(), 'logowell-img', array('alt'=> get_the_title())); ?></div> 
    <img class="logowell-logo-bg-img" src="<?php echo LOGOWELL_URL; ?>assets/images/bg.png" />
    </a>
</div>