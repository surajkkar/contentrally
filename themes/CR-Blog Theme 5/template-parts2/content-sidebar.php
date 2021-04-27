<?php $posts_per_page = 5;
$siebar_recent_args = array(
    'post_type' => 'post',
    'post_status'=>'publish', 
    'posts_per_page' => $posts_per_page,
    'order'     => 'DESC',
    'orderby'   => 'date',
);
$sidebar_recent_query = get_posts($siebar_recent_args);

$sidebar_popular_args = array(
    'post_type' => 'post',
    'post_status'=>'publish', 
    'posts_per_page' => $posts_per_page,
    'order'     => 'DESC',
    'meta_key' => 'post_views_count',
    'orderby'   => 'meta_value_num'
);
$sidebar_popular_query = get_posts($sidebar_popular_args);
?>




<div class="col-md-4">
	<aside class="aside-bar">
	    <div class="sidebar-search">
            
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
		<div class="socil-media-section">
			<h3 class="socil-taitel">STAY UPDATED WITH THE CONTENT RALLY.</h3>
			<p class="socil-text">Subscribe To Our Daily Newsletter And Get News Delivered Straight To
				Your Inbox</p>
			<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>			
		</div>

		<div class="also-read-sec">
			
			<div class="socil-media-section">
				<h3 class="socil-taitel">RECENT POSTS</h3>
				<?php foreach($sidebar_recent_query as $post): setup_postdata($post);
			
						get_template_part( 'template-parts/content', 'sidebar-card-loop' );
		
				endforeach;
				wp_reset_postdata(); ?>

			</div>
		</div>
		<div class="also-read-sec">
	
			<div class="socil-media-section">
				<h3 class="socil-taitel">POPULAR POSTS</h3>
				<?php foreach($sidebar_popular_query as $post): setup_postdata($post);
				
						get_template_part( 'template-parts/content', 'sidebar-card-loop' );

				endforeach;
				wp_reset_postdata(); ?>

			</div>

		</div>
		

	</aside>
</div>
				