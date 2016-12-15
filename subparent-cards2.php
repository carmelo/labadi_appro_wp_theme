<?php
/**
 * Template Name: Parent Page with Cards
 * The template for displaying a page with text on the top, 
 * lists all the other images in a gallery in full
 *
 * Displays all of the children cards
 *
 * @package WordPress
 * @subpackage labadi_appro subparent-cards.php
 * @since Labadi Appro 1.0
 */

      get_header(); 
?>
    <!-- .stickem-container -->
    <div class="stickem-container">
        <!-- #features -->
        <div id="features-subparent" class="padding-top60">
            <!-- .container -->
            <div class="container">

                <div class="post-heading-left margin-bottom50 animation" data-animation="animation-fade-in-down">
                    <h2><?php echo(get_post(get_the_ID())->post_title); ?> </h2>
                    <p> <?php echo(get_post( get_the_ID() )->post_content); ?> </p>
                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- #features end -->
    </div>
 <!--//header-->

    <div id="preloader">
        <div class="spinner"></div> <!-- page loader spinner -->
    </div>
    <!-- .stickem-container -->
    <div class="stickem-container">
    <?php get_template_part( 'nav_menu' ); ?>
    <div>
        
    </div>
    <?php
                        $pages= get_pages(array(
                            'child_of' => get_the_ID(),
                            'parent' => get_the_ID(),
                            'sort_order' => 'DESC',
                            'sort_column' => 'ids'
                        ));
    ?>
         <div id="teams" class="bg-grey no-border-top no-border-bottom">
           
            <!-- .row-wrap -->
            <div class="row-wrap">

          <?php
                for ($x = 0; $x < count($pages) ; $x++ ):
                    $post = $pages[$x];
                    get_template_part( 'one-card' ); 
                endfor;
        ?>
        </div>
    </div>        
         
    </div> <!-- .stickem-container end -->
<?php get_footer(); ?>
    
  