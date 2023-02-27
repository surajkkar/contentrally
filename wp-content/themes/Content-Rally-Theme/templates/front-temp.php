<?php /* Template Name: Front Page Template */ ?>

<?php get_header(); 

$cat_slug_1 = 'business';
$cat_slug_2 = 'entertainment';
$cat_slug_3 = 'lifestyle';

?>

<!-- Slider and scrollbar -->
<section class="slider-sec">
    <div class="container mx-auto">
        <div class="hero-sec">
            <div class="swiper mySwiper order-1 lg:order-2 w-full lg:w-1/2 relative">
                <?php $slider_posts = new WP_Query(array('post_type' => 'post',
                                                        'post_status' => 'publish',
                                                        'orderby' => 'date',
                                                        'order'   => 'DESC',
                                                        'posts_per_page' => 3 )); ?>
                <?php if ($slider_posts->have_posts()) : ?>
                    <div class="swiper-wrapper">
                        <?php while ($slider_posts->have_posts()) : $slider_posts->the_post();
                            get_template_part('template-parts/content', 'slider-card');
                        endwhile; ?>
                        <!-- <div class="swiper-slide">
                            <figure class="relative h-[24rem] md:h-[32rem] lg:h-[36rem]">
                                <img class="w-full h-full object-cover" src="<?php //echo get_template_directory_uri(); ?>/images/slider-img1.jpg" alt="slider-img" />
                                <div class="slider-overlay">
                                    <button class="card-cat">HEALTH & FITNESS</button>
                                    <h1 class="slider-title">Most Popular Gaming Zones In Hyderabad That Attract Most People</h1>
                                </div>
                            </figure>
                        </div> -->
                    </div>
                    
                    <div class="arrow">
                        <div class="right">
                            <svg width="14" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.828 6.99999L7.778 11.95L6.364 13.364L0 6.99999L6.364 0.635986L7.778 2.04999L2.828 6.99999Z" fill="black" />
                            </svg>
                        </div>
                        <div class="left">
                            <svg width="14" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.17266 6.99974L0.222656 2.04974L1.63666 0.635742L8.00066 6.99974L1.63666 13.3637L0.222656 11.9497L5.17266 6.99974Z" fill="black" />
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php $latest_posts = new WP_Query(array('post_type' => 'post',
                                                'post_status' => 'publish',
                                                'offset'  => 3,
                                                'orderby' => 'date',
                                                'order'   => 'DESC',
                                                'posts_per_page' => 7 ));
            $popular_posts = new WP_Query(array('post_type' => 'post',
                                                'post_status' => 'publish',
                                                'meta_key' => 'post_views_count',
                                                'orderby' => 'meta_value_num',
                                                'order'   => 'DESC',
                                                'posts_per_page' => 7 )); ?>

            <div class="content-card-sec order-2 hidden lg:flex flex-col lg:order-1 md:w-1/2 lg:w-1/4">
                <?php if ($latest_posts->have_posts()) : ?>
                    <h1 class="left-card-title">Latest Post</h1>
                    <div class="left-content style-4">
                        <?php while ($latest_posts->have_posts()) : $latest_posts->the_post();
                            get_template_part('template-parts/content', 'latest-card');
                        endwhile; ?>
                        <!-- <div class="left-content-card">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div> -->
                    </div>
                <?php endif; ?>
            </div>
            <div class="content-card-sec order-2 hidden lg:flex flex-col lg:order-3 md:w-1/2 lg:w-1/4">
                <?php if ($popular_posts->have_posts()) : ?>
                    <h1 class="left-card-title">Popular Post</h1>
                    <div class="right-content style-4">
                        <?php while ($popular_posts->have_posts()) : $popular_posts->the_post();
                            get_template_part('template-parts/content', 'search-card');
                        endwhile; ?>
                        <!-- <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php //echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div> -->
                        
                    </div>
                <?php endif; ?>
            </div>

            <div class=" flex flex-col md:flex-row gap-8 lg:hidden order-1 ">
                <div class="content-card-sec md:w-1/2 lg:w-1/4">
                    <?php if ($latest_posts->have_posts()) : ?>
                        <h1 class="left-card-title">Latest Post</h1>
                        <div class="left-content style-4">
                            <?php while ($latest_posts->have_posts()) : $latest_posts->the_post();
                                get_template_part('template-parts/content', 'latest-card');
                            endwhile; ?>
                            <!-- <div class="left-content-card">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div> -->
                        </div>
                    <?php endif; ?>
                </div>
                <div class="content-card-sec md:w-1/2 lg:w-1/4">
                    <?php if ($popular_posts->have_posts()) : ?>
                        <h1 class="left-card-title">Popular Post</h1>
                        <div class="right-content style-4">
                            <?php while ($popular_posts->have_posts()) : $popular_posts->the_post();
                                get_template_part('template-parts/content', 'search-card');
                            endwhile; ?>
                            <!-- <div class="right-content-card">
                                <figure class="mb-0">
                                    <img class="content-img" src="<?php //echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                                </figure>
                                <div class="content-detail">
                                    <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                    <p class="content-date">By Summona, 10 June 2021</p>
                                </div>
                            </div> -->
                            
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>



    </div>
</section>

<!-- Business Section -->
<?php $cat1_posts = new WP_Query(array('post_type' => 'post',
                                        'category_name' => $cat_slug_1,
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order'   => 'DESC',
                                        'posts_per_page' => 6 ));

$cat1_term_ID = get_category_by_slug($cat_slug_1)->term_id;
$category1 = get_cat_name($cat1_term_ID);

if ($cat1_posts->have_posts()) : ?>
    <section class="business-sec py-24">
        <div class="container mx-auto">
            <h1 class="title"><?php echo $category1; ?></h1>
                        <div class="upper-card-sec">
            <?php $i = 0;
            while ($cat1_posts->have_posts()) : $cat1_posts->the_post(); 
                if($i==0){ 
                            get_template_part('template-parts/content', 'cat-style1-card'); ?>
                            <!-- <figure class="big-card">
                                <img class="w-full h-full object-cover" src="<?php //echo get_template_directory_uri(); ?>/images/card-img1.jpg" alt="slider-img" />
                                <div class="card-overlay">
                                    <button class="card-cat">HEALTH & FITNESS</button>
                                    <h1 class="card-title">14 Reasons a Fujifilm digital camera is the best choice!?</h1>
                                </div>
                            </figure> -->
                            <div class="small-card-sec">
                <?php }elseif($i==1 || $i==2){
                                get_template_part('template-parts/content', 'cat-style2-card'); ?>
                                <!-- <figure class="w-full h-[20rem] mb-0 relative">
                                    <img class="w-full h-full object-cover" src="<?php //echo get_template_directory_uri(); ?>/images/card-img2.jpg" alt="slider-img" />
                                    <div class="card-overlay">
                                        <button class="card-cat">HEALTH & FITNESS</button>
                                        <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                                    </div>
                                </figure> -->
                    <?php if($i==2){ ?>
                            </div>
                        </div>
                        <div class="lower-card-sec">
                    <?php }
                }else{
                            get_template_part('template-parts/content', 'trending-card');
                } ?>
                            <!-- <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                                <img class="main-card-img" src="<?php //echo get_template_directory_uri(); ?>/images/card-img4.jpg" alt="slider-img" />
                                <div class="card-overlay">
                                    <button class="card-cat">HEALTH & FITNESS</button>
                                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                                </div>
                            </figure> -->
                <?php $i++;
            endwhile; ?>
                        </div>
            <div class="btn-sec">
                <a href="<?php echo home_url() . '/category/' . $cat_slug_1; ?>" aria-label="More Post" class="c-button">View all</a>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Entertainment Section -->
<?php $cat2_posts = new WP_Query(array('post_type' => 'post',
                                        'category_name' => $cat_slug_2,
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order'   => 'DESC',
                                        'posts_per_page' => 6 ));

$cat2_term_ID = get_category_by_slug($cat_slug_2)->term_id;
$category2 = get_cat_name($cat2_term_ID);

if ($cat2_posts->have_posts()) : ?>
    <section class="entertainment-sec pb-24">
        <div class="container mx-auto">
            <h1 class="title"><?php echo $category2; ?></h1>
            <div class="main-card-sec">
                <?php while ($cat2_posts->have_posts()) : $cat2_posts->the_post();
                    get_template_part('template-parts/content', 'default-card');
                endwhile; ?>
                <!-- <div class="main-card group">
                    <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                        <img class="main-card-img" src="<?php //echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
                        <div class="card-overlay">
                            <button class="card-cat">HEALTH & FITNESS</button>
                        </div>
                    </figure>
                    <div class="card-detail">
                        <h1 class="main-card-title">What Are Tarpenes? How Do They Work? – Cannabis Guide</h1>
                        <p class="main-card-desc">If you smoke pot (marijuana) and proclaim yourself to be a Rastafarian stoner, you probably know what are tarpenes. In case you are not, it’s time for you to get...</p>
                        <button class="flex items-center gap-2 group">
                            <span class="read-btn">READ MORE</span>
                            <svg class="svg-hov" width="27" height="12" viewBox="0 0 27 12" fill="#101010" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.5303 6.53033C26.8232 6.23744 26.8232 5.76256 26.5303 5.46967L21.7574 0.696699C21.4645 0.403806 20.9896 0.403806 20.6967 0.696699C20.4038 0.989593 20.4038 1.46447 20.6967 1.75736L24.9393 6L20.6967 10.2426C20.4038 10.5355 20.4038 11.0104 20.6967 11.3033C20.9896 11.5962 21.4645 11.5962 21.7574 11.3033L26.5303 6.53033ZM0 6.75H26V5.25H0V6.75Z" />
                            </svg>
                        </button>

                    </div>
                </div> -->
            </div>
            <div class="btn-sec">
                <a href="<?php echo home_url() . '/category/' . $cat_slug_2; ?>" aria-label="More Post" class="c-button">View all</a>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Trending post section -->
<?php $trending_posts = new WP_Query(array('post_type' => 'post',
                                            'post_status' => 'publish',
                                            'offset'  => 7,
                                            'orderby' => 'date',
                                            'order'   => 'DESC',
                                            'posts_per_page' => 6));
if ($trending_posts->have_posts()) : ?>
    <section class="trending-sec bg-[#FDE9C9] pt-24 pb-24">
        <div class="container mx-auto">
            <h1 class="title">Trending Post</h1>
            <div class="lower-card-sec">
                <?php while ($trending_posts->have_posts()) : $trending_posts->the_post();
                    get_template_part('template-parts/content', 'trending-card');
                endwhile; ?>
                <!-- <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                    <img class="main-card-img" src="<?php //echo get_template_directory_uri(); ?>/images/card-img4.jpg" alt="slider-img" />
                    <div class="card-overlay">
                        <button class="card-cat">HEALTH & FITNESS</button>
                        <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                    </div>
                </figure> -->
            </div>
            <!-- <div class="btn-sec">
                <button class="c-button">View all</button>
            </div> -->
        </div>
    </section>
<?php endif; ?>

<!-- Lifestyle section -->
<?php $cat3_posts = new WP_Query(array('post_type' => 'post',
                                        'category_name' => $cat_slug_3,
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order'   => 'DESC',
                                        'posts_per_page' => 6 ));

$cat3_term_ID = get_category_by_slug($cat_slug_3)->term_id;
$category3 = get_cat_name($cat3_term_ID);

if ($cat3_posts->have_posts()) : ?>
    <section class="lifestyle-sec pt-24">
        <div class="container mx-auto">
            <h1 class="title"><?php echo $category3; ?></h1>
            <div class="main-card-sec">
                <?php while ($cat3_posts->have_posts()) : $cat3_posts->the_post();
                    get_template_part('template-parts/content', 'default-card');
                endwhile; ?>
                <!-- <div class="main-card group">
                    <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                        <img class="main-card-img" src="<?php //echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
                        <div class="card-overlay">
                            <button class="card-cat">HEALTH & FITNESS</button>
                        </div>
                    </figure>
                    <div class="card-detail">
                        <h1 class="main-card-title">What Are Tarpenes? How Do They Work? – Cannabis Guide</h1>
                        <p class="main-card-desc">If you smoke pot (marijuana) and proclaim yourself to be a Rastafarian stoner, you probably know what are tarpenes. In case you are not, it’s time for you to get...</p>
                        <button class="flex items-center gap-2 group">
                            <span class="read-btn">READ MORE</span>
                            <svg class="svg-hov" width="27" height="12" viewBox="0 0 27 12" fill="#101010" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.5303 6.53033C26.8232 6.23744 26.8232 5.76256 26.5303 5.46967L21.7574 0.696699C21.4645 0.403806 20.9896 0.403806 20.6967 0.696699C20.4038 0.989593 20.4038 1.46447 20.6967 1.75736L24.9393 6L20.6967 10.2426C20.4038 10.5355 20.4038 11.0104 20.6967 11.3033C20.9896 11.5962 21.4645 11.5962 21.7574 11.3033L26.5303 6.53033ZM0 6.75H26V5.25H0V6.75Z" />
                            </svg>
                        </button>
                    </div>
                </div> -->
            </div>
            <div class="btn-sec">
                <a href="<?php echo home_url() . '/category/' . $cat_slug_3; ?>" aria-label="More Post" class="c-button">View all</a>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Other category section  -->
<?php $categories = get_categories(array('exclude' => array(1),
                                    'number' => 3,
                                    'hide_empty' => 0,
                                    'orderby' => 'count',
                                    'order'   => 'DESC'));
if ( !empty($categories)) : ?>
    <section class="other-category-sec pt-24 pb-12 md:pb:24 lg:pb-40">
        <div class="container mx-auto">
            <h1 class="title">Other Categories</h1>
            <div class="other-category">
                <?php foreach ($categories as $category) { ?>
                    <a href="<?php echo get_category_link($category->term_id); ?>">
                        <figure class="mb-0 h-[21.8rem] relative overflow-hidden group">
                            <img class="main-card-img" src="<?php echo category_image( $category->term_id); ?>" alt="other-img" />
                            <div class="counter-overlay">
                                <h1 class="counter-count"><?php echo $category->category_count; ?>+</h1>
                                <p class="counter-content"><?php echo $category->name; ?></p>
                            </div>
                        </figure>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>