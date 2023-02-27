<?php /* Template Name: Contact Page Template */ ?>

<?php get_header(); 

while(have_posts()) : the_post(); ?>

<section class="contact-sec pb-12 md:pb:24 lg:pb-40">
    <div class="container mx-auto">
        <div class="about-main p-4 md:p-8 border-t-4 border-t-[#EC9A15] bg-[#FFFFFF] border border-[#E9E9E9]">
            <h1 class="about-title"><?php echo strip_tags(get_the_title()); ?></h1>
            <div class="contact">
                <?php the_content();
                echo do_shortcode('[contact-form-7 id="75" title="Contact form 1"]'); ?>
            </div>
            <!-- <h2 class="about-detail font-medium">We love hearing from our users!</h2>
            <p class="about-detail">Use the <a class=" underline underline-offset-4" href="">contact form</a> or email us to <a class=" underline underline-offset-4" href="">mashum.webmaster@gmail.com</a> for any Blogging queries, feedback, guest post requests, and advertisement. We would request you to fill in all the necessary details so that we can get in touch with you ASAP.</p> -->
            <!-- <form class="flex flex-col gap-6">
                <div class="form-detail w-full flex flex-col md:flex-row justify-between gap-6">
                    <input class="input-detail" type="text" placeholder="Your Name">
                    <input class="input-detail" type="text" placeholder="Your Website">
                </div>
                <input class="input-detail" type="text" placeholder="Subject">
                <textarea class="input-detail" name="Your Message" cols="80" rows="10" placeholder="Your Message"></textarea>
                <a class="w-full text-center p-6 bg-[#EC9A15] text-white text-2xl font-Ubuntu font-bold " href="">SEnD</a>
            </form> -->
        </div>
    </div>
</section>

<?php endwhile;

get_footer(); ?>