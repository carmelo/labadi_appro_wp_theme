<?php
/**
 * lists all the images in a gallery
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro gallery-carousel.php
 * @since Labadi Appro 1.0
 */


    $attachments = get_children(
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

<!-- .carousel-slider -->
    <div class="carousel-slider gallery-slider animation" data-animation="animation-fade-in-up">
        <?php 
            if (count($attachments) > 1) :
                while ( !empty( $attachments ) ) :
                   $attachment_id = array_shift( $attachments );
                    
                    if (wp_attachment_is_image($attachment_id) ):  
                        //$image = wp_get_attachment_image_src( $attachment_id, $size = 'x-large' );
                        $image = wp_prepare_attachment_for_js($attachment_id);
        ?>
        <div> 
            <a href="<?php echo ($image[0]); ?>" class="fancybox" data-fancybox-group="images_gallery">
                <figure class="img-hover">
                    <img src="<?php echo ($image['url']); ?>" alt="<?php echo ($image['title']); ?>" />
                    <div class="img-hover-masked"></div>
                </figure>
            </a>
        </div>      
        <?php
                    endif;
                endwhile;
            endif;
        ?>
    </div>
    <!-- .carousel-slider end -->