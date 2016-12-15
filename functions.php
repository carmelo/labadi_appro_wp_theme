<?php

/**
 * Labadi Appro functions and definitions
 *
 * @package WordPress
 * @subpackage labadi_appro function.php
 * @since Labadi Appro 1.0
 */

//REGISTER WIDGET AREAS
if ( function_exists('register_sidebars') ) {
 	add_action( 'widgets_init', 'labadi_appro_widgets_init' );
}

function labadi_appro_widgets_init(){
	 register_sidebar(array(
		'name'          => __( 'Footer Widget 1', 'labadi_appro' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));
	 register_sidebar(array(
		 'name' => 'Footer Widget 2',
		 'id' => 'footer2',
		 'before_widget' => '<aside id="%1$s" class="credits %2$s">',
         'after_widget'  => '</aside>',
		 'before_title' => '<div class="signature">',
		 'after_title' => '</div><br/>',
	 ));
	 register_sidebar(array(
		 'name' => 'Footer Widget 3',
		 'id' => 'footer3',
		 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget'  => '</aside>',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));
	register_sidebar(array(
		 'name' => 'Footer Widget 4',
		 'id' => 'footer4',
		 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget'  => '</aside>',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));

	register_sidebar(array(
		'name'          => __( 'Feature 2 Widget 1', 'labadi_appro' ),
        'id'            => 'feature2toptext',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
		 'before_title' => ' <h2>',
		 'after_title' => ' </h2>',
	 ));
 }
 

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function labadi_js_enqueue() {
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array( 'jquery') );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array( 'jquery') );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-2', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery') );
	wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/js/response.min.js', array( 'jquery') );
	wp_enqueue_script( 'jquery-4', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array( 'jquery') );
 	wp_enqueue_script( 'jquery-5', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery') );
 	wp_enqueue_script( 'jquery-6', get_template_directory_uri() . '/js/waypoints.min.js', array( 'jquery') );
	wp_enqueue_script( 'jquery-7', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-8', get_template_directory_uri() . '/js/jquery.mousewheel-3.0.6.pack.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-9', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-10', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array( 'jquery') );
 	wp_enqueue_script( 'jquery-11', get_template_directory_uri() . '/js/parallax.min.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-12', get_template_directory_uri() . '/js/jquery.counterup.min.js', array( 'jquery') );
    wp_enqueue_script( 'jquery-13', get_template_directory_uri() . '/js/jquery.stickem.js', array( 'jquery') );
	wp_enqueue_script( 'jquery-14', get_template_directory_uri() . '/js/script.js', array( 'jquery') );
}

add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
add_action('wp_footer', 'labadi_js_enqueue');

// function labadi_js_2() {
// 	wp_enqueue_script( 'jquery-14', get_template_directory_uri() . '/js/script.js', array( 'jquery') );
// }
// add_action('wp_header', 'labadi_js_2');


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Labadi Appro Nav' ),
    'menu-min' => __( 'Hamburger Menu', 'Labadi Min Nav' ),
) );


function labadi_css_enqueue() {

	wp_enqueue_style( 'font1', esc_url('https://fonts.googleapis.com/css?family=Roboto:300,300,italic,400,500,700'), array(), '1.0', 'all');
	wp_enqueue_style( 'font2', esc_url('https://fonts.googleapis.com/css?family=Montserrat:400,700'), array(), '1.0', 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1.0', 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'no-js', get_template_directory_uri() . '/css/no-js.css', array(), '1.0', 'all');
}

add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_action('wp_enqueue_scripts', 'labadi_css_enqueue');




?>

