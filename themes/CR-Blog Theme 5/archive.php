<?php
get_header();
?>

<section class="main-section">
  <article class="artical-section">
    <div class="container">
      <div class="row">
          

          <div class="col-md-8">
            <div class="main-content">            
              
                  <div class="archive-banner">
                      <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                      <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
                  </div>

                  <?php if ( have_posts() ) : ?>

                      <div class="row">

                        <?php while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'archive-card-loop' );

                        endwhile; ?>

                      </div>
                    
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
                       
          <?php get_template_part( 'template-parts/content', 'sidebar'); ?>

      </div>
    </div>
  </article>
</section>


					
					
	
<?php
get_footer(); ?>
