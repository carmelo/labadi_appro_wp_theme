<?php
/**
 * Template Name: FrontPage with Cards
 * The template for displaying a page with text on the top, 
 * lists all the other images in a gallery in full
 *
 * Displays all of the children cards
 *
 * @package WordPress
 * @subpackage labadi_appro parent-pagecards.php
 * @since Labadi Appro 1.0
 */

    get_header(); 

    get_template_part( 'front-page-header');
?>



   <div id="preloader">
        <div class="spinner"></div> <!-- page loader spinner -->
    </div>
    <!-- .stickem-container -->
    <div class="stickem-container">
    <?php //get_template_part( 'nav_menu' ); ?>

    <?php 
        $portfolio_children = get_pages(array(
            'child_of' => get_the_ID(),
            'parent' => get_the_ID(),
            'sort_order' => 'DESC',
            'sort_column' => 'ids'
        ));
    // echo '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
        $total = count($portfolio_children);        
    // echo ("<h1> total " . $total . "</h1>"); 
        for ($r = 0; $r < $total; $r++ ):       
     ?>
         <div id="teams" class="bg-grey no-border-top no-border-bottom">
            
            <!-- .row-wrap -->
            <div class="row-wrap">

               <div class="col-left">
                    <a href="<?php echo(  get_permalink( $portfolio_children[$r]->ID ) ); ?>">
                        <div class="labadi-team-text textcenter animation" data-animation="animation-fade-in-down">
                            <div class="post-heading-center">
                                <h2><strong><?php echo( $portfolio_children[$r]->post_title ); ?></strong></h2>
                            </div>

                            <div class="labadi-team-text-desc">
                                <p> <?php echo($portfolio_children[$r]->post_content); ?> </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-right">
                    <div class="labadi-masonry row">
                    <?php
                        $pages= get_pages(array(
                            'child_of' => $portfolio_children[$r]->ID,
                            'parent' => $portfolio_children[$r]->ID,
                            'sort_order' => 'DESC',
                            'sort_column' => 'ids'
                        ));

                        $per_child = 4;
                        for ($x = 0; ( $x < $per_child ) && ( $x < count($pages) ); $x++ ):
                            $post = $pages[$x];
                            get_template_part( 'one-card' ); 
                        endfor;
                        ?>
                    </div>
                </div>
            </div>     
            <div class="row-wrap">
                    <img src="<?php echo(get_template_directory_uri()); ?>/images/horizontal_separator.png" />
             </div>            
            <?php
                endfor;
            ?>
    </div> <!-- .stickem-container end -->
<?php get_footer(); ?>
    
  