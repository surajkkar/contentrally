<?php get_header(); 

$author_id = get_queried_object_id();
$display_name = get_the_author_meta('display_name', $author_id);
$author_desc = get_the_author_meta('description', $author_id);
?>

<section class="author-page pb-12 md:pb:24 lg:pb-40">

    <div class="container mx-auto">
        <div class="main-wrapper">
            <section class="inner-wrapper lg:w-3/4 border-t-4  border-t-[#EC9A15]">
                <div class="author-wrapper border border-[#E9E9E9] p-4 md:p-8 bg-white mb-8">
                    <div class="author-card flex flex-col lg:flex-row gap-6 items-center lg:items-start p-4 lg:p-6 bg-[#F6F6F6] ">
                        <div class="w-fit">
                            <figure class="mb-0 relative">
                                <img class="w-[6.5rem] h-[6.5rem] md:w-[9.5rem] md:h-[9.5rem] object-cover" src="<?php echo get_avatar_url($author_id); ?>" alt="author-img" />
                            </figure>
                        </div>
                        <div class="author-detail flex flex-col items-center lg:items-start lg:w-5/6">
                            <h1 class="text-[#101010] font-Merriweather font-bold text-[18px] lg:text-[22px] leading-5 lg:leading-6  tracking-[0.04em] mb-[0.6rem]"><?php echo $display_name; ?></h1>
                            <h2 class="text-[#595959] leading-6 font-Ubuntu text-[16px] text-center lg:text-justify mb-2 lg:w-5/6">
                                <?php if(!empty($author_desc)) {
                                    echo strip_tags($author_desc);
                                } ?>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Card sec -->
                <div class="author-wrapper">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post();
                                get_template_part('template-parts/content', 'default-card');
                            endwhile; ?>
                        <?php else : ?>
                            <p class="inner-detail">Sorry, but "<capital style="text-transform: uppercase;"><?php echo $display_name; ?></capital>" has not published any posts.</p>
                        <?php endif; ?>
                        <!-- <div class="main-card group">
                            <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                                <img class="main-card-img" src="<?php //echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
                                <div class="card-overlay">
                                    <button class="card-cat">HEALTH & FITNESS</button>
                                </div>
                            </figure>
                            <div class="card-detail">
                                <h1 class="main-card-title">What Are Tarpenes? How Do They Work? – Cannabis Guide</h1>
                                <p class="main-card-desc">If you smoke pot (marijuana) and proclaim yourself to be a Rastafarian stoner, you probably know what are tarpenes. In case you are not, it’s time for you to get...</p>
                                <button class="flex items-center gap-2 group">
                                    <span class="read-btn">READ MORE</span>
                                    <svg class="svg-hov" width="27" height="12" viewBox="0 0 27 12" fill="#101010" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.5303 6.53033C26.8232 6.23744 26.8232 5.76256 26.5303 5.46967L21.7574 0.696699C21.4645 0.403806 20.9896 0.403806 20.6967 0.696699C20.4038 0.989593 20.4038 1.46447 20.6967 1.75736L24.9393 6L20.6967 10.2426C20.4038 10.5355 20.4038 11.0104 20.6967 11.3033C20.9896 11.5962 21.4645 11.5962 21.7574 11.3033L26.5303 6.53033ZM0 6.75H26V5.25H0V6.75Z" />
                                    </svg>
                                </button>
                            </div>
                        </div> -->

                    </div>

                    <!-- pagination -->
                    <div class="pagination">
                        <?php the_posts_pagination(array('mid_size' => 1,
                                                        'prev_text'          => _x('', 'previous set of Posts'),
                                                        'next_text'          => _x('', 'next set of Posts'),
                                                        'screen_reader_text' => '&nbsp;' )); ?>
                    </div>
                    <!-- <div class="pagination-sec flex gap-2 justify-center pt-16">
                        <span class="page-num">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z" />
                            </svg>
                        </span>
                        <span class="page-num active-page">1</span>
                        <span class="page-num">2</span>
                        <span class="page-num">3</span>
                        <span class="page-num">4</span>
                        <span class="page-num">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                            </svg>
                        </span>
                    </div> -->
                </div>
            </section>


            <!-- sidebar-section -->
            <section class="sidebar-wrapper">
                <?php get_sidebar(); ?>
            </section>


        </div>
    </div>
</section>

<?php get_footer(); ?>