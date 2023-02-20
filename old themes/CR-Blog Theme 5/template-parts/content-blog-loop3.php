<div class="col-md-6">
    <div class="new-card">
        <?php echo get_the_post_thumbnail($post->ID, 'first-thumbnail', array('class' => 'new-img')); ?>
        <a class="new-card-link" href="<?php echo get_the_permalink($post->ID); ?>">
            <?php get_limited_title_func(strip_tags($post->post_title), 75); ?>
        </a>
    </div>
</div>