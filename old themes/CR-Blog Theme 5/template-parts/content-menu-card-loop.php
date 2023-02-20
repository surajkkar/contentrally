<?php $postid = $post->ID; ?>
<a class="small-card-sec" href="<?php echo get_the_permalink($postid); ?>">
	<?php echo get_the_post_thumbnail( $postid , 'main-thumbnail' ,array( 'class' => 'card-image' )); ?>
	<h6 class="small-c-titel">
		<?php get_limited_title_func(strip_tags($post->post_title), 40); ?>
	</h6>
</a>