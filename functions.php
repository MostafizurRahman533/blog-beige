<?php 

/**
 * custome logo and titles..
 */
add_theme_support('post-thumbnails',array('post','page','slider-items'));         //change.. 
set_post_thumbnail_size(200,200,true);  
add_image_size('myFituredImage', 300, 300, true);
add_image_size('slider-items', 1900, 900, true);                                               //change..


/**
 * custome logo and titles..
 */
function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/**
 * enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'bs', get_template_directory_uri().'/asset/css/bootstrap.css', array(),'1.0.0',false);
	wp_enqueue_style( 'bsmin', get_template_directory_uri().'/asset/css/all.min.css', array(),'1.0.0',false);
	wp_enqueue_style( 'fwasm', get_template_directory_uri().'/asset/css/fontawesome.min.css', array(),'1.0.0',false);
	wp_enqueue_style( 'anim', get_template_directory_uri().'/asset/css/animate.css', array(),'1.0.0',false);
	wp_enqueue_style( 'partcls', get_template_directory_uri().'/asset/css/particles.css', array(),'1.0.0',false);
	wp_enqueue_style( 'jnc', get_template_directory_uri().'/asset/css/jquery-nao-calendar.css', array(),'1.0.0',false);
	wp_enqueue_style( 'jpr', get_template_directory_uri().'/asset/css/jquery-pseudo-ripple.css', array(),'1.0.0',false);
	wp_enqueue_style( 'bbs', get_template_directory_uri().'/asset/css/blog-beige-style.css', array(),'1.0.0',false);
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jmj', get_template_directory_uri() . '/asset/js/jquery.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'bmj', get_template_directory_uri() . '/asset/js/bootstrap.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'prtcls', get_template_directory_uri() . '/asset/js/particles.js', array(), '1.0.0', false );
    wp_enqueue_script( 'wjs', get_template_directory_uri() . '/asset/js/wow.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jprjs', get_template_directory_uri() . '/asset/js/jquery-pseudo-ripple.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jncjs', get_template_directory_uri() . '/asset/js/jquery-nao-calendar.js', array(), '1.0.0', false );
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/asset/js/main.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/**
 * MENU customizations.
 */
function DwinsTeam_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('Menu_name1', __('Menu Name 1', 'text_domain_name')); 
		register_nav_menu('menu_name2', __('Menu Name 2', 'text_domain_name')); 
		register_nav_menu('menu_name_3', __('Menu Name 3', 'text_domain_name')); 
	} 
}
add_action('init','DwinsTeam_register_menu');


/**
 * MENU customizations.
 */
function slider_gallery(){
	register_post_type('slider-items', array(
		'labels' => array(
			'name' => __('Slider'),
			'singular_name' => __('Slider'),
			'menu_name' => __('Slider Gallery'),
			'name_admin_bar' => __('Add Slider'),
			'all_items' => __('All Slider'),
			'add_new' => __('Add Slider'),
			'add_new_item' => __('Add New Slider'),
			'edit_item' => __('Edit Slider'),
			'new_item' => __('New Slider'),
			'view_item' => __('View Slider'),
			'search_items' => __('Search Slider')
		),
		'public' => true,
		'has_archive' => true, 
		'rewrite' => array('slug' => 'slider-items'),
		'menu_position' => 8, 
		'menu_icon' => 'dashicons-products',
		'supports' => array('title','thumbnail','editor')
	));
}
add_action('init','slider_gallery'); 

/*
 * excerpt length..
 */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}