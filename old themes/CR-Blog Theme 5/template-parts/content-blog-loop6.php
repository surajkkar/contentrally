<div class="col-sm-4">
    <div class="medium-card-sec">
        <a href="<?php echo get_the_permalink($post->ID); ?>">
            <h6 class="medium-c-titel"><?php get_limited_title_func(strip_tags($post->post_title), 60); ?></h6>
            <?php echo get_the_post_thumbnail($post->ID, 'second-thumbnail', array('class' => 'medium-card-img')); ?>
        </a>
    </div>
</div>