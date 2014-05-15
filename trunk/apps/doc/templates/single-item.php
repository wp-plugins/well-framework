<div class="portwell-portfolio-single">
	<div class="portwell-portfolio-single-media"><?php echo get_the_post_thumbnail(get_the_ID(), 'portwell-img', array('alt'=> get_the_title())); ?></div>
    
    <div class="portwell-portfolio-single-content">
    	<h3><?php _e('Project Description', ''); ?></h3>
		<?php echo apply_filters('portwell_content', get_the_content()); ?>
    </div>
    
    <div class="portwell-portfolio-single-info">
    	<h3><?php _e('Project Details', ''); ?></h3>
    	<ul>
        	<li>
            	<strong><?php _e('Skills Needed', ''); ?></strong>: 
                <div class="project-portwell">
                    <?php echo get_post_meta(get_the_ID(), 'portwell_skills', true); ?>
                </div>
            </li>
            <li>
            	<strong><?php _e('Categories Needed', ''); ?></strong>: 
            	<div class="project-portwell">
            		
                </div>
            </li>
            <li>
           	 	<strong><?php _e('Project URL', ''); ?></strong>: 
                 <div class="project-portwell">
                 	<a href="<?php echo get_post_meta(get_the_ID(), 'portwell_link', true); ?>" target="_blank"><?php _e('View Project', ''); ?></a>
                 </div>
             </li>
            <li>
            	<strong><?php _e('Copyright', ''); ?></strong>: 
                <div class="project-portwell">
                	<a href="<?php echo get_post_meta(get_the_ID(), 'portwell_copyrightlink', true); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'portwell_copText', true); ?></a>
                </div>
            </li>
        </ul>
    </div>
    
</div>