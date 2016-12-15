<?php
/**
 * Template Name: Squares Slider
 * The template for displaying a page with one image on the right, and intro to the left of it, then 
 * lists all the other images in full screen 
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro squares-sliders.php
 * @since Labadi Appro 1.0
 */

      get_header(); ?>
    <!-- .stickem-container -->
    <div class="stickem-container">
        <?php get_template_part( 'nav_menu' ); ?>

       <div id="preloader">
            <div class="spinner">
            </div> <!-- page loader spinner -->
        </div>

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
        
            <div class="col-right"> 
                <?php 
                if (count($attachments) > 1) :
                     if (count($attachments) % 4){
                        $img_row = 4;
                     }
                     else {
                        $img_row = 3;  
                    }
echo ("<h1>" . $img_row . "</h1>");
                    while ( !empty( $attachments ) ) :
                ?>  
<?php  echo ("<h2>" . (count($attachments) + 2) % $img_row) . "</h2>" ?>                

<div class="carousel-slider affa-team-row">
                <?php for ($counter = 0; $counter < $img_row; $counter++): 
                    $attachment_id = array_shift( $attachments );
                        
                    if (wp_attachment_is_image($attachment_id) ):  
                        $image = wp_get_attachment_image_src( $attachment_id, $size='350,350' );                 
                ?>
                <div class="affa-team-col">
                    <div class="affa-team-profile animation" data-animation="animation-bounce-in">
                        <img src="<?php echo ($image[0]); ?>" alt="<?php echo ($image[3]); ?>" />
                        <div class="affa-team-profile-overlay">
                            <p> <?php echo count($attachments) ?> </p>
                            <p> CEO & Founder </p>
                            <div class="socials">
                                <a href="#" title="carmelito1"><i class="ion ion-social-facebook"></i></a>
                                <a href="#" title="carmelito2"><i class="ion ion-social-twitter"></i></a>
                                <a href="#" title="carmelito3"><i class="ion ion-social-googleplus-outline"></i></a>
                                <a href="#" title="carmelito4"><i class="ion ion-social-instagram-outline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  //if (!(count($attachments) + 1) % $img_row) : ?>
                    
                <?php endif; 
                        endfor; //endif;  ?>
</div>
                <?php
                        
                    endwhile;
                endif;
                ?>
        </div>
    </div>

<?php get_footer(); ?>
