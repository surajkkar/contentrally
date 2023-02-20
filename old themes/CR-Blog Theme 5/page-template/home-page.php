<?php
/* Template Name: Home Page */
get_header();

$default_image = get_template_directory_uri() . '/img/img (150).jpg';


$popular_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'order'     => 'DESC',
    'meta_key' => 'post_views_count',
    'orderby'   => 'meta_value_num'
);
$popular_query = get_posts($popular_args);

$recent_query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'order'     => 'DESC',
    'orderby'   => 'date'
);
$recent_query = get_posts($recent_query_args);


/* $editors_args = array(
    'post_type' => 'post',
    'post_status'=>'publish', 
    'posts_per_page' => 4,
    'order'     => 'DESC',
    'meta_query' => array(
        array(
            'key' => '_vcon_editors_pick',
            'value' => '1',
            'compare' => '=',
        )
    )
);
$editors_query = get_posts($editors_args); */


$cat_args1 = array(
    'orderby' => 'name',
    'order' => 'DESC',
    'parent' => 0
);
$parent_categories = get_categories($cat_args1);



$first_cat_slug = 'youtube';
$second_cat_slug = 'music';
$third_cat_slug = 'seo';
$fourth_cat_slug = 'education';

$first_cat_arr = get_category_by_slug($first_cat_slug);
$args1 = array('numberposts' => 3, 'category_name' => $first_cat_slug, 'post_status' => 'publish');
$first_cat_posts = get_posts($args1);

$second_cat_arr = get_category_by_slug($second_cat_slug);
$args2 = array('numberposts' => 3, 'category_name' => $second_cat_slug, 'post_status' => 'publish');
$second_cat_posts = get_posts($args2);

// $third_cat_arr = get_category_by_slug($third_cat_slug);
// $args3 = array('numberposts' => 3, 'category_name' => $third_cat_slug, 'post_status' => 'publish');
// $third_cat_posts = get_posts($args3);

// $fourth_cat_arr = get_category_by_slug($fourth_cat_slug);
// $args4 = array('numberposts' => 3, 'category_name' => $fourth_cat_slug, 'post_status' => 'publish');
// $fourth_cat_posts = get_posts($args4);

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
                                if ($PCount == 1) {
                                    echo '<div class="banner-container">
                                        <div class="row">';
                                } ?>

                                <?php if ($PCount <= 3) { ?>
                                    <div class="col-md-4 pr-md-1">
                                        <div class="new-card">
                                            <?php echo get_the_post_thumbnail($post->ID, 'first-thumbnail', array('class' => 'new-img')); ?>
                                            <a class="new-card-link" href="<?php echo get_the_permalink($post->ID); ?>">
                                                <?php get_limited_title_func($post->post_title, 75); ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php } elseif ($PCount == 4) { ?>
                                    <section class="new-cardc" style="margin-buttom: 10px;">
                                        <?php echo get_the_post_thumbnail($post->ID, 'large', array('class' => 'new-img1')); ?>
                                        <a class="new-card-link1" href="<?php echo get_the_permalink($post->ID); ?>">
                                            <?php echo $post->post_title; ?>
                                        </a>
                                    </section>
                                <?php } ?>

                                <?php if ($PCount == 4) {
                                    echo '</div>
                                    </div>';
                                } ?>
                            <?php } else { ?>

                                <?php if ($PCount == 5) {
                                    echo '<div class="my-re-car-jar">';
                                } ?>

                                <?php if ($PCount == 5) { ?>

                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="card-big-img-contener">
                                                <a class="card-big-img-link" href="<?php echo get_the_permalink($post->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($post->ID, 'medium-thumbnail', array('class' => 'card-big-img-contener-img')); ?>
                                                    <div class="card-big-taitel">
                                                        <h6 class="card-big-taitel-text"><?php echo $post->post_title; ?></h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    <?php } elseif ($PCount == 6) { ?>

                                        <div class="col-sm-4">
                                            <div class="medium-card-sec">
                                                <a href="<?php echo get_the_permalink($post->ID); ?>">
                                                    <h6 class="medium-c-titel"><?php get_limited_title_func($post->post_title, 60); ?></h6>
                                                    <?php echo get_the_post_thumbnail($post->ID, 'second-thumbnail', array('class' => 'medium-card-img')); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                <?php } elseif ($PCount == 7) { ?>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="medium-card-sec">
                                                <a href="<?php echo get_the_permalink($post->ID); ?>">
                                                    <h6 class="medium-c-titel"><?php get_limited_title_func($post->post_title, 60); ?></h6>
                                                    <?php echo get_the_post_thumbnail($post->ID, 'second-thumbnail', array('class' => 'medium-card-img')); ?>
                                                </a>
                                            </div>
                                        </div>

                                    <?php } elseif ($PCount == 8) { ?>

                                        <div class="col-sm-8">
                                            <div class="card-big-img-contener">
                                                <a class="card-big-img-link" href="<?php echo get_the_permalink($post->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($post->ID, 'medium-thumbnail', array('class' => 'card-big-img-contener-img')); ?>
                                                    <div class="card-big-taitel">
                                                        <h6 class="card-big-taitel-text"><?php echo $post->post_title; ?></h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
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
                        <?php //echo do_shortcode('[get_recent_posts]');
                        ?>
                        
                        <form  role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form right-sub-container" style="display:none">
                        	<div class="input-group">
                        		<input type="text" placeholder="Search ContentRally" autofocus required
                        		class="right-sub-container-text" value="<?php echo get_search_query(); ?>" name="s"/>
                        		<div class="input-group-append ">
                        			<button class="search-button btn right-sub-container-subscrib" type="submit">
                        				<i class="fas fa-search"></i>
                        			</button>
                        		</div>
                        	</div>
                        </form>

                    </div>
                    <?php //echo do_shortcode('[get_popular_posts]'); 
                    if (!empty($recent_query)) { ?>

                        <div class="headr-banner-asid-contant scroll-asid">
                            <h5 class="asid-content-taitel">Recent Post</h5>
                            <div class="scroll-asid">
                                <ul class="asid-ul">
                                    <?php foreach ($recent_query as $post) { ?>

                                        <li class="asid-li">
                                            <a class="asid-link" href="<?php echo get_the_permalink($post->ID); ?>">
                                                <span class="left-span">
                                                    <?php echo get_the_post_thumbnail($post->ID, 'sidebar-post-thumbnail'); ?>
                                                </span>
                                                <span class="right-sapn"><?php get_limited_title_func($post->post_title, 60); ?></span>
                                            </a>
                                        </li>

                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                    <?php } ?>

                    <div class="myreport-cont">
                        <h5 class="myreport-taitel">Popular Post</h5>
                        <ul class="my-report-card-ul">
                            <?php $pCount = 1;
                            foreach ($popular_query as $post) { ?>

                                <li class="my-report-card-li"> <span class="my-report-card-span"><?php echo $pCount; ?></span>
                                    <h4><a href="<?php echo get_the_permalink($post->ID); ?>"><?php get_limited_title_func($post->post_title, 60); ?></a></h4>
                                </li>

                            <?php $pCount++;
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
                <div class="row">
                    <?php $posts_count = '';
                    foreach ($parent_categories as $cat) : setup_postdata($cat);

                        if ($cat->slug != 'uncategorized') {

                            if (function_exists('get_wp_term_image')) {
                                $meta_image = get_wp_term_image($cat->term_id);
                            } ?>

                            <div class="card-elements ">
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

                    if ($fi == 1) { ?>

                        <div class="card-big-img-contener">
                            <a class="card-big-img-link" href="<?php echo get_the_permalink($post->ID); ?>">
                                <?php echo get_the_post_thumbnail($post->ID, 'medium-thumbnail', array('class' => 'card-big-img-contener-img')); ?>

                                <div class="card-big-taitel">
                                    <h6 class="card-big-taitel-text"><?php echo $post->post_title; ?></h6>
                                </div>
                            </a>
                        </div>

                    <?php } else { ?>

                        <?php if ($fi == 2) {
                            echo '<div class="col-contener">';
                        } ?>

                        <!-- <div class="small-card-sec">
                                        <a href="<?php //echo get_the_permalink($post->ID); 
                                                    ?>">
                                            <h6 class="small-c-titel"><?php //get_limited_title_func($post->post_title, 60); 
                                                                        ?></h6>
					    <p>
						<?php //get_limited_title_func($post->post_content, 100); 
                        ?>
				            </p>
                                        </a>
                                    </div>  -->

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

                    if ($si == 1) { ?>

                        <div class="card-big-img-contener">
                            <a class="card-big-img-link" href="<?php echo get_the_permalink($post->ID); ?>">
                                <?php echo get_the_post_thumbnail($post->ID, 'medium-thumbnail', array('class' => 'card-big-img-contener-img')); ?>

                                <div class="card-big-taitel">
                                    <h6 class="card-big-taitel-text"><?php echo $post->post_title; ?></h6>
                                </div>
                            </a>
                        </div>

                    <?php } else { ?>

                        <?php if ($si == 2) {
                            echo '<div class="col-contener">';
                        } ?>

                        <?php get_template_part('template-parts/content', 'related-card-loop');

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


<!-- Featured -->
<?php get_template_part('template-parts/content', 'slick-slider'); ?>
<!-- Featured -->

<?php
get_footer();
?>