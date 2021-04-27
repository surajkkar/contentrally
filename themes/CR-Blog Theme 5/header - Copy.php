<!DOCTYPE html>
<html lang="en">

  <?php $uri = $_SERVER['REQUEST_URI'];
      $new_url = explode("/", $uri);
      global $crally;
      $favicon = $crally['favicon']['url']; ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php if (strpos($uri, '/page/') !== false) { ?>
            <meta name=”robots” content=”nofollow” />
        <?php } ?>
        <link rel="icon" href="<?php echo $favicon; ?>" type="image/gif" sizes="16x16">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-fab.png" type="image/gif" sizes="16x16">

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
        
        <?php
            require_once 'libs/scssphp-1.0.4/scss.inc.php';
            use ScssPhp\ScssPhp\Compiler;

            function getCSS($files)
            {
            try {
                $scss = new Compiler();
                $scss->setImportPaths('css/');
                $scssContent = "";

                foreach ($files as $file) {            
                $scssContent .= file_get_contents($file);
                }
                //echo "/*".$scssContent."*/";
                $css = $scss->compile($scssContent);
                echo "<style class='from-scss'>" . $css . "</style>";
            } catch (\Exception $e) {
                echo "<style class='from-scss error'>" . $e . "</style>";
                echo "<style class='scss'>" . $scssContent . "</style>";
            }
            }
        ?>

        <?php wp_head(); ?>
    </head>
    
    <?php if(is_page('blog')) { ?>
        <body class="list">
    <?php } elseif(is_archive() || is_author() || is_search()) { ?>
        <body class="list blog archivepage">
    <?php } elseif(is_single() ) { ?>
        <body class="blog">
    <?php } else { ?>
    <body <?php body_class(); ?>>
    <?php } ?>

        <?php getCSS([
        get_template_directory_uri() . '/css/_mq.scss',
        get_template_directory_uri() . '/css/_variables.scss',
        get_template_directory_uri() . '/css/common.scss',
        get_template_directory_uri() . '/css/common-style.scss',
        get_template_directory_uri() . '/css/style.scss'
        ]); ?>

        <!-- ****************hedar sec****************** -->
        <header class="header-sec">

            <?php include('header-menu.php'); ?>
                
        </header>