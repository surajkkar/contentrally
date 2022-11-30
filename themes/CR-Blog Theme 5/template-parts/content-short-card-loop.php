<div class="col-md-3">
	<a href="<?php echo get_the_permalink($post->ID); ?>" class="small-card">
	<div class="image-jar">
		<?php echo get_the_post_thumbnail($post->ID,'thumbnail-home',array('class' => 'img-fit')); ?>
	</div>
	<div class="text-jar">
		<h2 class="jar-taitel">
		    <?php get_limited_title_func(strip_tags($post->post_title), 60); ?>
		</h2>
		<div class="jar-paragrph">
		<?php the_excerpt(); ?>
		</div>
	</div>
	</a>
</div>