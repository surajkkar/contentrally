<a class="small-card-sec" href="<?php echo get_the_permalink($post->ID); ?>">
	<?php echo get_the_post_thumbnail($post->ID,'main-thumbnail',array('class' => 'card-image')); ?>
	<h6 class="small-c-titel">
		<?php get_limited_title_func($post->post_title, 40); ?>
	</h6>
</a>