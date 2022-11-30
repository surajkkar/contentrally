<li class="asid-li">
    <a class="asid-link" href="<?php echo get_the_permalink($post->ID); ?>">
        <span class="left-span">
            <?php echo get_the_post_thumbnail($post->ID, 'sidebar-post-thumbnail'); ?>
        </span>
        <span class="right-sapn"><?php get_limited_title_func(strip_tags($post->post_title), 60); ?></span>
    </a>
</li>