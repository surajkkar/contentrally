
	<section class="new-cardc" style="margin-buttom: 10px;">
	    <?php echo get_the_post_thumbnail($post->ID, 'large', array('class' => 'new-img1')); ?>
	    <a class="new-card-link1" href="<?php echo get_the_permalink($post->ID); ?>">
	        <?php echo $post->post_title; ?>
	    </a>
	</section>
