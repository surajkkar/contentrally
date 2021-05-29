<li class="my-report-card-li"> 
	<!--<span class="my-report-card-span">-->
	<!--	<?php //echo $pCount; ?>		-->
	<!--</span>-->
    <h4>
    	<a href="<?php echo get_the_permalink($post->ID); ?>">
    		<?php get_limited_title_func($post->post_title, 60); ?>
    	</a>
    </h4>
</li>