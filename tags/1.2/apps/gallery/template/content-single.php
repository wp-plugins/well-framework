<?php
$image_id = gallerywell_get_attachment_id_by_src($item['imgurl']);
$image_url = wp_get_attachment_image_src($image_id, 'gallerywell-single');
$title = (isset($item['title'])) ? $item['title'] : NULL;
?>
<div class="gallerywell-single">
	<a href="<?php echo $item['imgurl']; ?>" rel="prettyPhoto">
		<div class="gallerywell-single-image"><img src="<?php echo $image_url[0]; ?>" alt="<?php echo $title; ?>" /></div>
		<div class="gallerywell-single-overlly">
			<h3 class="gallerywell-single-heading"><?php echo $title; ?></h3>
		</div>
	</a>
</div>