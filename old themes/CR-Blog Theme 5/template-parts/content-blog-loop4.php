<div class="card-big-img-contener">
    <a class="card-big-img-link" href="<?php echo get_the_permalink($post->ID); ?>">
        <?php echo get_the_post_thumbnail($post->ID, 'medium-thumbnail', array('class' => 'card-big-img-contener-img')); ?>

        <div class="card-big-taitel">
            <h6 class="card-big-taitel-text"><?php echo strip_tags($post->post_title); ?></h6>
        </div>
    </a>
</div>