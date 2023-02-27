<?php /* Template Name: About Page Template */ ?>

<?php get_header();

while(have_posts()) : the_post();?>

    <section class="about-sec pb-12 md:pb:24 lg:pb-40">
        <div class="container mx-auto">
            <div class="about-main p-4 md:p-8 border-t-4 border-t-[#EC9A15] bg-[#FFFFFF] border border-[#E9E9E9]">
                <h1 class="about-title"><?php echo strip_tags(get_the_title()); ?></h1>
                <div class="about"><?php the_content(); ?></div>
                <!-- <ul class="about-ul-sec">
                    <li>
                        <a href="" class="about-list">Home Loans and other Finances</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Mortgages and Interest Rates</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Home Renovation and Improvement</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Trends in Buying and Selling Homes</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Real Estate News</a>
                    </li>
                </ul>
                <p class="about-detail">Welcome to Content Rally – A platform of writers, authors, engaged readers and bloggers to read, write and support stories or ideas. Content Rally wrapped around an online publication where you can publish your own intellectuals. It is a publishing platform designed to make great stories by content creators.</p>
                <h2 class="about-title-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <h3 class="about-title-h3">Specialised SEO Services for Real Estate Companies and Agents</h3>
                <h4 class="about-title-h4">About Mashum Mollah:))</h4>
                <h5 class="about-title-h5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                <ol class="about-ol-sec">
                    <li class="list-decimal">
                        <a href="" class="about-list">Home Loans and other Finances</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Mortgages and Interest Rates</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Home Renovation and Improvement</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Trends in Buying and Selling Homes</a>
                    </li>
                    <li>
                        <a href="" class="about-list">Real Estate News</a>
                    </li>
                </ol> -->
            </div>
        </div>
    </section>

<?php endwhile;

get_footer(); ?>