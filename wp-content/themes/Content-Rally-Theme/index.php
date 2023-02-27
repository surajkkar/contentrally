<?php
// There is nothing output here because block themes do not use php templates.
// There is a core ticket discussing removing this requirement for block themes:
// https://core.trac.wordpress.org/ticket/54272.

get_header();

while(have_posts()) : the_post();?>

    <section class="about-sec pb-12 md:pb:24 lg:pb-40">
        <div class="container mx-auto">
            <div class="about-main p-4 md:p-8 border-t-4 border-t-[#EC9A15] bg-[#FFFFFF] border border-[#E9E9E9]">
                <h1 class="about-title"><?php echo strip_tags(get_the_title()); ?></h1>
                <div class="about"><?php the_content(); ?></div>
            </div>
        </div>
    </section>

<?php endwhile;

get_footer(); ?>