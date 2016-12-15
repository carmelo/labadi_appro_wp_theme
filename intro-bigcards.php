<?php
/**
 * Template Name: Text Intro then Full Width Cards
 * The template for displaying a page with text on the top, 
 * lists all the other images in a gallery in full
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro intro-bigcards.php
 * @since Labadi Appro 1.0
 */

      get_header(); 
?>

<!-- .stickem-container -->
    <div class="stickem-container">
        <?php // get_template_part( 'nav_menu' ); ?>
        
        <div id="preloader">
            <div class="spinner">
            </div> 
            <!-- page loader spinner -->
        </div>

        <!-- #galleria -->
        <div id="galleria" class="bg-grey grey-color2 no-border-bottom wrap-container80-rs">
            
            <?php   while (have_posts()) : the_post(); 
                    $credits = get_post_meta( get_the_ID(), $key = 'credits', $single = false );
                    $context = get_post_meta( get_the_ID(), $key = 'context', $single = false );
            ?>
            <!-- .container -->
            <div class="container">                
                <div class="post-heading-left animation" data-animation="animation-fade-in-down">
                	<h2><?php the_title(); ?></h2>  
                        <p class="sub-heading">
                        <?php   for ($x = 0; $x < count($context); $x++) {
                                    echo ( $context[$x] );   
                                }
                        ?>  
                        </p>
                        <?php if (isset($credtis)) : ?>
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

            <?php get_template_part( 'bigcards' ); ?>
        </div>
        <!-- #galleria end -->
    </div>
    <!--stickem container-->
    

<?php get_footer(); ?>
    

 