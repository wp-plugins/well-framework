<div class="the_content">
	<?php if($item['title'] != ''): ?><h2><?php echo $item['title']; ?></h2><?php endif; ?>
	<?php echo $item['text']; ?>
	<?php if($item['buttonlink'] != ''): ?><br /><br /><a href="#" class="shortwell-button2   size-4x color-orange  " target="_blank"><?php echo $item['buttontext']; ?></a><?php endif; ?>
</div>