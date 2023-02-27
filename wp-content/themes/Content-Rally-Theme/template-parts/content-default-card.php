<?php $post_ID = get_the_ID();
$title = the_title_attribute('echo=0'); 
$cat = get_the_category(); ?>

<div class="main-card group">
    <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
        <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
            <?php if ( has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail( $post_ID, 'default-thumbnail', array( 'class' => 'main-card-img' ) ); ?>
            <?php else : ?>
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img9.jpg" alt="slider-img" />
            <?php endif; ?>
        </a>
        <div class="card-overlay">
            <a href="<?php echo esc_url( get_category_link( $cat[0]->term_id ) ); ?>" class="card-cat" title="<?php echo $cat[0]->cat_name; ?>">
                <?php echo $cat[0]->cat_name; ?>
            </a>
        </div>
    </figure>
    <div class="card-detail">
        <h1 class="main-card-title">
            <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
                <?php echo $title; ?>
            </a>
        </h1>
        <p class="main-card-desc"><?php echo strip_tags(get_the_content()); ?></p>
        <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>" class="flex items-center gap-2 group">
            <span class="read-btn">READ MORE<span class="screen-reader-text">Details</span></span>
            <svg class="svg-hov" width="27" height="12" viewBox="0 0 27 12" fill="#101010" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5303 6.53033C26.8232 6.23744 26.8232 5.76256 26.5303 5.46967L21.7574 0.696699C21.4645 0.403806 20.9896 0.403806 20.6967 0.696699C20.4038 0.989593 20.4038 1.46447 20.6967 1.75736L24.9393 6L20.6967 10.2426C20.4038 10.5355 20.4038 11.0104 20.6967 11.3033C20.9896 11.5962 21.4645 11.5962 21.7574 11.3033L26.5303 6.53033ZM0 6.75H26V5.25H0V6.75Z" />
            </svg>
        </a>
    </div>
</div>