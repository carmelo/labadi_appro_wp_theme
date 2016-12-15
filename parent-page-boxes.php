<?php
/**
 * Template Name: FrontPage with boxes
 * The template for displaying a front page with all the children and their children's images
 *
 * Displays all of the page and everything after the "site-content" div.
 *
 * @package WordPress
 * @subpackage labadi_appro parent-page-boxes.php
 * @since Labadi Appro 1.0
 */    
    get_header(); 
    get_template_part( 'front-page-header');
    $per_child = 4; //number of children to be displayed per child page
?>

    <!-- .stickem-container -->
    <div class="stickem-container">
        <!-- #features -->
        <div id="features" class="padding-top60">
            
            <!-- .container -->
            <div class="container">
                
                <div class="post-heading-center margin-bottom50 animation" data-animation="animation-fade-in-down">
                    <h2>Designed Problem Solving</h2>
                    <p> <?php echo(get_post(get_the_ID())->post_content); ?> </p>
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
    <?php 
        $portfolio_children = get_pages(array(
            'child_of' => get_the_ID(),
            'parent' => get_the_ID(),
            'sort_order' => 'DESC',
            'sort_column' => 'menu_order'
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
                    <div class="labadi-team-text textcenter animation" data-animation="animation-fade-in-down">
                        <div class="post-heading-center">
                            <h2><strong><?php echo( $portfolio_children[$r]->post_title ); ?></strong></h2>
                        </div>

                        <div class="labadi-team-text-desc">
                            <p> <?php echo($portfolio_children[$r]->post_content); ?> </p>
                        </div>

                    </div>
                </div>
                <div class="col-right">
                    <div class="labadi-masonry">
    <?php
        $pages= get_pages(array(
            'child_of' => $portfolio_children[$r]->ID,
            'parent' => $portfolio_children[$r]->ID,
            'sort_order' => 'DESC',
            'sort_column' => 'rand'
        ));
        
        for ($x = 0; ( $x < $per_child ) && ( $x < count($pages) ); $x++ ) :
            // echo ("<h1>  pages  " . $pages[$x]->post_title . "</h1>");
            if (!($x % 2)) :
    ?>
                        <!--div class="labadi-team-col"-->
    <?php
            endif;
            $attachments = array();
            $attachments = get_children(
                array(
                    'numberposts'      => 1,
                    'post_parent'      => $pages[$x]->ID,
                    'post_status'      => 'inherit',
                    'post_type'        => 'attachment',
                    'post_mime_type'   => 'image',
                    'order'            => 'DESC', 
                    'orderby'          => 'date', 
                    'fields'           => 'ids'
                    )
                );
     
            $attachment_id = array_shift( $attachments );      
            if (wp_attachment_is_image($attachment_id) ):  
                $image = wp_prepare_attachment_for_js($attachment_id);                
    ?>
                
                            <div class="labadi-team-profile animation" data-animation="animation-bounce-in">
                                <img src="<?php echo ($image['url']); ?>" alt="<?php echo ($image['caption']); ?>" />                        
                                <div class="labadi-team-profile-overlay">
                                    <a href="<?php echo(get_permalink($pages[$x]->ID)); ?>" >
                                        <p> <?php echo ($pages[$x]->post_title); ?> </p>
                                    </a>
                                </div>
                            </div>        
            <?php          
                endif; 
                    if ($x % 2) :
            ?>
                        <!--/div-->
    <?php
                    endif;
        endfor;
    ?>
                        </div>
                    </div>
                </div>   
            </div>
        </div>

<?php        
    endfor;
?>

        <div class="sep-border"></div> <!-- separator -->
    </div> <!-- .stickem-container end -->
<?php get_footer(); ?>
    
  