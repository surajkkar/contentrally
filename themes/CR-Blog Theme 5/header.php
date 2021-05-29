<!DOCTYPE html>
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
    }

    global $crally;
    $favicon = $crally['favicon']['url']; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php /* if (strpos($uri, '/page/') !== false && strpos($uri, '/search/') == false) { ?>
            <meta name=”robots” content=”nofollow” />
        <?php } */ ?>
    <link rel="icon" href="<?php echo $favicon; ?>" type="image/gif" sizes="16x16">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-fab.png" type="image/gif" sizes="16x16">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />

    <?php wp_head(); ?>
    <meta property="og:image" content="<?php echo $favicon; ?>" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JM4LCL47PK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-JM4LCL47PK');
    </script>


</head>

<?php if (is_page('blog')) { ?>

    <body <?php body_class('list'); ?>>
    <?php } elseif (is_archive() || is_author() || is_search()) { ?>

        <body <?php body_class('list blog archivepage'); ?>>
        <?php } elseif (is_single()) { ?>

            <body <?php body_class('blog'); ?>>
            <?php } else { ?>

                <body <?php body_class(); ?>>
                <?php } ?>

                <!-- ****************mobile-bar******************* -->
                <nav class="mian-nav">
                    <div class="sidebar">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'top',
                            'container' => 'ul',
                        )); ?>
                        <button class="sidebarBtn" aria-label="Button to toggle Sidebar">
                            <span class=""></span>
                        </button>
                    </div>

                    <a class="logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo $crally['logo']['url']; ?>" alt="">
                    </a>

                    <!-- <a class="sharch" href="">login</a> -->
                </nav>
                <!-- ****************mobile-bar******************* -->


                <!-- ****************hedar sec****************** -->
                <header class="header-sec">
                    <?php include('header-menu-3.php'); ?>
                </header>