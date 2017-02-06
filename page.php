<?php
/**
 * The template for displaying a page
 *
 * Displays all of the page and everything after the "site-content" div.
 *
 * @package WordPress
 * @subpackage labadi_appro page.php
 * @since Labadi Appro 1.0
 */

      get_header(); ?>
<? // php get_sidebar(); ?>
    <!-- .stickem-container -->
    <div class="stickem-container">

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
                'order'            => 'DESC', //ASC',
                'orderby'          => 'date', //'menu_order ID',
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
        <figure class="animation" data-animation="animation-bounce-in">
             <img src="<?php echo ($image[0]); ?>"  alt="Image"></img>
        </figure>
        
        <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>

<?php get_footer(); ?>
    
  