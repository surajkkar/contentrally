<?php
/* Template Name: Home Page 2 */
get_header();

$default_image = get_template_directory_uri() . '/img/img (150).jpg';


$recent_query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'order'     => 'DESC',
    'orderby'   => 'date'
);
$recent_query = get_posts($recent_query_args);

$popular_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'order'     => 'DESC',
    'meta_key' => 'post_views_count',
    'orderby'   => 'meta_value_num'
);
$popular_query = get_posts($popular_args);

$first_cat_slug = 'youtube';
$first_cat_arr = get_category_by_slug($first_cat_slug);
$args1 = array('numberposts' => 3, 'category_name' => $first_cat_slug, 'post_status' => 'publish');
$first_cat_posts = get_posts($args1);

$second_cat_slug = 'music';
$second_cat_arr = get_category_by_slug($second_cat_slug);
$args2 = array('numberposts' => 3, 'category_name' => $second_cat_slug, 'post_status' => 'publish');
$second_cat_posts = get_posts($args2);


$cat_args1 = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'parent' => 0
);
$parent_categories = get_categories($cat_args1);

?>

<h1 style="display:none;">
    Home Page
</h1>
<!-- Popular posts -->
<section class="spaching-sec main-body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="headr-banner-sec">

                    <?php if (!empty($recent_query)) {
                        $PCount = 1;
                        foreach ($recent_query as $post) : setup_postdata($post); ?>
                            <?php if ($PCount <= 4) {
                                if ($PCount == 1) { ?>
                                <div class="banner-container">
                                    <div class="row">
                                <?php } ?>

                                    <?php if ($PCount <= 2) {

                                        get_template_part('template-parts/content', 'blog-loop1');

                                    } elseif ($PCount == 3) {

                                        get_template_part('template-parts/content', 'blog-loop2');

                                    } ?>

                                <?php if ($PCount == 4) { ?>
                                    </div>
                                </div>
                            <?php 
                            } ?>

                            <?php } else { ?>

                                <?php if ($PCount == 5) {
                                    echo '<div class="my-re-car-jar">';
                                } ?>

                                <?php if ($PCount == 5) { ?>

                                    <div class="row">                                        

                                    <?php get_template_part('template-parts/content', 'blog-loop5');

                                    } elseif ($PCount == 6) { ?>

                                        <?php get_template_part('template-parts/content', 'blog-loop6'); ?>

                                    </div>

                                <?php } elseif ($PCount == 7) { ?>

                                    <div class="row">
                                        
                                        <?php get_template_part('template-parts/content', 'blog-loop6'); ?>

                                    <?php } elseif ($PCount == 8) { ?>

                                        <?php get_template_part('template-parts/content', 'blog-loop5'); ?>

                                    </div>

                                <?php } ?>

                                <?php if ($PCount == 8) {
                                    echo '</div>';
                                } ?>

                    <?php }
                            $PCount++;
                        endforeach;
                        wp_reset_postdata();
                    } ?>

                </section>
            </div>

            <div class="col-md-3">
                

                <aside class="main-body-asid">
                    <div class="sidebar-search">
                        <?php get_search_form(); ?>
                    </div>

                    <?php if (!empty($recent_query)) { ?>

                        <div class="headr-banner-asid-contant scroll-asid">
                            <h5 class="asid-content-taitel"><a href="#">Recent Post</a></h5>
                            <div class="scroll-asid">
                                <ul class="asid-ul">
                                    <?php foreach ($recent_query as $post) {

                                    get_template_part('template-parts/content', 'sidebar-loop1');

                                } ?>
                                </ul>
                            </div>
                        </div>

                    <?php } ?>

                    <div class="myreport-cont">
                        <h5 class="myreport-taitel">Popular post</h5>
                        <ul class="my-report-card-ul">
                            <?php $pCount = 1;
                            foreach ($popular_query as $post) {

                                get_template_part('template-parts/content', 'sidebar-loop2');

                            $pCount++;
                            } ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</section>


<!-- Category -->
<?php if (!empty($parent_categories)) { ?>
    <section class="inline-bigstory-wrap">
        <div class="container">

        </div>
        <div class="bigstory-section">
            <div class="container">
                <h2 class="big-story-taitel">Trending Category</h2>
                <span class="nav-button"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                <div class="c-card-slider-container">
                    <?php $posts_count = '';
                    foreach ($parent_categories as $cat) : setup_postdata($cat);

                        if ($cat->slug != 'uncategorized') {

                            if (function_exists('get_wp_term_image')) {
                                $meta_image = get_wp_term_image($cat->term_id);
                            } ?>

                            <div class="c-card-elements ">
                                <div class="image-container">
                                    <a href="<?php echo get_category_link($cat->term_id); ?>">
                                        <?php if (!empty($meta_image)) { ?>
                                            <img class="card-img" src="<?php echo $meta_image; ?>" alt="<?php get_image_alt_text($meta_image); ?>">
                                        <?php } else { ?>
                                            <img class="card-img" src="<?php echo $default_image; ?>" alt="default-img">
                                        <?php } ?>
                                    </a>
                                    <div class="img-text-contenr">
                                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                                            <h4 class="contenr-taitel"><?php echo $cat->name; ?></h4>
                                            <h5 class="contenr-paragraph">
                                                <?php $cate_desc = strip_tags(category_description($cat->term_id)); ?>
                                                <?php //get_limited_title_func($cate_desc, 100); 
                                                ?>
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <div class="overley"></div>
                                    <?php get_limited_title_func($cate_desc, 250); ?>
                                </div>
                            </div>

                    <?php }
                    endforeach;
                    wp_reset_postdata(); ?>
                </div>
                <span class="nav-button"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </div>
        </div>

    </section>
<?php } ?>


<!-- Posts by category(1 & 2) -->
<section class="devaid-sec-onion-auto-tech">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="sec-taitel-h2"><?php echo $first_cat_arr->name; ?></h2>

                <?php $fi = 1;
                foreach ($first_cat_posts as $post) : setup_postdata($post);

                    if ($fi == 1) {

                        get_template_part('template-parts/content', 'blog-loop4');

                    } else { ?>

                        <?php if ($fi == 2) {
                            echo '<div class="col-contener">';
                        } ?>

                        <?php get_template_part('template-parts/content', 'related-card-loop');

                        if ($fi == 3) {
                            echo '</div>';
                        } ?>

                    <?php } ?>

                <?php
                    $fi++;
                endforeach;
                wp_reset_postdata(); ?>

            </div>
            <div class="col-md-6">
                <h2 class="sec-taitel-h2"><?php echo $second_cat_arr->name; ?></h2>

                <?php $si = 1;
                foreach ($second_cat_posts as $post) : setup_postdata($post);

                    if ($si == 1) {

                        get_template_part('template-parts/content', 'blog-loop4');

                    } else { ?>

                        <?php if ($si == 2) {
                            echo '<div class="col-contener">';
                        }

                            get_template_part('template-parts/content', 'related-card-loop');

                        if ($si == 3) {
                            echo '</div>';
                        } ?>



                    <?php } ?>

                <?php
                    $si++;
                endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>

    </div>
</section>
<!-- Posts by category(1 & 2) -->




<?php
get_footer();
?>