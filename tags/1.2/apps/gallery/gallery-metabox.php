<?php
$gallery_mb = new WPAlchemy_MetaBox_Mod(array(
	'id' => 'gallerywell_items',
	'title' => __('Gallery Items', 'well_textdomain'),
	'template' => GALLERYWELL_DRI . 'metaboxes/gallery.php',
	'types' => array('gallerywell')
));