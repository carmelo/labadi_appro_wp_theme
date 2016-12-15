<?php
/**
 * Template Name: Text Intro then Cards
 * The template for displaying a page with text on the top, 
 * lists all the other images in a gallery
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro intro-cards.php
 * @since Labadi Appro 1.0
 */

      get_header(); 
?>

<!-- .stickem-container -->
    <div class="stickem-container">
        <?php //get_template_part( 'nav_menu' ); ?>
        
        <div id="preloader">
            <div class="spinner">
            </div> 
            <!-- page loader spinner -->
        </div>

        <!-- #galleria -->
        <div id="galleria" class="bg-grey grey-color2 no-border-bottom wrap-container80-rs">
            
            <?php   while (have_posts()) : the_post(); 
                    $caption = get_post_meta( get_the_ID(), $key = 'caption', $single = false );
                    $credits = get_post_meta( get_the_ID(), $key = 'credits', $single = false );
                    $context = get_post_meta( get_the_ID(), $key = 'context', $single = false );
                    $year = get_post_meta( get_the_ID(), $key = 'year', $single = false );
                    $month = get_post_meta( get_the_ID(), $key = 'month', $single = false );
            ?>
            <!-- .container -->
            <div class="container">                
                <div class="post-heading-left animation" data-animation="animation-fade-in-down">
                	<h2><?php the_title(); ?></h2>  
                        <?php if (count($caption)) : ?>
                                <p style="font-style:italic;">
                                    <?php echo ( $caption[0] ); ?>  
                                </p>  
                                <?php endif; ?>  

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
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- .container end -->

            <?php get_template_part( 'cards' ); ?>
        </div>
        <!-- #galleria end -->
    </div>
    <!--stickem container-->
    

<?php get_footer(); ?>
    

 