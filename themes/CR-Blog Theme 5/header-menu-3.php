<nav class="navbar navbar-expand-lg navbar-dark header-top header">
    
    <section class="header-top-container container">
        <a class="header-logo-link" href="<?php echo home_url(); ?>">
            <div class="header-logo-sec">
                <img src="<?php echo $crally['logo']['url']; ?>" alt="">
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-0">
    
                    <?php $args1 = array(
                        'orderby' => 'name',
                        'order' => 'DESC',
                        'parent' => 0
                    );
                    $parent_categories = get_categories($args1);
                    $no_child_cat_arr = array();
                    $cCount = 1;
                    foreach ($parent_categories as $pcat) : setup_postdata($pcat);
                        if ($pcat->slug != 'uncategorized' && $cCount <= 9) { ?>
    
                            <?php $first_args = array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'parent' => $pcat->term_id
                            );
                            $child_categories = get_categories($first_args);
    
                            if (count($child_categories) > 0 && !empty($child_categories) && is_array($child_categories)) { ?>
    
                                <a class="nav-link menu-text" href="<?php echo get_category_link($pcat->term_id); ?>">
                                    <?php echo $pcat->name; ?>
                                </a>
    
                                <li class="nav-item ">
    
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <!-- <h5>Best deals of the day</h5> -->
                                                    <ul class="list-links">
                                                        <?php $c = 1;
                                                        foreach ($child_categories as $ccat) : setup_postdata($ccat); ?>
                                                            <li class="<?php if ($c == 1) {
                                                                            echo 'active-data';
                                                                        } ?>">
                                                                <a data-name="<?php echo $ccat->slug; ?>" href="#<?php echo $ccat->slug; ?>-post">
                                                                    <?php echo $ccat->name; ?>
                                                                </a>
                                                            </li>
                                                        <?php $c++;
                                                        endforeach;
                                                        wp_reset_postdata(); ?>
                                                    </ul>
                                                </div>
    
                                                <?php $pco = 1;
                                                foreach ($child_categories as $ccat) : setup_postdata($ccat); ?>
    
                                                    <div class="col-md-8 <?php echo $ccat->slug;
                                                        if ($pco > 1) {
                                                            echo ' show-dat';
                                                        } else {
                                                            echo ' defaultShow';
                                                        } ?>" id="<?php echo $ccat->slug; ?>-post" <?php if ($pco > 1) { ?> style="display:none;" <?php } ?>>

                                                        <div class="row card-group card-container">
    
                                                            <?php $myposts = get_posts(array(
                                                                'post_type' => 'post',
                                                                'numberposts' => 3,
                                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'category',
                                                                        'field' => 'id',
                                                                        'terms' => $ccat->term_id // Where term_id of Term 1 is "1".
                                                                    )
                                                                )
                                                            ));
                                                            foreach ($myposts as $post) : setup_postdata($post);
    
                                                                get_template_part('template-parts/content', 'menu-card-loop');
    
                                                            endforeach;
                                                            wp_reset_postdata(); ?>
                                                        </div>
    
                                                        <div class="view-all"><a href="<?php echo get_category_link($ccat->term_id); ?>">View All</a></div>
    
                                                    </div>
    
                                                <?php $pco++;
                                                endforeach;
                                                wp_reset_postdata(); ?>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </li>
    
                            <?php } else {
    
                                array_push($no_child_cat_arr, $pcat->term_id);
                            } ?>
    
                        <?php }
                        $cCount++;
                    endforeach;
                    wp_reset_postdata();
    
                    foreach ($no_child_cat_arr as $single_cat) { ?>
                    
                        <a class="nav-link menu-text" href="<?php echo get_category_link($single_cat); ?>">
                            <?php echo get_cat_name($single_cat); ?>
                        </a>
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle" style="visibility: hidden;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                        </li>
    
                    <?php } ?>
    
                </ul>
    
    
        </div>
    </section>
</nav>

