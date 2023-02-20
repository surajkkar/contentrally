<?php
get_header();
?>

<?php if (have_posts()) :
    while (have_posts()) : the_post();

        $postid = get_the_ID();
        if (function_exists('subh_set_post_view')) {
            subh_set_post_view($postid);
        }
         
        $author_id = get_the_author_meta('ID');
        $author_fname = get_the_author_meta('first_name', $author_id);
        $author_lname = get_the_author_meta('last_name', $author_id);
        $featured_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        $date = get_the_date();
        $author_display_name = get_the_author();
        $cats = get_the_category($postid);   
        $first_cat = $cats[0];

    
?>


      <section class="blog-banner">
          <?php echo get_the_post_thumbnail(get_the_ID(),'singlepage-thumbnail',array('class' => 'banner-img')); ?>
          <p class="banner-bottom-taitel"><?php //the_title(); ?></p>  
          
          <div class="post-title-container">
              <aside class="post-category post-detail-category">
                <a href="<?php echo get_category_link($first_cat->term_id); ?>"><?php echo $first_cat->name; ?></a>
              </aside>
              <header class="post-title entry-header">
                  <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
              </header>
              <div class="thb-post-title-bottom thb-post-share-style1">
                  <div class="thb-post-title-inline-author">
                    <div class="author-and-date">
                        <div class="post-author thb-post-author-5">
                            <em>by</em> 
                            <a href="<?php echo get_author_posts_url($author_id); ?>">
                                <?php if (!empty($author_fname)) {
                                    echo $author_fname . ' ' . $author_lname;
                                } else {
                                    echo get_the_author();
                                } ?>
                            </a>, 
                            <span><?php the_date(); ?></span>
                            <!--<div class="thb-post-date">-->
                            <!--</div>-->
                        </div>
                        
                    </div>
                  </div>
              </div>
          </div>
          
      </section>


      <article class="artical-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="artical">

                        <?php /* ?>
                        <section class="artical-header">
                            <h1 class="artical-taitel"><?php echo get_the_title(); ?></h1>
                            <div class="mata-section">
                                <div class="mata-left">
                                    <span class="nation text-nowrap"><span class="label">Category:</span>
                                        <a href="<?php echo get_category_link($first_cat->term_id); ?>"><?php echo $first_cat->name; ?></a>
                                    </span>
                                    <span class="mata-name text-nowrap"><span class="label">By:</span>
                                        <a href="<?php echo get_author_posts_url($author_id); ?>">
                                            <?php if (!empty($author_fname)) {
                                                echo $author_fname . ' ' . $author_lname;
                                            } else {
                                                echo get_the_author();
                                            } ?>
                                        </a>
                                    </span>
                                    <span class="mata-date text-nowrap"><span class="label">Posted on:</span> <?php the_date(); ?></span>
                                </div>
                            </div>
                        </section>
                        <?php */?>

                        <section class="artical-content">
                            
                            <?php the_content(); ?>

                        </section>
                        
                        <div class="single-post-blog">
        					<div class="container">
        						<?php $tags = get_the_tags(get_the_ID());
        						$html = '<div class="post_tags"> <span class="tags-title">Tags: </span> ';
        						$c = 1;
        						foreach ( $tags as $tag ) {
        							$tag_link = get_tag_link( $tag->term_id );
        							if($c >1) { $html .= " , "; }		
        							$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        							$html .= "{$tag->name}</a>";							
        						$c++; }
        						$html .= '</div>';
        						echo $html; ?>
        					</div>
        				</div>
					
                        <!-- <section class="socil-link">
                        </section> -->
						
						<section class="single-post-blog">
                            <div class="author-sec">
                            <div class="row">
                                <div class="col-md-2 author-img-container">
                                    <div class="author-img">
                                        <img src="<?php echo esc_url(get_avatar_url($author_id)); ?>" alt="" />
                                    </div>
                                    
                                </div>                                
                                <div class="col-md-10 author-text-container">
                                    <h5 class="author-name">
                                        <a href="<?php echo get_author_posts_url($author_id, get_the_author_meta('user_nicename')); ?>">
                                            <?php if (!empty($author_fname)) {
                                                echo $author_fname . ' ' . $author_lname;
                                            } else {
                                                the_author();
                                            } ?>
                                        </a>
                                    </h5>
                                   <div class="author-text">
                                      <p><?php the_author_meta('description', $author_id); ?></p>
                                   </div>
                                </div>
                            </div>
                            </div>
                        </section>

                        <section class="single-post-blog">
                            <?php if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif; ?>
                        </section>
						
                    </div>
                </div>              

                
                <?php get_template_part( 'template-parts/content', 'sidebar');?>

            </div>
        </div>
      </article>


<?php
endwhile;
endif;

    if ($cats) {
        $first_cat = $cats[0]->term_id;
        $related_args = array(
                'category__in' => array($first_cat), 
                'post__not_in' => array($postid), 
                'posts_per_page' => 4, 
                'caller_get_posts' => 1
        );
        $related_query = new WP_Query($related_args);

        if ($related_query->have_posts()) { ?>
            <section class="only-card-content list related-posts">
            	
                <div class="container"> 
	                <div class="row">   
		                 <div class="article">                
		                    <h2 class="all-head-taitel">Related Posts</h2>
		                
			                <div class="main-section">
			                    <div class="row">
			
			                    <?php while ($related_query->have_posts()) : $related_query->the_post();
			
			                        get_template_part( 'template-parts/content', 'related-card-loop');
			                            
			                    endwhile; ?>
			
			                    </div>
			                </div>
		                </div>
	                </div>
                </div>
            </section>
        <?php }
    }




get_footer();