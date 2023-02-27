<?php $post_ID = get_the_ID();
$title = the_title_attribute('echo=0');
// $author_id = get_post_field( 'post_author', $post_ID );
// $author_fname = get_the_author_meta('first_name', $author_id);
// $display_name = get_the_author_meta('display_name', $author_id);
// $author_URL = get_author_posts_url($author_id);
// if (!empty($author_fname)) {
//     $author_name = $author_fname;
// } else {
//     $author_name = $display_name;
// } 
?>

<div class="right-content-card">
    <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
        <figure class="mb-0">
            <?php if ( has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail( $post_ID, 'search-thumbnail', array( 'class' => 'content-img' ) ); ?>
            <?php else : ?>
                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
            <?php endif; ?>
        </figure>
    </a>
    <div class="content-detail">
        <h2 class="content-title">
            <a href="<?php echo get_the_permalink($post_ID); ?>" rel="bookmark" title="<?php $title; ?>">
                <?php echo $title; ?>
            </a>
        </h2>
        <p class="content-date">
            <!-- <a href="<?php //echo $author_URL; ?>">By <?php //echo $author_name; ?></a>,  -->
            <?php echo get_the_date('d M Y'); ?>
        </p>
    </div>
</div>