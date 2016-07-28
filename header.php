<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage labadi_appro header.php
 * @since Labadi Appro 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<!--[if lt IE 7]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta description="<?php bloginfo( 'description' ); ?>" />
    <meta content-type="<?php bloginfo( 'html_type' ); ?>" />
    <meta name="keywords" content="Design, Strategy, Interiors, Engineer, Technology, Sustainabiltiy, Experience, Karmel, Al Labadi, Labadi" />
    <meta name="author" content="Karmel Al Labadi" />

    <title> <?php bloginfo( 'name' ) . "|" . wp_title( '|', true, 'right' ); ?> </title>
    <!--link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /-->

    
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    
    
    <!-- Custom Colors -->
    <!--<link rel="stylesheet" href="css/colors/green/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/orange/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/pink/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/purple/color.css">-->
    <!--<link rel="stylesheet" href="css/colors/yellow/color.css">-->
    
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 8]>
        <link rel="stylesheet" href="css/ie-older.css">
    <![endif]-->    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?> >
