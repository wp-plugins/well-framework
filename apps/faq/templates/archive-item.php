<div class="faqwell-faq">
	<div class="faqwell-faq-title">
		<i class="fa fa-question-circle faq-icon"></i> <?php the_title(); ?> <span><i class="fa fa-plus iconShow"></i><i class="fa fa-minus iconhide"></i></span>
	</div>
	<div class="faqwell-faq-details">
		<?php echo apply_filters('faqwell_content', get_the_content()); ?>
		<div class="faqwell-clear"></div>
	</div>
</div>