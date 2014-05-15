<?php
//print_r($item);
global $wefr_slideshow_template_path;
$top_padding = get_post_meta($additional_data['post_id'], 'wellslider_top_padding', true).'px';
$bottom_padding = get_post_meta($additional_data['post_id'], 'wellslider_bottom_padding', true).'px';
?>
<div class="well-slider-item <?php echo get_post_meta($additional_data['post_id'], 'wellslider_slider_layout', true); ?>" style="background-color:<?php echo $item['bgcolor']; ?>; padding-top:<?php echo $top_padding; ?>; padding-bottom:<?php echo $bottom_padding; ?>;">
	<div class="well-slider-item-inner">
    	<?php
		if(get_post_meta($additional_data['post_id'], 'wellslider_slider_layout', true) == 'media-content'){
			include($wefr_slideshow_template_path->dri().'media.php');
			include($wefr_slideshow_template_path->dri().'content.php');
		}elseif(get_post_meta($additional_data['post_id'], 'wellslider_slider_layout', true) == 'content-media'){
			include($wefr_slideshow_template_path->dri().'content.php');	
			include($wefr_slideshow_template_path->dri().'media.php');
		}elseif(get_post_meta($additional_data['post_id'], 'wellslider_slider_layout', true) == 'content-only'){
			include($wefr_slideshow_template_path->dri().'content.php');
		}elseif(get_post_meta($additional_data['post_id'], 'wellslider_slider_layout', true) == 'media-only'){
			include($wefr_slideshow_template_path->dri().'media.php');
		}
		?>
    </div>
</div>