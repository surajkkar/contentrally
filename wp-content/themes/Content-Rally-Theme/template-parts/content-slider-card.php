<?php $post_ID = get_the_ID();
$title = the_title_attribute('echo=0'); 
$cat = get_the_category(); ?>

<div class="swiper-slide">
    <figure class="relative h-[24rem] md:h-[32rem] lg:h-[36rem]">
        <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
            <?php if ( has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail( $post_ID, 'slider-thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
            <?php else : ?>
                <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/slider-img1.jpg" alt="slider-img" />
            <?php endif; ?>
        </a>
        <div class="slider-overlay">
            <a href="<?php echo esc_url( get_category_link( $cat[0]->term_id ) ); ?>" class="card-cat" title="<?php echo $cat[0]->cat_name; ?>">
                <?php echo $cat[0]->cat_name; ?>
            </a>
            <h1 class="slider-title">
                <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
                    <?php echo $title; ?>
                </a>
            </h1>
        </div>
    </figure>
</div>