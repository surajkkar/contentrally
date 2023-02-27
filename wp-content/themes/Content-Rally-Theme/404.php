<?php wp_head(); ?>

<section class="error-404 px-4 md:px-0  bg-[#FFFFFF]">
    <div class="container mx-auto">
        <div class="main flex justify-center items-center h-[100vh]">
            <div class="main-content flex flex-col items-center justify-center">
                <figure class="lg:w-[56rem] lg:h-[34rem] object-cover">
                    <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/error_1.svg" alt="card-image" />
                </figure>
                <p class="text-xl md:text-[30px] leading-[34px] text-[#5B5B5B] font-Ubuntu py-4">PAGE NOT FOUND</p>
                <div class="button-sec">
                    <button class=" border-[1.5px] text-[19px] leading-5 text-[#EC9A15] font-Ubuntu px-10 py-3 md:mt-8 border-[#EC9A15]">Go to homepage</button>
                </div>
            </div>
        </div>
    </div>
</section>
