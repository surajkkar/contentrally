<?php
get_header();
$author_id = get_the_author_meta('ID');
$author_fname = get_the_author_meta('first_name', $author_id);
$author_lname = get_the_author_meta('last_name', $author_id);

/* $args = array(
  'author'        =>  $author_id, // I could also use $user_ID, right?
  'post_type' => 'post', 
  'post_status' => 'publish'
);
$current_user_posts = get_posts( $args );
echo '<pre>';
print_r($current_user_posts);
echo '</pre>';
echo count($current_user_posts); */

?>



  
<section class="main-section">
  <article class="artical-section">
    <div class="container">
      <div class="row">
          

          <div class="col-md-8">
            <div class="main-content">            
              
                  <div class="archive-banner">
                    <?php //the_archive_title( '<h1 class="page-title">', '</h1>' );
                    if (!empty($author_fname)) {
                        echo '<h1 class="page-title"> Author: '.$author_fname . ' ' . $author_lname.'</h1>';
                    } else {
                        echo '<h1 class="page-title"> Author: '.get_the_author().'</h1>';
                    } ?>
                      <div class="archive-sec">
                        <img src="<?php echo esc_url(get_avatar_url($author_id)); ?>" alt="" />                      
                        <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
                      </div>
                  </div>
                  <div class="row">

                    <?php if ( have_posts() ) : ?>                    

                          <?php while ( have_posts() ) : the_post();
                          
                              get_template_part( 'template-parts/content', 'archive-card-loop' );
                                                              
                          endwhile; ?>                    
                      
                        <div class="cat-pagi">
                            <?php the_posts_pagination( array(
                              'prev_text'          => __( '<< Previous ', 'crally' ),
                              'next_text'          => __( ' Next >>', 'crally' ),
                              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'crally' ) . ' </span>',
                            ) ); ?>
                        </div>

                    <?php else : ?>
                      <div class="col-md-12 not-found-sec">
                        <h2 class="page-title"><?php _e( 'Nothing Found', 'crally' ); ?></h2>
                        <div><?php _e( 'Sorry, but nothing found.', 'crally' ); ?></div>
                      </div>
                    <?php endif; ?>
                </div>             
            
            </div>   
          </div>    
                    
          <?php get_template_part( 'template-parts/content', 'sidebar'); ?>

      </div>
    </div>
  </article>
</section>


					
					
	
<?php
get_footer(); ?>
