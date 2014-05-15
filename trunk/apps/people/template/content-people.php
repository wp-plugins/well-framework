<div class="peowell-people">
	<div class="peowell-people-image">
		<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'peowell-img', array('alt'=> get_the_title())); ?></a>
	</div>
	<div class="peowell-people-details">
		<h4 class="peowell-people-author-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<span class="peowell-people-author-postion"><?php echo get_post_meta(get_the_ID(), 'peowell_job_title', true); ?></span>
		<div class="peowell-clear"></div>
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
</div>