<!doctype html>
<html lang="en">

<head>
    <?php global $uri;
    $uri = $_SERVER['REQUEST_URI'];
    $new_url = explode("/", $uri);
    if (strpos($uri, '/search/') !== false) {
        if (!empty($new_url[3]) && !empty($new_url[4])) {
            $searchurl = home_url() . '/' . $new_url[3] . '/' . $new_url[4] . '/?s=' . $new_url[2];
        } else {
            $searchurl = home_url() . '/?s=' . $new_url[2];
        } ?>
        <script>
            window.location.href = "<?php echo $searchurl ?>";
        </script>
    <?php
    } ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="description" content="Put your description here.">
  <link rel="icon" type="image/x-icon" href="<?php //echo get_site_icon_url(); ?>">
  <link rel="stylesheet" href="<?php //echo get_stylesheet_uri(); ?>" media="all" /> -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> -->
  <?php wp_head(); ?>
    
  <meta name="spr-verification" content="85fc792d2fa829q" />
  <meta name="0221af765b4626efa6a8c90d604adf67" content="">
  <meta name="linkdoozer-verification" content="73d3c28b-b0d1-4a82-ae57-3893391988e5"/>
  <meta name='linkatomic-verify-code' content='3babd2247bc6dff144bc44f6999cbe9f' />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JM4LCL47PK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-JM4LCL47PK');
  </script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9502972669695969" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156688813-15"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-156688813-15');
	</script>

</head>

<body <?php body_class(); ?>>
  <header class="relative">
    <nav class="navbar">
      <div class="container mx-auto ">
        <div class="w-full flex justify-between items-center py-8 relative">
          <div class="navbar-start">
            <a href="<?php echo home_url(); ?>">
              <figure class="rounded-none m-0 w-48 h-7">
                <?php if (function_exists('logo_url')) { ?>
                  <img class="w-full h-full object-cover" src="<?php logo_url(); ?>" alt="logo" />
                <?php } else { ?>
                  <span class="w-full h-full object-cover"><?php echo get_bloginfo( 'name' ); ?></span>
                <?php } ?>
              </figure>
            </a>
            <!-- <a href="#">
              <figure class="rounded-none m-0 w-48 h-7">
                <img class="w-full h-full object-cover" src="<?php //echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo" />
              </figure>
            </a> -->
          </div>
          <?php wp_nav_menu( array('theme_location'=>'header-menu',
                                    'sort_column' => 'menu_order',
                                    'container_class' => 'navbar-center hidden lg:flex',
                                    'menu_class' => 'menu menu-horizontal gap-x-10 relative text-lg',
                                    'add_li_class' => '',
                                    'add_anchor_class' => 'navlinks' )); ?>
          <!-- <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal gap-x-10 relative text-lg">
              <li>
                <a href="#" class="navlinks">
                  Business
                </a>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Entertainment
                </a>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Lifestyle
                </a>
                <ul class="center-dropdown">
                  <li>
                    <a href="#" class="dropdown-options">Submenu 1</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-options">Submenu 2</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-options">Submenu 3</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-options">Submenu 4</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-options">Submenu 5</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Social Media
                </a>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Society
                </a>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Technology
                </a>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Google
                </a>
              </li>
              <li>
                <a href="#" class="navlinks">
                  Reviews
                </a>
              </li>
            </ul>
          </div> -->

          <div class="navbar-end w-[35%] flex justify-end items-center ">
            <button onclick="document.getElementById('myModal').style.display='block'" class="search-btn" aria-label="search-button">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 2.25C4.60051 2.25 2.25 4.60051 2.25 7.5C2.25 10.3995 4.60051 12.75 7.5 12.75C8.94998 12.75 10.2614 12.1632 11.2123 11.2123C12.1632 10.2614 12.75 8.94998 12.75 7.5C12.75 4.60051 10.3995 2.25 7.5 2.25ZM0.75 7.5C0.75 3.77208 3.77208 0.75 7.5 0.75C11.228 0.75 14.25 3.77208 14.25 7.5C14.25 9.09345 13.6971 10.5588 12.7739 11.7132L17.0303 15.9697C17.3232 16.2626 17.3232 16.7374 17.0303 17.0303C16.7374 17.3232 16.2626 17.3232 15.9697 17.0303L11.7132 12.7739C10.5588 13.6971 9.09345 14.25 7.5 14.25C3.77208 14.25 0.75 11.228 0.75 7.5Z" fill="#2E2E2E" />
              </svg>
            </button>
            <!-- Hamburger Dropdown -->
            <div class="dropdown flex lg:hidden">
              <label tabindex="0" class="btn btn-ghost active:bg-transparent hover:bg-transparent ">
                <svg width="20" height="20" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26.6 14.5821H1.4C1.0287 14.5821 0.672602 14.4154 0.41005 14.1188C0.1475 13.8222 0 13.4198 0 13.0004C0 12.5809 0.1475 12.1785 0.41005 11.8819C0.672602 11.5853 1.0287 11.4186 1.4 11.4186H26.6C26.9713 11.4186 27.3274 11.5853 27.5899 11.8819C27.8524 12.1785 28 12.5809 28 13.0004C28 13.4198 27.8524 13.8222 27.5899 14.1188C27.3274 14.4154 26.9713 14.5821 26.6 14.5821ZM26.6 3.50992H1.4C1.0287 3.50992 0.672602 3.34327 0.41005 3.04664C0.1475 2.75 0 2.34769 0 1.92818C0 1.50867 0.1475 1.10635 0.41005 0.809712C0.672602 0.513088 1.0287 0.346436 1.4 0.346436H26.6C26.9713 0.346436 27.3274 0.513088 27.5899 0.809712C27.8524 1.10635 28 1.50867 28 1.92818C28 2.34769 27.8524 2.75 27.5899 3.04664C27.3274 3.34327 26.9713 3.50992 26.6 3.50992ZM26.6 25.6543H1.4C1.0287 25.6543 0.672602 25.4876 0.41005 25.191C0.1475 24.8944 0 24.492 0 24.0726C0 23.6531 0.1475 23.2507 0.41005 22.9541C0.672602 22.6575 1.0287 22.4908 1.4 22.4908H26.6C26.9713 22.4908 27.3274 22.6575 27.5899 22.9541C27.8524 23.2507 28 23.6531 28 24.0726C28 24.492 27.8524 24.8944 27.5899 25.191C27.3274 25.4876 26.9713 25.6543 26.6 25.6543Z" fill="#000000" />
                </svg>
              </label>
              <?php wp_nav_menu( array('theme_location'=>'header-menu',
                                    'sort_column' => 'menu_order',
                                    'container_class' => '',
                                    'menu_class' => 'menu menu-compact dropdown-content',
                                    'add_li_class' => '',
                                    'add_anchor_class' => 'ham-links' )); ?>
              <!-- <ul tabindex="0" class="menu menu-compact dropdown-content">
                <li>
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Business
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 3</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 4</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 5</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 6</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Entertainment
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 3</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 4</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Lifestyle
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Social Media
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 3</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 4</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 5</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Society
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Technology
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Google
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                  </ul>
                </li>
                <li tabindex="0">
                  <a href="#" class="ham-links">
                    <svg class="fill-current rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                    </svg>
                    Reviews
                  </a>
                  <ul class="submenu-dropdown">
                    <li>
                      <a href="#" class="dropdown-options">Submenu 1</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-options">Submenu 2</a>
                    </li>
                  </ul>
                </li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>

    </nav>
  </header>


  <!-- Modal start -->
  <div id="myModal" class="h-full" style="width:100% !important; display:none">

    <div class="modal-content">
      <div class="container mx-auto flex justify-center items-center">
        <div class="modal-main">

          <div class="modal-wrapper">
            <div class="toggle-cut text-[#6D6D6D] absolute top-9 right-5 cursor-pointer text-lg">
              <span onclick="document.getElementById('myModal').style.display='none'" class="close ">
                <svg class="hover:fill-black hover:transition-all" width="22" height="22" viewBox="0 0 22 22" fill="#B8B8B8" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.22387 1.0321L10.9999 8.8081L18.7439 1.0641C19.0181 0.772258 19.3994 0.604738 19.7999 0.600098C20.6835 0.600098 21.3999 1.31642 21.3999 2.2001C21.4074 2.59658 21.2511 2.97866 20.9679 3.2561L13.1439 11.0001L20.9679 18.8241C21.2315 19.082 21.3863 19.4315 21.3999 19.8001C21.3999 20.6838 20.6835 21.4001 19.7999 21.4001C19.3875 21.4172 18.9871 21.2604 18.6959 20.9681L10.9999 13.1921L3.23987 20.9521C2.96675 21.2342 2.59235 21.3955 2.19987 21.4001C1.31619 21.4001 0.599869 20.6838 0.599869 19.8001C0.592349 19.4036 0.748669 19.0215 1.03187 18.7441L8.85587 11.0001L1.03187 3.1761C0.768189 2.91818 0.613469 2.56874 0.599869 2.2001C0.599869 1.31642 1.31619 0.600098 2.19987 0.600098C2.58451 0.604738 2.95203 0.759778 3.22387 1.0321Z" fill="" />
                </svg>
              </span>
            </div>
            <div class="input-sec">
              <?php get_search_form(); ?>
              <!-- <input type="text" id="default-search" class="input-field" placeholder="Type and press enter" required>
              <svg class="absolute top-4 left-4" width="16" height="20" viewBox="0 0 25 25" fill="#B8B8B8" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.1961 21.1972L18.4983 15.499C19.4664 13.9578 20.0283 12.1361 20.0283 10.1812C20.0283 4.6503 15.5446 0.167236 10.0139 0.167236C4.48328 0.167236 0 4.6503 0 10.1812C0 15.7122 4.48307 20.1949 10.0139 20.1949C12.1414 20.1949 14.1121 19.5297 15.7336 18.3995L21.3636 24.0299C21.7548 24.4207 22.2676 24.6154 22.7798 24.6154C23.2927 24.6154 23.8049 24.4207 24.1967 24.0299C24.9785 23.2473 24.9785 21.9796 24.1961 21.1972ZM10.0139 16.9505C6.27571 16.9505 3.24499 13.92 3.24499 10.1816C3.24499 6.44316 6.27571 3.41244 10.0139 3.41244C13.7524 3.41244 16.7829 6.44316 16.7829 10.1816C16.7829 13.92 13.7524 16.9505 10.0139 16.9505Z" fill="" />
              </svg> -->
            </div>

            <?php $recent = array('post_type' => 'post',
                                  'post_status' => 'publish',
                                  'order'   => 'DESC',
                                  'post__not_in' => array($post->ID),
                                  'posts_per_page' => 12 );
            $recent_posts = new WP_Query( $recent ); ?>

            <div id="datafetch" class="modal-body">

              <?php if (!isset($search) || trim($search) == '') :
                  if ( $recent_posts->have_posts() ) :
                      while ( $recent_posts->have_posts() ) : $recent_posts->the_post();

                          get_template_part('template-parts/content', 'search-card');

                      endwhile;
                  else : ?>
                      <p class="inner-detail">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                  <?php endif;
              endif; ?>

            </div>
            <!-- <div id="datafetch" class="modal-body">

              <div class="right-content-card">
                <figure class="mb-0">
                  <img class="content-img" src="<?php //echo get_template_directory_uri(); ?>/images/content-img.jpg" alt="slider-img" />
                </figure>
                <div class="content-detail">
                  <h2 class="content-title">Benefits Of Long-Term Investment In The Stock Market 2022</h2>
                  <p class="content-date">By Summona, 10 June 2021</p>
                </div>
              </div>

            </div> -->
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- Modal End -->

  <main>