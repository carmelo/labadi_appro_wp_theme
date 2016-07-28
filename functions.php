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
	 register_sidebar(array(
		 'name' => 'Footer Widget 1',
		 'id' => 'footer1',
		 'before_widget' => '',
		 'after_widget' => '',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));
	 register_sidebar(array(
		 'name' => 'Footer Widget 2',
		 'id' => 'footer2',
		 'before_widget' => '',
		 'after_widget' => '',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));
	 register_sidebar(array(
		 'name' => 'Footer Widget 3',
		 'id' => 'footer3',
		 'before_widget' => '',
		 'after_widget' => '',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));
	register_sidebar(array(
		 'name' => 'Footer Widget 4',
		 'id' => 'footer4',
		 'before_widget' => '',
		 'after_widget' => '',
		 'before_title' => '<h2 class="header-text"><span>',
		 'after_title' => '</span></h2>',
	 ));
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


add_action('wp_footer', 'labadi_js_enqueue');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Labadi Appro Nav' ),
) );


function labadi_css_enqueue() {
	
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0', 'all');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0', 'all');
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1.0', 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'no-js', get_template_directory_uri() . '/css/no-js.css', array(), '1.0', 'all');
    //wp_enqueue_style( 'colors', get_template_directory_uri() . '/css/color.css', array(), '1.0', 'all');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
//add_action('wp_header', 'labadi_css_enqueue');
add_action('wp_enqueue_scripts', 'labadi_css_enqueue');




?>

