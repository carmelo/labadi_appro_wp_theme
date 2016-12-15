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
    <meta name="author" content="<?php bloginfo( 'name' )?>" />
    <meta name="keywords" content="<?php bloginfo( 'description' )?>" />

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    
    <link rel="canonical" href="<?php bloginfo( 'url' )?>"/>
    <meta property="og:site_name" content="<?php bloginfo( 'name' )?>" />
    <meta property="og:title" content="name='keywords' content='<?php bloginfo( 'description' ) ?>'" />
    <meta property="og:url" content="<?php bloginfo( 'url' )?>" />
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>
    <meta itemprop="name" content="Portfolio"/>
    <meta itemprop="url" content="<?php bloginfo( 'url' )?>" />
    <meta itemprop="thumbnailUrl" content="" />
    <link rel="image_src" href="" />
    <meta itemprop="image" content=""/>
    <meta name="twitter:title" content="<?php bloginfo( 'name' )?>" />
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content="<?php bloginfo( 'url' )?>" />
    <meta name="twitter:card" content="summary"/>
    <meta name="description" content="<?php bloginfo( 'description' )?>" />
    <title> <?php bloginfo( 'name' ) . wp_title( '|', true, 'left' ); ?> </title>
    
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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