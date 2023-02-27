<div class="side-bar flex flex-col gap-y-4 md:gap-y-8">

    <?php $popular_posts = new WP_Query( array('post_type' => 'post',
                                            'post_status' => 'publish',
                                            'post__not_in' => array($post->ID),
                                            'meta_key' => 'post_views_count',
                                            'orderby' => 'meta_value_num',
                                            'posts_per_page' => 4,
                                            'order'   => 'DESC' ));
    if ( $popular_posts->have_posts() ) : ?>
        <div style="margin-top: 0!important;" class="add-post c-border">
            <h1 class="sidebar-title">Popular Posts</h1>
            <div class="w-full flex flex-col gap-5">
                <?php while ( $popular_posts->have_posts() ) : $popular_posts->the_post();
                    get_template_part('template-parts/content', 'search-card');
                endwhile; ?>
            </div>
        </div>
    <?php endif;

    $facebook = get_option('facebook');
    $twitter = get_option('twitter');
    $linkedin = get_option('linkedin');
    if ($facebook || $twitter || $linkedin) : ?>
        <div style="margin-top: 0!important;" class="add-post">
            <h1 class="sidebar-title">Follow Us</h1>
            <div class="icons-sec flex gap-4">
                <?php if ($facebook) : ?>
                    <a class="inner-icon group" href="<?php echo $facebook; ?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="social_link">
                        <svg class="group-hover:fill-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z" />
                        </svg>
                    </a>
                <?php endif;
                if ($twitter) : ?>
                    <a class="inner-icon group group" href="<?php echo $twitter; ?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="social_link">
                        <svg class="group-hover:fill-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000" width="24" height="24">
                            <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
                        </svg>
                    </a>
                <?php endif;
                if ($linkedin) : ?>
                    <a class="inner-icon group" href="<?php echo $linkedin; ?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="social_link">
                        <svg class="group-hover:fill-[#FFFFFF]" width="16" height="16" viewBox="0 0 16 16" fill="#101010" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 16H12.8V10.4008C12.8 8.86478 12.1224 8.00781 10.9072 8.00781C9.5848 8.00781 8.8 8.90078 8.8 10.4008V16H5.6V5.6H8.8V6.76953C8.8 6.76953 9.80399 5.00781 12.0664 5.00781C14.3296 5.00781 16 6.38888 16 9.24648V16ZM1.9536 3.93672C0.874401 3.93672 0 3.05517 0 1.96797C0 0.881569 0.874401 0 1.9536 0C3.032 0 3.9064 0.881569 3.9064 1.96797C3.9072 3.05517 3.032 3.93672 1.9536 3.93672ZM0 16H4V5.6H0V16Z" fill="" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif;

    $recent_posts = new WP_Query( array('post_type' => 'post',
                                            'post_status' => 'publish',
                                            'post__not_in' => array($post->ID),
                                            'posts_per_page' => 4,
                                            'orderby' => 'date',
                                            'order'   => 'DESC' ));
    if ( $recent_posts->have_posts() ) : ?>
        <div style="margin-top: 0!important;" class="add-post">
            <h1 class="sidebar-title">Recent Posts</h1>
            <div class="w-full flex flex-col gap-5">
                <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                    get_template_part('template-parts/content', 'search-card');
                endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
    
</div>