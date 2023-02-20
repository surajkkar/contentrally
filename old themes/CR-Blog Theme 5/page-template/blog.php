<?php
/*Template Name: Blog */
get_header();
$current_page_ID = get_the_ID();
$posts_per_page = 24;


$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$blog_array = array( 'post_type' => 'post',
    'post_status'=>'publish', 
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    'order'     => 'DESC',
    'meta_key' => 'post_views_count',
    'orderby'   => 'meta_value_num',
);

$blog_query = new WP_Query($blog_array);
?>


  <?php if ( $blog_query->have_posts() ) : ?>

    <section class="main-section">
        <div class="container">
            <article class="page-taitel">
                <h1>Blogs</h1>
            </article>          
            <div class="row small-card-grid">

                <?php $i = 1;
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                
                      if($i <= $posts_per_page) {
                
	                    get_template_part( 'template-parts/content', 'blog-card-loop' );
                  
                      }
                    
                $i++;
                endwhile; ?>
            </div>

        </div>
    </section>
    <section class="main-section">
        <div class="container">
          <div class="cat-pagi">
            <div class="nav-links">
                <?php
                echo paginate_links( array(
                    'format'  => 'page/%#%',
                    'current' => $paged,
                    'total'   => $blog_query->max_num_pages,
                    'mid_size'        => 2,
                    'prev_text'       => __('<< Previous'),
                    'next_text'       => __('Next >>')
                ) ); ?>
            </div>
          </div>
        </div>

    </section>

    <?php else : ?>
        <div class="col-md-12 not-found-sec">
            <h1 class="page-title"><?php _e( 'Nothing Found', 'crally' ); ?></h1>
            <div><?php _e( 'Sorry, but nothing found.', 'crally' ); ?></div>
        </div>
    <?php endif; ?> 

    <!-- Featured -->
    <?php get_template_part( 'template-parts/content', 'slick-slider'); ?>
    <!-- Featured -->


<?php
get_footer();