<div class="peowell-people-single">
	<div class="peowell-people-single-media"><?php echo get_the_post_thumbnail(get_the_ID(), 'peowell-img2', array('alt'=> get_the_title())); ?></div>
    
    <div class="peowell-people-single-contactInfo">
    	<h3><?php _e('Contact With', 'well_textdomain'); ?> <?php echo get_the_title(); ?></h3>
        
        <div class="peowell-people-single-info">
        	<ul>
            	<li>
                    <strong><?php _e('Email', 'well_textdomain'); ?></strong>: 
                    <div class="people-peowell">
                        <?php echo get_post_meta(get_the_ID(), 'peowell_email', true); ?>
                    </div>
                </li>
                <li>
                    <strong><?php _e('Location', 'well_textdomain'); ?></strong>: 
                    <div class="people-peowell">
                        <?php echo get_post_meta(get_the_ID(), 'peowell_location', true); ?>
                    </div>
                </li>
                
                <li>
                    <strong><?php _e('Phone', 'well_textdomain'); ?></strong>: 
                    <div class="people-peowell">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'peowell_phone', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'peowell_phone', true); ?></a>
                    </div>
                </li>
                <li>
                    <strong><?php _e('Personal Website', 'well_textdomain'); ?></strong>: 
                     <div class="people-peowell">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'peowell_site_link', true); ?>" target="_blank"><?php _e('View Website', ''); ?></a>
                     </div>
                 </li>
            	<li>
                	<div class="peowell-people-details">
        <?php
			$meta1 = get_post_meta(get_the_ID(),'peowell_linkedin', true);
			$meta2 = get_post_meta(get_the_ID(),'peowell_facebook', true);
			$meta3 = get_post_meta(get_the_ID(),'peowell_twitter', true);
			$meta4 = get_post_meta(get_the_ID(),'peowell_plus', true);
			$meta5 = get_post_meta(get_the_ID(),'peowell_vimeo', true);
			$meta6 = get_post_meta(get_the_ID(),'peowell_youtube', true);
			
			
			if(isset($meta1) && $meta1){ 
				echo '<a class="peowell-people-soicalIcon"  href="'.$meta1.'" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>'; }
				
			if(isset($meta2) && $meta2){ 
				echo '<a class="peowell-people-soicalIcon"  href="'.$meta2.'" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>'; }
				
			if(isset($meta3) && $meta3){ 
				echo '<a class="peowell-people-soicalIcon" href="'.$meta3.'" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a>'; }
				
			if(isset($meta4) && $meta4){ 
				echo '<a class="peowell-people-soicalIcon"  href="'.$meta4.'" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a>'; }
				
			if(isset($meta5) && $meta5){ 
				echo '<a class="peowell-people-soicalIcon"  href="'.$meta5.'" target="_blank" title="vimeo"><i class="fa fa-vimeo-square"></i></a>'; }
				
			if(isset($meta6) && $meta6){ 
				echo '<a class="peowell-people-soicalIcon"  href="'.$meta6.'" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a>'; }
		?>
        			</div>
        	</li>
        	</ul>
        </div>
    </div>
	<div class="clear" style="height:1px; width:100%; clear:both;"></div>
    <div class="peowell-people-single-content">
    	<h3><?php _e('About', 'well_textdomain'); ?> <?php echo get_the_title(); ?><span class="peowell-people-author-postion"><?php echo get_post_meta(get_the_ID(), 'peowell_job_title', true); ?></span></h3>
		<?php echo apply_filters('peowell_content', get_the_content()); ?>
    </div>
</div>