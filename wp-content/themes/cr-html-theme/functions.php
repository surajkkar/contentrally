<?php
if(!defined('SMM_DIR')) define('SMM_DIR',get_template_directory());
if(!defined('SMM_URI')) define('SMM_URI',get_template_directory_uri());

add_action( 'after_setup_theme', 'smm_setup' );
if(!function_exists('smm_setup'))
{
	function smm_setup()
	{
		load_theme_textdomain( 'smm' );
		add_theme_support( 'automatic-feed-links' );		
		add_theme_support( 'title-tag' );		
		add_theme_support( 'custom-logo');		
		add_theme_support( 'post-thumbnails' );	
		
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		add_image_size('card-thumbnail', 600, 400, true);
				
		$GLOBALS['content_width'] = 900;
		
		register_nav_menus( array(
			'main_footer' => __( 'Main Footer Menu', 'smm' ),
			'category_footer' => __('Category Footer Menu', 'smm' ),
		) );
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
		) );		

		if (!current_user_can('administrator') && !is_admin()) {
		  show_admin_bar(false);
		}		

	}
}