<?php
if(!defined('CR_DIR')) define('CR_DIR',get_template_directory());
if(!defined('CR_URI')) define('CR_URI',get_template_directory_uri());

add_action( 'after_setup_theme', 'cr_setup' );
if(!function_exists('cr_setup'))
{
	function cr_setup()
	{
		load_theme_textdomain( 'cr' );
		add_theme_support( 'automatic-feed-links' );		
		add_theme_support( 'title-tag' );		
		add_theme_support( 'custom-logo');		
		add_theme_support( 'post-thumbnails' );	
		
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		add_image_size('search-thumbnail', 600, 400, true);
		add_image_size('default-thumbnail', 600, 400, true);
		add_image_size('trending-thumbnail', 600, 400, true);

		$GLOBALS['content_width'] = 900;
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
		) );		

		if (!current_user_can('administrator') && !is_admin()) {
		  show_admin_bar(false);
		}
		
		add_action( 'init', 'register_my_menus' );
		function register_my_menus() {
			register_nav_menus(
				array(
					'header-menu' => __( 'Header Menu' ),
					'category-menu' => __( 'Category Menu' ),
					'useful-menu' => __( 'Useful Menu' ),
				)
			);
		}

	}
}



// Check and Add Favicon
function add_favicon() {
	if (!has_site_icon()  && !is_customize_preview() ) {
		$favicon_url = get_stylesheet_directory_uri() . '/images/favicon.png';
		echo '<link rel="icon" type="image/gif" href="' . $favicon_url . '" />';
	}else {
		echo '<link rel="icon" type="image/gif" href="' . wp_get_attachment_image_url(get_option('site_icon'), 'full') . '">';
	}
}
add_action('wp_head', 'add_favicon');
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');



// Check and Call Logo
function logo_url() {
	if (has_custom_logo() && function_exists( 'the_custom_logo' )) {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$custom_logo_url = $custom_logo_data[0];
		echo esc_url( $custom_logo_url );
	}else {
		$logo_url = get_stylesheet_directory_uri() . '/images/logo.svg';
		echo $logo_url;
	}
}



// Add Class to Menu li
function add_additional_class_on_li($classes, $item, $args) {
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}	
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3); //Add Class To Menu	



// Add Class to Menu anchor
function add_additional_class_on_anchor($classes, $item, $args) {

	if (isset($args->add_anchor_class)) {
		$classes['class'] = $args->add_anchor_class;
	}

	return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_anchor', 1, 3);



// To Enqueue Script and Style
add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );
function my_plugin_assets() {
	$ver = '3.6.1' ;

	wp_enqueue_script( 'swiper-bundle.min', get_template_directory_uri() . '/resources/js/swiper-bundle.min.js', array('jquery'), $ver, true );
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/resources/js/jquery.min.js', array('jquery'), $ver, true );
	wp_enqueue_script('themeScripts', get_template_directory_uri() .'/resources/js/themeScripts.js',  array('jquery'), $ver, true);

	wp_enqueue_style( 'style', get_stylesheet_uri(), false, '', 'all');
	wp_enqueue_style('swiper-bundle.min', get_template_directory_uri() .'/resources/css/swiper-bundle.min.css', $ver, 'all');
}



// Add Custom Field in General Settings for Social Links
function social() {  
	add_settings_section(  
		'social_links', // Section ID 
		'Social Links', // Section Title
		'social_callback', // Callback
		'general' // What Page?  This makes the section show up on the General Settings Page
	);
		
	add_settings_field( // Option 1
		'facebook', // Option ID
		'Facebook', // Label
		'url_callback', // !important - This is where the args go!
		'general', // Page it will be displayed (General Settings)
		'social_links', // Name of our section
		array( // The $args
			'facebook' // Should match Option ID
		)  
	); 
		
	add_settings_field( // Option 2
		'twitter', // Option ID
		'Twitter', // Label
		'url_callback', // !important - This is where the args go!
		'general', // Page it will be displayed
		'social_links', // Name of our section (General Settings)
		array( // The $args
			'twitter' // Should match Option ID
		)  
	); 

	add_settings_field( // Option 3
		'linkedin', // Option ID
		'LinkedIn', // Label
		'url_callback', // !important - This is where the args go!
		'general', // Page it will be displayed
		'social_links', // Name of our section (General Settings)
		array( // The $args
			'linkedin' // Should match Option ID
		)
	);
		
	register_setting('general','facebook', 'esc_attr');
	register_setting('general','twitter', 'esc_attr');
	register_setting('general','linkedin', 'esc_attr');
}
add_action('admin_init', 'social'); //Enable Social Links Under Settings

function social_callback() { // Section Callback
	echo '<p>Add Your Social Media Links Below</p>';  
}
	
function url_callback($args) {  // Textbox Callback
	$option = get_option($args[0]);
	echo '<input type="url" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}



// Add Custom Field in General Settings for Footer Content 
function footer_content() {  
	add_settings_section(  
		'footer_content', // Section ID 
		'Footer Content', // Section Title
		'footer_content_callback', // Callback
		'general' // What Page?  This makes the section show up on the General Settings Page
	);
		
	add_settings_field( // Option 1
		'text', // Option ID
		'Text', // Label
		'text_callback', // !important - This is where the args go!
		'general', // Page it will be displayed (General Settings)
		'footer_content', // Name of our section
		array( // The $args
			'text' // Should match Option ID
		)  
	);
		
	register_setting('general','text', 'esc_attr');

}
add_action('admin_init', 'footer_content'); //Enable Footer Text in Pages

function footer_content_callback() { // Section Callback
	echo '<p>Add Your Footer Text Below</p>';  
}
	
function text_callback($argu) {  // Textbox Callback
	$text = get_option($argu[0]);
	echo '<textarea rows="4" cols="50" type="text" name="'. $argu[0] .'" id="'. $argu[0] .'">' . $text . '</textarea>';
}



// Add Image Field in Category Section
add_action( 'admin_init', 'register_setting_options' );
add_action( 'admin_enqueue_scripts', 'admin_scripts' );
function admin_scripts(){
	wp_enqueue_media();
}
function register_setting_options(){
	register_setting( 'settings_group', 'taxonomy' );
}

add_filter('manage_edit-category_columns', 'category_columns_header' );
add_filter('manage_category_custom_column', 'category_columns_content_category', 10, 3 );
function category_columns_header( $defaults ){
	$defaults['featured_image']  = __('Featured Image', 'category-featured-image' );
	return $defaults;
}
function category_columns_content_category( $columns, $column, $id ){
	if ( 'featured_image' === $column ) {
		$imageID = get_term_meta( $id, 'tax_image_id', true );
		$image_url = get_featured_image_url( $id );
		$columns .= '<img data-id="'.$imageID.'" src="' . esc_url( $image_url ) . '" alt="' . esc_attr__( 'full', 'category-featured-image' ) . '" class="image" height="48" width="48" />';
	}
	return $columns;
}

add_action('category_edit_form_fields', 'edit_featured_category_field', 10, 2);
add_action('category_add_form_fields', 'featured_category_field', 10, 2);
function featured_category_field(){
	?>
	<div class="form-field taxonomy_featured_image">
		<label><?php _e( 'Featured Image', 'category-featured-image' ); ?></label>
		<div id="tax_image" style="float: left; margin-right: 10px;"><img src="<?php echo esc_url( placeholder_image() ); ?>" width="60px" height="60px" alt="cat img"/></div>
		<div style="line-height: 60px;">
			<input type="hidden" id="tax_image_id" name="tax_image_id" />
			<button type="button" class="upload_image_button button"><?php _e( 'Upload/Add image', 'category-featured-image' ); ?></button>
			<button type="button" class="remove_image_button button"><?php _e( 'Remove image', 'category-featured-image' ); ?></button>
		</div>
		<script type="text/javascript">
			jQuery(document).ready( function($){
				if ( ! $( '#product_cat_thumbnail_id' ).val() ) {
					$( '.remove_image_button' ).hide();
				}
				var file_frame;
				$( 'body' ).on( 'click', '.upload_image_button', function( event ) {
					event.preventDefault();
					if ( file_frame ) {
						file_frame.open();
						return;
					}
					file_frame = wp.media.frames.downloadable_file = wp.media({
						title: '<?php _e( 'Choose a Fetured Image', 'category-featured-image' ); ?>',
						button: {
							text: '<?php _e( 'Use as Fetured Image', 'category-featured-image' ); ?>'
						},
						multiple: false
					});
					file_frame.on( 'select', function() {
						var attachment           = file_frame.state().get( 'selection' ).first().toJSON();
						var attachment_thumbnail = attachment.sizes.full;
						$( '#tax_image_id' ).val( attachment.id );
						$( '#tax_image' ).find( 'img' ).attr( 'src', attachment_thumbnail.url );
						$( '.remove_image_button' ).show();
						$( '.upload_image_button' ).hide();
					});
					file_frame.open();
				});

				$( 'body' ).on( 'click', '.remove_image_button', function() {
					$( '#tax_image' ).find( 'img' ).attr( 'src', '<?php echo esc_js( placeholder_image() ); ?>' );
					$( '#tax_image_id' ).val( '' );
					$( '.remove_image_button' ).hide();
					$( '.upload_image_button' ).show();
					return false;
				});

				$( 'body' ).ajaxComplete( function( event, request, options ) {
					if ( request && 4 === request.readyState && 200 === request.status
						&& options.data && 0 <= options.data.indexOf( 'action=add-tag' ) ) {

						var res = wpAjax.parseAjaxResponse( request.responseXML, 'ajax-response' );
						if ( ! res || res.errors ) {
							return;
						}
						$( '#tax_image' ).find( 'img' ).attr( 'src', '<?php echo esc_js( placeholder_image() ); ?>' );
						$( '#tax_image_id' ).val( '' );
						return;
					}
				} );
			});
		</script>
		<div style="clear:both;"></div>
	</div>
	<?php
}
function edit_featured_category_field( $term ){
	$thumbnail_id = get_term_meta( $term->term_id, 'tax_image_id', true );

	if ( $thumbnail_id ) {
		$image = wp_get_attachment_image_url( $thumbnail_id, 'full' );
	} else {
		$image = placeholder_image();
	}
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label><?php _e( 'Featured Image', 'category-featured-image' ); ?></label></th>
		<td>
			<div id="tax_image" style="float: left; margin-right: 10px;"><img src="<?php echo esc_url( $image ); ?>" width="60px" height="60px" alt="cat img"/></div>
			<div style="line-height: 60px;">
				<input type="hidden" id="tax_image_id" name="tax_image_id" value="<?php echo $thumbnail_id; ?>" />
				<button type="button" class="upload_image_button button"><?php _e( 'Upload/Add image', 'category-featured-image' ); ?></button>
				<button type="button" class="remove_image_button button"><?php _e( 'Remove image', 'category-featured-image' ); ?></button>
			</div>
			<script type="text/javascript">
				jQuery(document).ready( function($){
					var file_frame;
					$( 'body' ).on( 'click', '.upload_image_button', function( event ) {
						event.preventDefault();
						if ( file_frame ) {
							file_frame.open();
							return;
						}
						file_frame = wp.media.frames.downloadable_file = wp.media({
							title: '<?php _e( 'Choose a Fetured Image', 'category-featured-image' ); ?>',
							button: {
								text: '<?php _e( 'Use as Fetured Image', 'category-featured-image' ); ?>'
							},
							multiple: false
						});
						file_frame.on( 'select', function() {
							var attachment           = file_frame.state().get( 'selection' ).first().toJSON();
							var attachment_thumbnail = attachment.sizes.full;
							$( '#tax_image_id' ).val( attachment.id );
							$( '#tax_image' ).find( 'img' ).attr( 'src', attachment_thumbnail.url );
							$( '.remove_image_button' ).show();
							$( '.upload_image_button' ).hide();
						});
						file_frame.open();
					});

					$( 'body' ).on( 'click', '.remove_image_button', function() {
						$( '#tax_image' ).find( 'img' ).attr( 'src', '<?php echo esc_js( placeholder_image() ); ?>' );
						$( '#tax_image_id' ).val( '' );
						$( '.remove_image_button' ).hide();
						$( '.upload_image_button' ).show();
						return false;
					});
				});
			</script>
			<div style="clear:both;"></div>
		</td>
	</tr>
	<?php
}
add_action('edited_category', 'save_taxonomy_fields', 10, 2);
add_action('create_category', 'save_taxonomy_fields', 10, 2);
function save_taxonomy_fields( $term_id){
	if ( isset( $_POST['tax_image_id'] ) ) {
		update_term_meta( $term_id, 'tax_image_id', $_POST['tax_image_id'] );
	}
}
function placeholder_image(){
    return get_stylesheet_directory_uri().'/images/placeholder.png';
}
function get_featured_image_url( $termID, $placeholderSize = true){
    $imageID = get_term_meta( $termID, 'tax_image_id', true );
    if ( $imageID ) {
        $image_url = wp_get_attachment_image_url( $imageID, 'full');
    } else {
        $image_url = placeholder_image( $placeholderSize );
    }
    $image_url    = str_replace( ' ', '%20', $image_url );
    return $image_url;
}
if(!function_exists('category_image'))
{
	function category_image( $termID){
		$imageID = get_term_meta( $termID, 'tax_image_id', true );
		if( $imageID ){
			$image = wp_get_attachment_image_url( $imageID, 'full');
		}
		else{
			$image = placeholder_image();
		}
		return $image;
	}
}



//Add Post Views Function
function set_post_views($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function track_post_views ($post_id) {
	if ( !is_single() ) return;
	if ( empty ( $post_id) ) {
		global $post;
		$post_id = $post->ID;    
	}
	set_post_views($post_id);
}
add_action( 'wp_head', 'track_post_views');

// function get_post_views($postID){
// 	$count_key = 'post_views_count';
// 	$count = get_post_meta($postID, $count_key, true);
// 	if($count==''){
// 		delete_post_meta($postID, $count_key);
// 		add_post_meta($postID, $count_key, '0');
// 		return "0 View";
// 	}
// 	return $count.' Views';
// }

// function seq()
// {
//     $sql = $GLOBALS['seq'];
// 	echo $sql;
// 	$sql++;
// 	$GLOBALS['seq'] = $sql;
// }



// Search Hook For Post Type
function search_filter($query) {
	if ( $query->is_search ) {
		$query->set( 'post_type', 'post' );
	}
}
add_action( 'pre_get_posts', 'search_filter' );



//AJAX Live Search
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
	?>
	<script type="text/javascript">
		function fetch(){

			jQuery.ajax({
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				type: 'post',
				data: { action: 'data_fetch', keyword: jQuery('#default-search').val() },
				success: function(data) {
					jQuery('#datafetch').html( data );
				}
			});

		}
	</script>

	<?php
}

// Ajax Search Function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

/** Query to filter only post type */
$the_query = new WP_Query( array('post_type' => 'post',
								'post_status' => 'publish',
								'post__not_in' => array($post->ID),
								'posts_per_page' => 12,
								's' => esc_attr( $_POST['keyword'] ),
								'order'   => 'DESC' ));

if ($the_query -> have_posts()) : 
	while ($the_query -> have_posts()) : $the_query -> the_post();

		get_template_part('template-parts/content', 'search-card');
	
	endwhile; 
	wp_reset_postdata();
else : ?>
	<p class="inner-detail">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
<?php endif;

die();
}