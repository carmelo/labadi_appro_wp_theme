<?php
/**
 * The template for displaying a front page header
 * including site title, description and caption
 *
 * Displays all of the children cards
 *
 * @package WordPress
 * @subpackage labadi_appro front-page-header.php
 * @since Labadi Appro 1.0
 */

        $attachments = array();
        $attachments = get_children(
            array(
                'numberposts'      => 1,
                'post_parent'      => get_the_ID(),
                'post_status'      => 'inherit',
                'post_type'        => 'attachment',
                'post_mime_type'   => 'image',
                'order'            => 'DESC', 
                'orderby'          => 'modified',
                'fields'           => 'ids'
                )
            );
        $attachment_id = array_shift( $attachments ); 
?>

<!-- #header -->
    <header id="header">
      
    <?php //get_template_part( 'nav_menu_small2' ); ?>      
            
    </header>
    <!-- #header end -->

    <!-- .stickem-container -->
    <div class="stickem-container" style="padding-top:0px !important;">
        <figure class="video-image animation animated animation-fade-in-up" data-animation="animation-fade-in-up">
                
                <div class="video-image-overlay animation" data-animation="animation-fade-in-right" style="padding-top:10% !important; padding-right:33% !important;">
                    <h1  class="post-heading-center" style="color:#ffffff !important;">
                    <?php 
                        $name = get_bloginfo( 'name', 'display' );
                        echo( strstr($name, ' ', true) );
                        echo ( '<br />' );
                        echo( strstr($name, ' ') );
                    ?>
                    </h1>
                </div>

                  <?php 
                    if (wp_attachment_is_image($attachment_id) ):  
                        $imagejs = wp_prepare_attachment_for_js($attachment_id);
                        $image = wp_get_attachment_image_src( $attachment_id, $size ='large');
                ?>
                        <img src="<?php echo ($image[0]); ?>" alt="<?php echo ($image[3]); ?>" />
                <?php 
                    endif;
                ?>
            </figure>
        <!-- .container -->
        <div class="container">
            <h3 class="post-heading-center">
                <span style="letter-spacing:0.2em;">
                <?php   
                    $description = get_bloginfo( 'description', 'display' );                           
                    $separator = ' | ';
                    $junction = ' + ';
                    $strings = explode ( $separator , $description );
                    for ($x = 0; $x < count( $strings );  $x++):
                        if (!($x % 3)) 
                        { 
                            $c = '#8B0000';
                        } 
                        elseif (!($x % 2)) 
                        { 
                            $c = '#8DC35B'; 
                        } 
                        else 
                        { 
                            $c = '#E8A805';
                        }
                         
                ?>
                    <a href="<?php bloginfo( 'url' ); echo( '/' . $strings[$x] )?>">
                        <span style="color:<?php echo ( $c ); ?>; ">
                            <?php echo( $strings[$x] ); ?>
                            <?php if (($x + 1) < count( $strings )) { echo( $junction ); } ?>
                        </span>
                    </a>
                <?php endfor; 
                ?>
                </span>
            </h3>
            <div class="post-heading-center margin-bottom50 animation" data-animation="animation-fade-in-down">
                <?php
                    $caption = get_post_meta( get_the_ID(), $key = 'caption', $single = false );
                    if (count($caption)) : 
                ?>
                <h2>
                    <?php echo ( $caption[0] ); ?>  
                </h2>  
                <?php endif; ?>  
            
                <p> <?php echo( get_post(get_the_ID() )->post_content); ?> </p>
            </div>
            
        </div>
        <!-- .container end -->
    </div>
 <!--// main page header-->