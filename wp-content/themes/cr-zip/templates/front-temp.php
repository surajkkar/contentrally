<?php /* Template Name: Front Page Template */ ?>

<?php get_header(); ?>

<!-- Slider and scrollbar -->
<section class="slider-sec">
    <div class="container mx-auto">
        <div class="hero-sec">
            <div class="swiper mySwiper order-1 lg:order-2 w-full lg:w-1/2 relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="relative h-[24rem] md:h-[32rem] lg:h-[36rem]">
                            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/slider-img1.jpg" alt="slider-img" />
                            <div class="slider-overlay">
                                <button class="card-cat">HEALTH & FITNESS</button>
                                <h1 class="slider-title">Most Popular Gaming Zones In Hyderabad That Attract Most People</h1>
                            </div>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="relative h-[24rem] md:h-[32rem] lg:h-[36rem]">
                            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/slider-img2.jpg" alt="slider-img" />
                            <div class="slider-overlay">
                                <button class="card-cat">HEALTH & FITNESS</button>
                                <h1 class="slider-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, aliquid.</h1>
                            </div>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="relative h-[24rem] md:h-[32rem] lg:h-[36rem]">
                            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/slider-img3.jpg" alt="slider-img" />
                            <div class="slider-overlay">
                                <button class="card-cat">HEALTH & FITNESS</button>
                                <h1 class="slider-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, inventore? Sequi, aperiam.</h1>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="arrow">
                    <div class="right">
                        <svg width="14" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.828 6.99999L7.778 11.95L6.364 13.364L0 6.99999L6.364 0.635986L7.778 2.04999L2.828 6.99999Z" fill="black" />
                        </svg>
                    </div>
                    <div class="left">
                        <svg width="14" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.17266 6.99974L0.222656 2.04974L1.63666 0.635742L8.00066 6.99974L1.63666 13.3637L0.222656 11.9497L5.17266 6.99974Z" fill="black" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="content-card-sec order-2 hidden lg:flex flex-col lg:order-1 md:w-1/2 lg:w-1/4">
                <h1 class="left-card-title">Latest Post</h1>
                <div class="left-content style-4">
                    <div class="left-content-card">
                        <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                    <div class="left-content-card">
                        <h2 class="content-title">5 Reasons Students Need Technology In The Classroom 2022</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                    <div class="left-content-card">
                        <h2 class="content-title">Las Vegas Electricians Share Fun Lighting Ideas for Your Home</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                    <div class="left-content-card">
                        <h2 class="content-title">Is Clothing/Shoe/Accessory Stores A Good Career Path 2022</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                    <div class="left-content-card">
                        <h2 class="content-title">7 Tips To Get Started On Your First Virtual Meeting</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                    <div class="left-content-card">
                        <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                    <div class="left-content-card">
                        <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                        <p class="content-date">By Summona, 10 June 2021</p>
                    </div>
                </div>
            </div>
            <div class="content-card-sec order-2 hidden lg:flex flex-col lg:order-3 md:w-1/2 lg:w-1/4">
                <h1 class="left-card-title">Popular Post</h1>
                <div class="right-content style-4">
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                    <div class="right-content-card">
                        <figure class="mb-0">
                            <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                        </figure>
                        <div class="content-detail">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" flex flex-col md:flex-row gap-8 lg:hidden order-1 ">
                <div class="content-card-sec md:w-1/2 lg:w-1/4">
                    <h1 class="left-card-title">Latest Post</h1>
                    <div class="left-content style-4">
                        <div class="left-content-card">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                        <div class="left-content-card">
                            <h2 class="content-title">5 Reasons Students Need Technology In The Classroom 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                        <div class="left-content-card">
                            <h2 class="content-title">Las Vegas Electricians Share Fun Lighting Ideas for Your Home</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                        <div class="left-content-card">
                            <h2 class="content-title">Is Clothing/Shoe/Accessory Stores A Good Career Path 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                        <div class="left-content-card">
                            <h2 class="content-title">7 Tips To Get Started On Your First Virtual Meeting</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                        <div class="left-content-card">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                        <div class="left-content-card">
                            <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                            <p class="content-date">By Summona, 10 June 2021</p>
                        </div>
                    </div>
                </div>
                <div class="content-card-sec md:w-1/2 lg:w-1/4">
                    <h1 class="left-card-title">Popular Post</h1>
                    <div class="right-content style-4">
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                        <div class="right-content-card">
                            <figure class="mb-0">
                                <img class="content-img" src="<?php echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                            </figure>
                            <div class="content-detail">
                                <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                                <p class="content-date">By Summona, 10 June 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</section>

<!-- Business Section -->
<section class="business-sec py-24">
    <div class="container mx-auto">
        <h1 class="title">Business</h1>
        <div class="upper-card-sec">
            <figure class="big-card">
                <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/card-img1.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="card-title">14 Reasons a Fujifilm digital camera is the best choice!?</h1>
                </div>
            </figure>
            <div class="small-card-sec">
                <figure class="w-full h-[20rem] mb-0 relative">
                    <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/card-img2.jpg" alt="slider-img" />
                    <div class="card-overlay">
                        <button class="card-cat">HEALTH & FITNESS</button>
                        <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                    </div>
                </figure>
                <figure class="w-full h-[20rem] mb-0 relative">
                    <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/card-img3.jpg" alt="slider-img" />
                    <div class="card-overlay">
                        <button class="card-cat">HEALTH & FITNESS</button>
                        <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                    </div>
                </figure>
            </div>
        </div>
        <div class="lower-card-sec">
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img4.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img5.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img6.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
        </div>
        <div class="btn-sec">
            <button class="c-button">View all</button>
        </div>
    </div>
</section>

<!-- Entertainment Section -->
<section class="entertainment-sec pb-24">
    <div class="container mx-auto">
        <h1 class="title">Entertainment</h1>
        <div class="main-card-sec">
            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img8.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img9.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img8.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img9.jpg" alt="slider-img" />
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
            </div>
        </div>
        <div class="btn-sec">
            <button class="c-button">View all</button>
        </div>
    </div>
</section>

<!-- Trending post section -->
<section class="trending-sec bg-[#FDE9C9] pt-24 pb-24">
    <div class="container mx-auto">
        <h1 class="title">Trending Post</h1>
        <div class="lower-card-sec">
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img4.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img5.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img6.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img4.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img5.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
            <figure class="w-full h-[28rem] mb-0 relative group overflow-hidden">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img6.jpg" alt="slider-img" />
                <div class="card-overlay">
                    <button class="card-cat">HEALTH & FITNESS</button>
                    <h1 class="s-card-title">Things to Consider When Installing Sports Facility Fencing</h1>
                </div>
            </figure>
        </div>
        <div class="btn-sec">
            <button class="c-button">View all</button>
        </div>
    </div>
</section>

<!-- Lifestyle section -->
<section class="lifestyle-sec pt-24">
    <div class="container mx-auto">
        <h1 class="title">Lifestyle</h1>
        <div class="main-card-sec">
            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img8.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img9.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img7.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img8.jpg" alt="slider-img" />
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
            </div>

            <div class="main-card group">
                <figure class="w-full h-[21rem] mb-0 relative overflow-hidden">
                    <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/card-img9.jpg" alt="slider-img" />
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
            </div>
        </div>
        <div class="btn-sec">
            <button class="c-button">View all</button>
        </div>
    </div>
</section>

<!-- Other category section  -->
<section class="other-category-sec pt-24 pb-12 md:pb:24 lg:pb-40">
    <div class="container mx-auto">
        <h1 class="title">Other Categories</h1>
        <div class="other-category">
            <figure class="mb-0 h-[21.8rem] relative overflow-hidden group">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/cat-img1.jpg" alt="other-img" />
                <div class="counter-overlay">
                    <h1 class="counter-count">16+</h1>
                    <p class="counter-content">Youtube</p>
                </div>
            </figure>
            <figure class="mb-0 h-[21.8rem] relative overflow-hidden group">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/cat-img2.jpg" alt="other-img" />
                <div class="counter-overlay">
                    <h1 class="counter-count">6+</h1>
                    <p class="counter-content">Music</p>
                </div>
            </figure>
            <figure class="mb-0 h-[21.8rem] relative overflow-hidden group">
                <img class="main-card-img" src="<?php echo get_template_directory_uri(); ?>/images/cat-img3.jpg" alt="other-img" />
                <div class="counter-overlay">
                    <h1 class="counter-count">23+</h1>
                    <p class="counter-content">Technology</p>
                </div>
            </figure>
        </div>
    </div>
</section>
<?php get_footer(); ?>