<?php get_header(); ?>

<section class="inner-sec">

    <div class="container mx-auto">
        <div class="main-wrapper">
            <?php while (have_posts()) : the_post(); 
                $post_id = get_queried_object_id();
                $author_id = get_the_author_meta('ID');
                $author_desc = get_the_author_meta('description', $author_id);
                $cat = get_the_category();
                $cat_ID = $cat[0]->term_id;
                $cat_name = $cat[0]->cat_name;
                $tags = get_the_tags();?>
                <section class="inner-wrapper lg:w-3/4 p-4 lg:p-8 bg-[#FFFFFF] border border-[#E9E9E9] border-t-4 border-t-[#EC9A15]">
                    <h1 class="inner-title-h1"><?php echo the_title_attribute(); ?></h1>
                    <div class="date-sec flex gap-2 items-center mb-8">
                        <span class="date">by</span>
                        <p class="date font-bold"><?php the_author_posts_link(); ?></p>
                        <p class="date start-dot"><?php echo get_the_date('d F Y'); ?></p>
                        <p class="date start-dot">
                            <a href="<?php echo esc_url( get_category_link( $cat_ID ) ); ?>" title="<?php echo $cat_name; ?>">
                                <?php echo $cat_name; ?>
                            </a>
                        </p>
                    </div>
                    <figure class="mb-4 w-full h-[20rem] md:h-[38rem]">
                        <?php if ( has_post_thumbnail()) : ?>
                            <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'inner-img' ) ); ?>
                        <?php else : ?>
                            <img class="inner-img" src="<?php echo get_template_directory_uri(); ?>/images/inner-img.jpg" alt="inner-img" />
                        <?php endif; ?>
                    </figure>
                    <div class="content"><?php the_content(); ?></div>
                    <!-- <p class="inner-detail">Gaming zones in Hyderabad are a must-visit for any gamer. From arcades to high-end gaming zones, Hyderabad has something to offer everyone. Also known as “Biryani City,” Hyderabad is famous the world over for its mouth-watering cuisine.
                    </p>
                    <p class="inner-detail">However, with the latest boom of IT industries in the city, it has also become a hub for gaming freaks so its is also known gaming zones in Hyderabad. With almost every IT company coming into Hyderabad, a good number of gamers are also settling in the city.
                    </p>

                    <ul>
                        <li class="inner-detail-ul-li">This town ranked the top position out of 12 best things to do in Flagstaff. When you plan your Flagstaff trip, I would recommend that you start the trip from Historic Downtown and Railroad District.
                        </li>
                        <li class="inner-detail-ul-li">I’m sure you’re going to enjoy the beauty of the town walking along the streets. You will find the historic buildings which are now being converted into hotels, restaurants, breweries, etc.
                        </li>
                        <li class="inner-detail-ul-li">Even in the late night, you’ll find a crowd in the town. I remember when I came back from a movie show, some college students were out on the street. You can book a day or two of your stay here to enjoy the farmer’s market, local events, entertainment shows, shopping, eating, and drinking</li>

                        <li class="inner-detail-ul-li">The town allows easy access to many other tourist spots in Flagstaff. A wonderful park is located within walking distance from the visitor’s center.
                        </li>
                    </ul>

                    <h2 class="inner-title-h2">10 Popular Attractive Gaming Zones</h2>
                    <ol class="inner-ol-sec">
                        <li class="inner-detail-ol-li">There are many kinds of games that one can find on the gaming zones in Hyderabad, and the most common of them all is carrom board followed by chess, poker, and then games like Grand Prix (GP), cricket, etc.
                        </li>
                        <li class="inner-detail-ol-li">With Hyderabad emerging as the largest hub for IT companies in India, some good numbers of new gaming zones are also coming up in the city. Here is a list of some of the famous Gaming zones in Hyderabad ones:
                        </li>
                        <li class="inner-detail-ol-li">Even in the late night, you’ll find a crowd in the town. I remember when I came back from a movie show, some college students were out on the street. You can book a day or two of your stay here to enjoy the farmer’s market, local events, entertainment shows, shopping, eating, and drinking</li>

                        <li class="inner-detail-ol-li">The town allows easy access to many other tourist spots in Flagstaff. A wonderful park is located within walking distance from the visitor’s center.
                        </li>
                    </ol>

                    <figure class="mb-4 w-full h-[20rem] md:h-[38rem]">
                        <img class="inner-img" src="<?php //echo get_template_directory_uri(); ?>/images/inner-img2.jpg" alt="inner-img" />
                    </figure>

                    <h3 class="inner-title-h3">1) NeoZone</h3>

                    <p class="inner-detail">They were one of the first to introduce a high-end gaming zone concept in Hyderabad, which has almost every high-end gaming console. They also provide customized party halls for gamers, and people who love to play games can be found here any time of the day.
                    </p>

                    <h4 class="inner-title-h4">2) GamerzParadise</h4>

                    <div class="overflow-x-auto">
                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Job</th>
                                    <th>Favorite Color</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Cy Ganderton</td>
                                    <td>Quality Control Specialist</td>
                                    <td>Blue</td>
                                </tr>
                                <tr class="hover">
                                    <th>2</th>
                                    <td>Hart Hagerty</td>
                                    <td>Desktop Support Technician</td>
                                    <td>Purple</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Brice Swyre</td>
                                    <td>Tax Accountant</td>
                                    <td>Red</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h5 class="inner-title-h5">3) Tivoli Arcade</h5>

                    <p class="inner-detail">This is one such place that offers all the latest games that come in the market for gamers to enjoy themselves. Some of the games that Tivoli Arcade offers are Grand Prix, D-Day, and other shooting games.
                    </p>

                    <h1 class="inner-title-h1">4) Neo Arena</h1>
                    <p class="inner-detail">This is another place for gamers in Hyderabad located at Khairatabad, which offers modern amenities to the gamers with the latest racing machines installed here. They also provide a dedicated bar where one can relax after a nice round of Grand Prix.
                    </p>

                    <h2 class="inner-title-h2">5) FMX Gaming Zone</h2>
                    <p class="inner-detail">This is a small arcade located at ECIL, which has very limited games but has the latest version of the Grand Prix.
                    </p>

                    <h3 class="inner-title-h3">6) Play Arena</h3>
                    <p class="inner-detail">This is one such gaming zone located at Banjara Hills, where one can find high-end machines to play their favorite games. They also provide monthly membership cards to game freaks which helps in giving some more discounts on the entrance fees.
                    </p>

                    <h4 class="inner-title-h4">7) Revenge Of Arcade </h4>
                    <p class="inner-detail">This is a small gaming arcade located at ECIL X roads which has almost all new versions of Grand Prix and also offers some other games as well.
                    </p>

                    <h5 class="inner-title-h5">8) Arcade Games Zone</h5>
                    <p class="inner-detail">One such place that provides high-end machines to enjoy oneself. They have some of the best gaming machines under one roof, which is also located at ECIL X Roads.
                    </p>

                    <h1 class="inner-title-h1">9) Grand Prix Mania</h1>
                    <p class="inner-detail">One such place to enjoy GP racing is located at Banjara Hills, along with a cafe attached to it. They have almost all new versions of Gaming zones in Hyderabad installed here, and people love spending their time here. However, they don’t allow people to bring food from outside, and one has to order food from them, which is a little costly.
                    </p>

                    <h1 class="inner-title-h1">10) Game Zone</h1>
                    <p class="inner-detail">Another such place is located at ECIL X Roads, where one can enjoy GP, cricket, and other games as well. This is a small gaming arcade with limited machines, but all new versions are installed here. In addition, they have recently started providing online membership cards, which are helpful to game freaks.
                    </p>

                    <h2 class="inner-title-h2">Conclusion</h2>
                    <p class="inner-detail">For the gamers, not only the gaming atmosphere; along with the gaming atmosphere, the other gaming atmosphere is also essential. Many times we have seen the game is good, and the hub is offering multiple extra features. But as the atmosphere is not compatible you are not going to enjoy the ambiances. But these ten selections have pretty impressive features. As a professional gamer, you must visit the place and share your experiences in the comment sections.
                    </p>

                    <div class="read-sec my-12">
                        <h5 class="inner-title-h5">Read More:</h5>
                        <ul class="read-list-sec">
                            <li>
                                <a href="" class="read-list">What Are Some Alternatives To Netflix?</a>
                            </li>
                            <li>
                                <a href="" class="read-list">Things You Need To Know About WoW Classic</a>
                            </li>
                            <li>
                                <a href="" class="read-list">Why Credit Card Generator Can Be the Best Option to Play Game Trials?</a>
                            </li>
                        </ul>
                    </div> -->

                    
                    <div class="share-sec">
                        <h1 class="s-title">Share this Article</h1>
                        <!-- <div class="icons-sec flex gap-4">
                            <?php //echo do_shortcode("[Sassy_Social_Share]"); ?>
                        </div> -->
                        <div class="icons-sec flex gap-4">
                            <a class="inner-icon group" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post_id);?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="Share Link">
                                <svg class="group-hover:fill-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z" />
                                </svg>
                            </a>
                            <a class="inner-icon group" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($post_id);?>&title=<?php echo strip_tags(the_title_attribute()); ?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="Share Link">
                                <svg class="group-hover:fill-[#FFFFFF]" width="16" height="16" viewBox="0 0 16 16" fill="#101010" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 16H12.8V10.4008C12.8 8.86478 12.1224 8.00781 10.9072 8.00781C9.5848 8.00781 8.8 8.90078 8.8 10.4008V16H5.6V5.6H8.8V6.76953C8.8 6.76953 9.80399 5.00781 12.0664 5.00781C14.3296 5.00781 16 6.38888 16 9.24648V16ZM1.9536 3.93672C0.874401 3.93672 0 3.05517 0 1.96797C0 0.881569 0.874401 0 1.9536 0C3.032 0 3.9064 0.881569 3.9064 1.96797C3.9072 3.05517 3.032 3.93672 1.9536 3.93672ZM0 16H4V5.6H0V16Z" fill="" />
                                </svg>
                            </a>
                            <a class="inner-icon group group" href="http://twitter.com/intent/tweet?text=<?php echo strip_tags(the_title_attribute()); ?>&url=<?php echo get_permalink($post_id);?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="Share Link">
                                <svg class="group-hover:fill-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000" width="24" height="24">
                                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
                                </svg>
                            </a>
                            <a class="inner-icon group" href="https://api.whatsapp.com/send?text=<?php echo strip_tags(the_title_attribute()); ?> <?php echo get_permalink($post_id);?>" rel="noopener noreferrer nofollow" target="_blank" aria-label="Share Link">
                                <svg class="group-hover:fill-[#FFFFFF]" width="20" height="20" viewBox="0 0 19 24" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3933 18.2985C15.9255 18.2985 19 14.0364 19 8.3311C19 4.01828 15.4577 0 10.0755 0C3.37741 0 0 4.95401 0 9.08506C0 11.5865 0.917347 13.8119 2.88702 14.6413C3.20971 14.7772 3.49885 14.6457 3.59281 14.2773C3.65706 14.022 3.81245 13.3779 3.87993 13.11C3.9745 12.7452 3.93813 12.6174 3.67747 12.2993C3.11009 11.6077 2.748 10.7141 2.748 9.44693C2.748 5.77196 5.41215 2.48201 9.68852 2.48201C13.4733 2.48201 15.5543 4.86771 15.5543 8.05532C15.5543 12.2485 13.7556 15.7875 11.0845 15.7875C9.60911 15.7875 8.50607 14.5293 8.85927 12.9864C9.28218 11.1441 10.1042 9.1551 10.1042 7.82519C10.1042 6.63536 9.48485 5.64168 8.20258 5.64168C6.69461 5.64168 5.48368 7.25133 5.48368 9.40649C5.48368 10.7791 5.93407 11.7078 5.93407 11.7078C5.93407 11.7078 4.39094 18.4517 4.11998 19.6324C3.87428 20.7076 3.8375 21.8893 3.87205 22.8879C3.97531 23.7839 4.83406 24.5134 5.57905 23.5306C6.10278 22.667 6.66592 21.5764 6.95729 20.4833C7.13106 19.8365 7.9494 16.4858 7.9494 16.4858C8.4398 17.4497 9.87138 18.2985 11.3933 18.2985Z" fill="" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php $prev_post = get_previous_post(true);
                    $next_post = get_next_post(true);
                    if ( $next_post || $prev_post ) : ?>
                        <div class="post-sec">
                            <?php if ( ! empty( $prev_post ) ) : ?>
                                <div class="flex gap-x-4 md:w-1/2">
                                    <figure class="mb-0">
                                        <a href="<?php echo get_permalink( $prev_post ); ?>">
                                            <?php if ( has_post_thumbnail($prev_post->ID)) : ?>
                                                <?php echo get_the_post_thumbnail( $prev_post->ID, 'default-thumbnail', array( 'class' => 'content-img' ) );?>
                                            <?php else : ?>
                                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                                            <?php endif; ?>
                                        </a>
                                    </figure>
                                    <div class="content-detail">
                                        <a href="<?php echo get_permalink( $prev_post ); ?>">
                                            <p class="content-date">PREVIOUS POST</p>
                                            <h2 class="post-title"><?php echo get_the_title( $prev_post ); ?></h2>
                                        </a>
                                    </div>
                                </div>
                            <?php endif;
                            if ( ! empty( $next_post ) ) : ?>
                                <div class="flex gap-x-4 md:w-1/2">
                                    <figure class="mb-0">
                                        <a href="<?php echo get_permalink( $next_post ); ?>">
                                            <?php if ( has_post_thumbnail($next_post->ID)) : ?>
                                                <?php echo get_the_post_thumbnail( $next_post->ID, 'default-thumbnail', array( 'class' => 'content-img' ) );?>
                                            <?php else : ?>
                                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                                            <?php endif; ?>
                                        </a>
                                    </figure>
                                    <div class="content-detail">
                                        <a href="<?php echo get_permalink( $next_post ); ?>">
                                            <p class="content-date">NEXT POST</p>
                                            <h2 class="post-title"><?php echo get_the_title( $next_post ); ?></h2>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif;

                    if ($tags) { ?>
                        <div class="tag-sec my-4">
                            <h1 class="s-title">Tags</h1>
                            <ul class="tag-list-sec">
                                <?php foreach($tags as $tag) { ?>
                                    <li  class="flex">
                                        <a class="tag-list" href="<?php echo get_tag_link($tag->term_id); ?> " rel="tags"><?php echo $tag->name; ?></a>
                                    </li>
                                <?php } ?>
                                <!-- <li class="flex"><a href="" class="tag-list">Adventure games in Hyderabad</a></li>
                                <li class="flex"><a href="" class="tag-list">Best Gaming Zones in Hyderabad</a></li>
                                <li class="flex"><a href="" class="tag-list">Outdoor Games in Hyderabad</a></li>
                                <li class="flex"><a href="" class="tag-list">Fun zone Hyderabad </a></li> -->
                            </ul>
                        </div>
                    <?php } ?>

                    <!-- Author-card-->
                    <div class="author-card flex flex-col my-16 lg:flex-row gap-8 items-center p-4 lg:p-6  bg-[#F6F6F6]">
                        <div class="w-fit">
                            <a href="<?php echo get_author_posts_url($author_id); ?>">
                                <figure class="mb-0 relative">
                                    <img class="w-[6.5rem] h-[6.5rem] md:w-[9.5rem] md:h-[9.5rem] object-cover" src="<?php echo get_avatar_url($author_id); ?>" alt="author-img" />
                                </figure>
                            </a>
                        </div>
                        <div class="author-detail flex flex-col items-center lg:items-start lg:w-5/6">
                            <h1 class="text-[#101010] font-Merriweather font-bold text-[18px] lg:text-[22px] leading-5 lg:leading-6  tracking-[0.04em] mb-[0.6rem]"><?php the_author_posts_link(); ?></h1>
                            <h2 class="text-[#595959] leading-6 font-Ubuntu text-[16px] text-center lg:text-justify mb-2 lg:w-5/6">
                                <?php if(!empty($author_desc)) { ?>
                                    <?php echo strip_tags($author_desc); ?>
                                <?php } ?>
                            </h2>
                            <a class="font-Ubuntu text-[#101010] leading-6 text-[16px] text-center underline underline-offset-4" href="<?php echo get_author_posts_url($author_id); ?>">View all posts</a>
                        </div>
                    </div>

                    <!-- Form sec -->
                    <div class="comment-sec normal-case font-Ubuntu">
                        <?php comments_template(); ?>
                        <!-- <h1 class="text-base leading-8 text-[#281B17] uppercase font-medium">Leave a Reply</h1>
                        <p class="text-[#281B17] text-base leading-6 pt-4">Your email address will not be published. Required fields are marked. *</p>
                        <form class="flex flex-col pt-4">
                            <label class="label px-0 font-medium text-lg text-[#281B17]">Comment *</label>
                            <textarea aria-label="comment" class="outline-none p-2 border border-[#DEDEDE]" name="comment" cols="30" rows="10"></textarea>
                            <div class="info flex flex-col md:flex-row justify-between gap-2 md:gap-4 2xl:gap-6 w-full">
                                <div class="input-wrapper w-full">
                                    <label class="label px-0 font-medium text-lg text-[#281B17]">Name *</label>
                                    <input class="p-2 w-full border border-[#DEDEDE] outline-none" type="text" aria-label="name">
                                </div>
                                <div class="input-wrapper w-full">
                                    <label class="label px-0 font-medium text-lg text-[#281B17]">Email *</label>
                                    <input class="p-2 w-full border border-[#DEDEDE] outline-none" type="text" aria-label="email">
                                </div>
                                <div class="input-wrapper w-full">
                                    <label class="label px-0 font-medium text-lg text-[#281B17]">Website *</label>
                                    <input class="p-2 w-full border border-[#DEDEDE] outline-none" type="text" aria-label="website">
                                </div>
                            </div>
                            <div class="flex gap-2 mt-8">
                                <input aria-label="check" type="checkbox" required>
                                <p class="text-black text-base leading-6 font-medium">Save my name, email, and website in this browser for the next time I comment.</p>
                            </div>
                            <div class="mt-8">
                                <button class="form-btn">Post a Comment</button>
                            </div>
                        </form> -->
                    </div>

                </section>
            <?php endwhile; ?>
            <!-- sidebar-section -->
            <section class="sidebar-wrapper">
                <?php get_sidebar(); ?>
            </section>
        </div>

        <!-- Related POSTS section -->
        <?php $related = get_posts(array('category__in' => $cat_ID,
                                            'post_type' => 'post',
                                            'orderby' => 'rand',
                                            'post_status' => 'publish',
                                            'order'   => 'DESC',
                                            'posts_per_page' => 3,
                                            'post__not_in' => array($post_id) ));
        if ($related) : ?>
            <section class="latest-post-sec pt-24 pb-12 md:pb:24 lg:pb-40">
                <div class="container mx-auto">
                    <h1 class="title">Related Posts</h1>
                    <div class="main-card-sec">
                        <?php foreach ($related as $post) {
                            setup_postdata($post);
                            get_template_part('template-parts/content', 'default-card');
                        }
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>