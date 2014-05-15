<div itemscope itemtype="http://schema.org/Product" class="well-edd-item">
	<div class="well_edd_image">
		<a title="<?php _e('Show Details', 'well_textdomain'); ?>" itemprop="url" href="<?php the_permalink(); ?>">
			<img src="<?php echo acoc_post_thumbnail(array('w'=>'400', 'h'=>'400', 'src'=>NULL, 'placeholder'=>'http://placehold.it/400/400/')); ?>" alt="<?php the_title(); ?>" />
        </a>
	</div>
    <div class="well_edd_title_holder">
        <h3 itemprop="name" class="well_edd_title">
            <a title="<?php the_title_attribute(); ?>" itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div itemprop="price" class="well_edd_price">
            <?php if(edd_has_variable_prices( get_the_ID() )){ echo edd_price_range( get_the_ID() ); }else{ edd_price( get_the_ID() ); } ?>	
        </div>
    </div>
    <div class="well_edd_button_holder">
        <div class="well_edd_button">
            <?php if(edd_has_variable_prices(get_the_ID())): ?>
                <a title="<?php _e('Select options', 'well_textdomain'); ?>" href="<?php the_permalink(); ?>">
                	<i class="fa fa-shopping-cart"></i>
					<?php _e('Select options', 'well_textdomain'); ?>
                </a>
			<?php else: ?>
				<?php echo edd_get_purchase_link(array('download_id'=>get_the_ID(), 'price'=>0, 'direct'=>0, 'text'=>__('Add to Cart', 'well_textdomain'), 'style'=>'plain')); ?> 
			<?php endif; ?>
        </div>
        <div class="well_edd_button">
            <a title="<?php _e('Show Details', 'well_textdomain'); ?>" itemprop="url" href="<?php the_permalink(); ?>">
            	<i class="fa fa-list-ul"></i>
				<?php _e('Show Details', 'well_textdomain'); ?>
            </a>
        </div>
    </div>
</div>