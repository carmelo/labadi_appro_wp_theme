    <?php
/**
 * The template for displaying a page with one image on the right, and intro to the left of it, then 
 * lists all the other images in full screen 
 *
 * Displays the top part of the page
 *
 * @package WordPress
 * @subpackage labadi_appro features2.php
 * @since Labadi Appro 1.0
 */

      get_header(); ?>
        <!-- #features2 -->
        <div id="features2" class="bg-grey no-border-bottom padding-top80-rs">
            <?php while (have_posts()) : the_post(); ?>        
            <!-- .container -->
            <div class="container">
                <?php $attachments = get_children(
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
                    $caption = get_post_meta( get_the_ID(), $key = 'caption', $single = false );
                    $credits = get_post_meta( get_the_ID(), $key = 'credits', $single = false );
                    $context = get_post_meta( get_the_ID(), $key = 'context', $single = false );
                    $year = get_post_meta( get_the_ID(), $key = 'year', $single = false );
                    $month = get_post_meta( get_the_ID(), $key = 'month', $single = false );
                ?>
                <!-- .row -->
                <div class="row">

                    <div class="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-0">
                        <div class=" margin-bottom20 animation" data-animation="animation-fade-in-left">
                            <div class="post-heading-left">
                                <h2><?php the_title(); ?></h2>
                                <?php if (count($caption)) : ?>
                                <p style="font-style:italic;">
                                    <?php echo ( $caption[0] ); ?>  
                                </p>  
                                <?php 
                                    endif; 
                                    if ( (count($context)) || (count($month)) || (count($year)) ) :
                                    ?>
                                <p class="sub-heading">
                                <?php   
                                    for ($x = 0; $x < count($context); $x++) 
                                    {
                                        echo ( $context[$x] );   
                                        echo ( '  ' );  
                                    }
                                    if (count($month)) 
                                    { 
                                        echo ( '  |  ' );
                                        echo ( $month[0] . '  ');
                                    }
                                    if (count($year)) 
                                    {
                                        echo ( $year[0] );
                                    }
                                ?>  
                                </p>
                                <?php 
                                    endif; 
                                ?>
                                <?php if (count($credits)) : ?>
                                <p style="font-style:italic;">
                                    A project with: 
                                <?php   for ($x = 0; $x < count($credits); $x++) {
                                            if ($x != 0) {
                                                echo('<br /> - ');
                                            }
                                            echo ( $credits[$x] );   
                                        }
                                ?>  
                                </p>  
                                <?php endif; ?>  
                            </div>

                            <div class="no-margin-bottom post-heading-left">
                                <?php
                                    /* translators: %s: Name of current post */
                                    the_content();
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        if ( !empty( $attachments ) ) :
                            $attachment_id = array_shift( $attachments );
                            if (wp_attachment_is_image($attachment_id) ):  
                                $image = wp_prepare_attachment_for_js($attachment_id);
                    ?>
                    <div class="col-sm-8 col-md-5 col-sm-offset-2 col-md-offset-1 col-padding-xs">
                        <a href="<?php echo ($image['sizes']['full']['url']); ?>" class="fancybox" data-fancybox-group="images_gallery">
                            <figure class="img-overlay padding-bottom20 img-hover"> 
                                <div class="img-right" >
                                    <img class="animation" data-animation="animation-fade-in-left" data-delay="400" src="<?php echo ($image['url']); ?>" alt="<?php echo ($image['title']); ?>" />
                                </div>
                            </figure>
                        </a>
                    </div>
                    <?php endif; 
                        endif; 
                    ?>
                </div>
                <!-- .row end --> 
            </div>
            <!-- .container end -->
            <?php endwhile; ?>
        </div>
        <!-- #features2 end -->