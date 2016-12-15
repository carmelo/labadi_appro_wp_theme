<?php
/**
 * Template Name: Text Intro then Full Images
 * The template for displaying a page with one image on the right, and intro to the left of it, then 
 * lists all the other images in full screen 
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro oneintro-full-images.php
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

        <?php $attachments = get_children(
            array(
                'numberposts'      => -1,
                'post_parent'      => get_the_ID(),
                'post_status'      => 'inherit',
                'post_type'        => 'attachment',
                'post_mime_type'   => 'image',
                'order'            => 'DESC',
                'orderby'          => 'modified', //'menu_order ID',
                'fields'           => 'ids'
                )
            );
        ?>
        
        <?php 
        if (count($attachments) > 1) :
                $attachment_id = array_shift( $attachments );
            while ( !empty( $attachments ) ) :
               $attachment_id = array_shift( $attachments );
                
                if (wp_attachment_is_image($attachment_id) ):  
                    $image = wp_get_attachment_image_src( $attachment_id, 'large' );                 

        ?>
        <figure class="animation">
             <img src="<?php echo ($image[0]); ?>"  alt="<?php echo ('image-' . count($attachments) ); ?>"></img>
        </figure>
        
        <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>

<?php get_footer(); ?>
    
  