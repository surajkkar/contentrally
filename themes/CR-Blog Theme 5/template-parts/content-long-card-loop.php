<div class="col-md-6">
	<div class="c-card">
		<a href="<?php echo get_the_permalink($post->ID); ?>">
			<?php echo get_the_post_thumbnail($post->ID,'thumbnail-home',array('class' => 'img-fit')); ?>
			<div class="card-text">
			<div class="card-overlay">
				<h4 class="overlay-header"><?php echo strip_tags($post->post_title); ?></h4>
			</div>
			</div>
		</a>
	</div>
</div>