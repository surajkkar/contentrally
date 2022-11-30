<?php $featured_args = array(
    'post_type' => 'post',
    'post_status'=>'publish', 
    'posts_per_page' => 12,
    'order'     => 'DESC',
    'meta_query' => array(
        array(
            'key' => '_vcon_featured',
            'value' => '1',
            'compare' => '=',
        )
    )
);
$featured_query = get_posts($featured_args);


if(!empty($featured_query)) { ?>
<section class="lens-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="slider-content">
					<div class="slider">

						<?php foreach($featured_query as $post): setup_postdata($post); ?>
							<div class="slide">
								<a class="slider-text" href="<?php echo get_the_permalink($post->ID); ?>">
									<h5><?php echo strip_tags($post->post_title); ?></h5>
								</a>
								<a href="<?php echo get_the_permalink($post->ID); ?>">
									<?php echo get_the_post_thumbnail($post->ID,'full'); ?>
								</a>
							</div>
						<?php endforeach;
						wp_reset_postdata(); ?>

					</div>    
				</div>
			</div>
			<div class="col-md-3 justify">

				<?php $ii = 1;
				/* foreach($featured_query as $post): setup_postdata($post); ?>
					<div class="small-card-sec">
						<a href="<?php echo get_the_permalink($post->ID); ?>">
							<h6 class="small-c-titel"><?php echo get_limited_title_func($post->post_title, 60); ?></h6>
						</a>
					</div>
				<?php $ii++;
				endforeach;
				wp_reset_postdata(); */ ?>
				
				
				
				<div class="headr-banner-asid-contant">
				<div class="scroll-asid">
				  <ul class="asid-ul">
					<?php foreach($featured_query as $post) { ?>

						<li class="asid-li">
							<a class="asid-link" href="<?php echo get_the_permalink($post->ID); ?>">
								<span class="left-span">
								  <?php echo get_the_post_thumbnail($post->ID,'sidebar-post-thumbnail'); ?>
								</span>
								<span class="right-sapn"><?php get_limited_title_func(strip_tags($post->post_title), 60); ?></span>
							</a>
						</li>

					<?php } ?>
				  </ul>
				</div>
			  </div>
			  
			  
			  
			  
			  

			</div>
		</div>
	</div>
</section>
<?php } ?>