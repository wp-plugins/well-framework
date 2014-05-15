<?php
global $post;
$image = wp_get_attachment_image_src($item->ID, 'blog_gallery_image');
$imagefull = wp_get_attachment_image_src($item->ID, 'full');
	
echo '<a href="'.$imagefull[0].'" rel="prettyPhoto[g_'.$post->ID.']"><img src="' . $image[0] . '" alt="" /></a>';	