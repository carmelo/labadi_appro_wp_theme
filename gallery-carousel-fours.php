<?php
/**
 * Template Name: Gallery carousel Fours
 * lists all the images in a gallery
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro gallery-carousel-fours.php
 * @since Labadi Appro 1.0
 */
?>

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
        $total = count($attachments);        
        $per_line = 4;
        if ($total > 0) :
            $rows = (int)($total / $per_line);            
            $extra_row_elements = $total - ($per_line * $rows);
// echo ('<h1> total ' . $total . '</h1>');
// echo ('<h1> per_line ' . $per_line . '</h1>');
// echo ('<h1> rows ' . $rows . '</h1>');
// echo ('<h1> extra_row_elements ' . $extra_row_elements . '</h1>');

            if (($total % $per_line) != 0){
                $rows++;  
            } 
            for ($r = 0; $r < $rows; $r++ ):
                if ( (($r + 1) == $rows) && ($extra_row_elements != 0)) { 
                    $per_line = $extra_row_elements;
                }
    ?>
    
    <?php echo ('<!-- .carousel-slider ' . $r . ' -->'); ?>
    <div class="carousel-slider gallery-slider animation"   data-animation="animation-fade-in-up">    
        <?php      
                for ( $x = 0; $x < $per_line; $x++ ):
                    $attachment_id = array_shift( $attachments );
                    if (wp_attachment_is_image($attachment_id) ):  
                        $image = wp_prepare_attachment_for_js($attachment_id);
                        //$image = wp_get_attachment_image_src( $attachment_id, $size = 'medium' );
        ?>
        <div> <?php echo ('<!--  -' . count($attachments)  . ' -->'); ?>
            <a href="<?php echo ($image['url']); ?>" class="fancybox" data-fancybox-group="images_gallery">
                <figure class="img-hover">
                    <img src="<?php echo ($image['url']); ?>" alt="<?php echo ($image['title']); ?>" />
                    <div class="img-hover-masked"></div>
                </figure>
            </a>
        </div>         
        <?php
                    endif;
                endfor;
        ?>
    </div>
    <?php echo ('<!-- .carousel-slider ' . $r . ' end -->'); ?>
    
    <?php                
            endfor;
        endif;
    ?>
    
    