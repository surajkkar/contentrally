<?php
ob_start();
if(!defined('CR_DIR')) define('CR_DIR',get_template_directory());
if(!defined('CR_URI')) define('CR_URI',get_template_directory_uri());


if ( file_exists( CR_DIR.'/includes/config.php') ) {
	require_once(CR_DIR.'/includes/config.php');
}
if ( file_exists( CR_DIR.'/includes/shortcodes.php') ) {
	require_once(CR_DIR.'/includes/shortcodes.php');
}
if ( file_exists( CR_DIR.'/includes/theme-hooks.php') ) {
	require_once(CR_DIR.'/includes/theme-hooks.php');
}
if ( file_exists( CR_DIR.'/includes/metabox/init.php' ) ) {
	require_once( CR_DIR.'/includes/metabox/init.php');
}
if ( file_exists( CR_DIR.'/includes/metabox.php') ) {
	require_once(CR_DIR.'/includes/metabox.php');
}

/********* Theme Setup **************/
/*if ( file_exists( CR_DIR.'/theme-setup.php') ) {
	require_once(CR_DIR.'/theme-setup.php');
} */

add_action( 'after_setup_theme', 'bstelar_setup' );
if(!function_exists('bstelar_setup'))
{
	function bstelar_setup()
	{
		load_theme_textdomain( 'bstelar' );
		add_theme_support( 'automatic-feed-links' );		
		add_theme_support( 'title-tag' );		
		add_theme_support( 'custom-logo');		
		add_theme_support( 'post-thumbnails' );

		add_image_size('first-thumbnail', 280, 200, true);
		add_image_size('blog-thumbnail', 280, 200, true);
		add_image_size('second-thumbnail', 340, 300, true);
		add_image_size('long-thumbnail', 600, 400, true);
		add_image_size('medium-thumbnail', 500, 300, true);
		add_image_size('main-thumbnail', 220, 120, true);
		add_image_size('sidebar-post-thumbnail', 100, 80, true);
		add_image_size('related-thumbnail', 350, 150, true);
		add_image_size('slider-thumbnail', 800, 500, true);
		add_image_size('singlepage-thumbnail', 1200, 300, true);
		
		$GLOBALS['content_width'] = 900;
		
		register_nav_menus( array(
			'top'    => __( 'Primary Menu', 'bstelar' ),
			'footer_links' => __( 'Footer Menu', 'bstelar' ),
			'second_footer' => __('First Categories', 'bstelar' ),
			'third_footer' => __('Second Categories', 'bstelar' ),
			'fourth_footer' => __('Fourth Menu', 'bstelar' ),
		) );
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
		) );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		

		if (!current_user_can('administrator') && !is_admin()) {
		  show_admin_bar(false);
		}

	}
}




add_action( 'wp_enqueue_scripts', 'RWB_front_scripts' );
if(!function_exists('RWB_front_scripts')) {
	function RWB_front_scripts(){
		global $RWB;
		$version = '5.1.1';
		
		wp_enqueue_style( 'default-css', CR_URI.'/style.css', array(), $version,'all');
		wp_enqueue_style( 'megamenu-css', CR_URI.'/css/megamenu-style.css', array(), $version,'all');
		wp_enqueue_style( 'slick-css', CR_URI.'/css/slick.min.css', array(), $version,'all');
		
		
		wp_enqueue_style( 'common-css', CR_URI.'/css/common-style.css', array(), $version,'all');
		wp_enqueue_style( 'theme-style-css', CR_URI.'/css/style.css', array(), $version,'all');
		
		wp_enqueue_script('jquery-js', CR_URI.'/js/jquery.min.js',$version, false, true );
		wp_enqueue_script('propper-js', CR_URI.'/js/popper.min.js',$version, false, true );
		wp_enqueue_script('bootstrap-js', CR_URI.'/js/bootstrap.min.js',$version, false, true );
		wp_enqueue_script('slick-js', CR_URI.'/js/slick.min.js',$version, false, true );

		wp_enqueue_script('script-js', CR_URI.'/js/script.js',$version, false, true );

    }
}

/************************ Widget area ***********************/
add_action( 'widgets_init', 'bstelar_widgets_init' );
if(!function_exists('bstelar_widgets_init'))
{
	function bstelar_widgets_init(){
		register_sidebar( array(
			'name'          => __( 'General Sidebar', 'RWB' ),
			'id'            => 'general_sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'RWB' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
	}
}
/************************************/


add_filter('wpseo_robots', 'yoast_no_home_noindex', 999);
function yoast_no_home_noindex($string= "") {
	$uri = $_SERVER['REQUEST_URI'];
    if (strpos($uri, '/page/') !== false || strpos($uri, '/search/') !== false) {
        $string= "noindex,nofollow";
    }
    return $string;
}
?>