<section class="blog-picture">
	<a class="link-img-contiainer" href="<?php echo get_the_permalink($post->ID); ?>">
		<div class="left-img-container">
			<?php echo get_the_post_thumbnail($post->ID,'sidebar-post-thumbnail',array('class' => 'img')); ?>
		</div>
	</a>
	<a class="link-right-text" href="<?php echo get_the_permalink($post->ID); ?>">
		<div class="right-text-container">
			<p><?php get_limited_title_func($post->post_title, 120); ?></p>
		</div>
	</a>
</section>