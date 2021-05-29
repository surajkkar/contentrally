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
			<?php get_search_form(); ?>
		</div>

		<div class="socil-media-section also-read-sec">
			<h3 class="socil-taitel">SUBSCRIBE TO OUR NEWSLETTER</h3>
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
				