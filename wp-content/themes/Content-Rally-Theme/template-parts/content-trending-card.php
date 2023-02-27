<?php $post_ID = get_the_ID();
$title = the_title_attribute('echo=0'); 
$cat = get_the_category(); ?>

<figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
    <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
        <?php if ( has_post_thumbnail()) : ?>
            <?php echo get_the_post_thumbnail( $post_ID, 'trending-thumbnail', array( 'class' => 'main-card-img' ) ); ?>
        <?php else : ?>
            <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img4.jpg" alt="slider-img" />
        <?php endif; ?>
    </a>
    <div class="card-overlay">
        <a href="<?php echo esc_url( get_category_link( $cat[0]->term_id ) ); ?>" class="card-cat" title="<?php echo $cat[0]->cat_name; ?>">
            <?php echo $cat[0]->cat_name; ?>
        </a>
        <h1 class="s-card-title">
            <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
                <?php echo $title; ?>
            </a>
        </h1>
    </div>
</figure>