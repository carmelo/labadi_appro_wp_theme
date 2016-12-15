<?php
/**
 * Template Name: One Intro and Image then Cards
 * The template for displaying a page with one image on the right, and intro to the left of it, then 
 * lists all the other images in full screen 
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro oneintro-cards.php
 * @since Labadi Appro 1.0
 */

      get_header(); ?>
      <!-- labadi one intro full -->
    <!-- .stickem-container -->
    <div class="stickem-container">
        <?php //get_template_part( 'nav_menu' ); ?>

       <div id="preloader">
            <div class="spinner">
            </div> <!-- page loader spinner -->
        </div>
    
    
        <?php get_template_part( 'features2' ); ?>
        <?php get_template_part( 'cardsminusone' ); ?>
        

<?php get_footer(); ?>
    
  