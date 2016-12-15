<?php
/**
 * Template Name: parent page with boxes
 * The template for displaying a front page with all the children and their children's images
 *
 * Displays all of the page and everything after the "site-content" div.
 *
 * @package WordPress
 * @subpackage labadi_appro front-page.php
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
            'orderby'          => 'rand', 
            'fields'           => 'ids'
            )
        );
    $attachment_id = array_shift( $attachments );      
    
    get_header(); ?>
<!-- #header -->
    <header id="header">
        <!-- .header-overlay -->
        <!--div class="header-overlay"-->
            <!-- .container -->
            <div class="wrap-container-rs">
                <!-- .row -->
                <div class="row">
                    
                    <!--div class="col-sm-7 col-md-5 col-md-offset-1"-->
                <figure class="video-image animation animated animation-fade-in-up" data-animation="animation-fade-in-up">
                    <!--div class="video-image-overlay"-->
                        <div class="video-image-overlay animation" data-animation="animation-fade-in-right" style="padding-top:12% !important; padding-right:33% !important;">
                            <!--div style="left: 250px; width: 300px; position: absolute; top: 150px;" class="s1"-->

                            <h1 style="line-height: 1.3em;" class="font_0">
                                <!--span class="color_13" -->
                                    <!-- span style="font-family:droid-serif-w01-regular,droid-serif-w02-regular,droid-serif-w10-regular,serif;" -->
                                        <span class="header-text">Carmelo
                                        </span>
                                    <!-- /span -->
                                <!--/span-->
                            </h1>

                            <h1 style="line-height: 1.3em;" class="font_0">
                                <span class="color_13">
                                    <!--span style="font-family:droid-serif-w01-regular,droid-serif-w02-regular,droid-serif-w10-regular,serif;" -->
                                        <span class="header-text">Al Labadi
                                        </span>
                                    <!--/span-->
                                </span>
                            </h1>
                        </div>

                            <div style="padding-top:12%; padding-right:33%  ;" class="color_13">
                                <div class="s2line">
                                </div>
                            </div>

                            <!--div class="header-content"-->
                                <!--div style="padding-top:52%; " class="s1"-->
                                <div class="video-image-overlay animation" data-animation="animation-fade-in-right" style="padding-top:12% ;">
                                    <p class="font_8">
                                        <a href="<?php bloginfo( 'url' )?>" target="_self">
                                            <span style="letter-spacing:0.2em;">
                                                <span style="color:#8B0000;">Engineer</span>
                                                <span class="color_13"> | </span>                                
                                                <span style="color:#8DC35B;">Designer</span>
                                                <span class="color_13"> | </span>
                                                <span style="color:#E8A805;">Strategist</span>
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            <!--/div-->
                        <!--/div-->
                    <!--/div-->
                    <!--div class="col-sm-5 col-md-4 col-md-offset-1" -->
                    <!--/div -->
                      <?php 
                        if (wp_attachment_is_image($attachment_id) ):  
                            $image = wp_get_attachment_image_src( $attachment_id, $size ='large');
                    ?>
                            <!--figure class="header-img animation" data-animation="animation-fade-in-left"-->
                                <img src="<?php echo ($image[0]); ?>" alt="<?php echo ($image[3]); ?>" />
                            <!--/figure-->
                    <?php 
                        endif;
                    ?>
                    <!-- /div --> 
                </figure>
                              
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end --> 
        <!--/div-->
        <!-- .header-overlay end -->
    </header>
    <!-- #header end -->

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
                        <div class="labadi-team-text-logo">
                            <img src="images/logo.png" alt="Logo" />
                        </div>
                        <div class="labadi-team-text-desc">
                            <p> <?php echo($portfolio_children[$r]->post_content); ?> </p>
                        </div>
                        <a href="#" class="btn-custom">Visit Us</a>
                    </div>
                </div>

                <div class="col-right">
                    <div class="carousel-slider labadi-team-row">
<?php

    $pages= get_pages(array(
        'child_of' => $portfolio_children[$r]->ID,
        'parent' => $portfolio_children[$r]->ID,
        'sort_order' => 'DESC',
        'sort_column' => 'menu_order'
    ));

    $per_child = 4;
    for ($x = 0; ( $x < $per_child ) && ( $x < count($pages) ); $x++ ):
// echo ("<h1>  pages  " . $pages[$x]->post_title . "</h1>");
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
            $image = wp_get_attachment_image_src( $attachment_id, $size='350,350' );                 
        ?>
                <div class="labadi-team-col">
                    <div class="labadi-team-profile animation" data-animation="animation-bounce-in">
                        <img src="<?php echo ($image[0]); ?>" alt="<?php echo ($image[3]); ?>" />
                        <div class="labadi-team-profile-overlay">
                            <p> <?php echo ($pages[$x]->post_title); ?> </p>
                            <div class="socials">
                                <a href="#" title="carmelito1"><i class="ion ion-social-facebook"></i></a>
                                <a href="#" title="carmelito2"><i class="ion ion-social-twitter"></i></a>
                                <a href="#" title="carmelito3"><i class="ion ion-social-googleplus-outline"></i></a>
                                <a href="#" title="carmelito4"><i class="ion ion-social-instagram-outline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
             
<?php
                   endif; 
        endfor;
?>
            </div>
        </div>   
    </div>
</div>

<?php        
    endfor;
?>

<?php //get_template_part( 'sub-header' ); ?>
<?php //get_template_part( 'features' ); ?>

<?php //get_template_part( 'features2' ); ?>
<?php //get_template_part( 'features3' ); ?>

        <div class="sep-border"></div> <!-- separator -->
<?php //get_template_part( 'features4' ); ?>


<?php //get_template_part( 'downloads' ); ?>
        

        
        
        
        
        
        

    </div> <!-- .stickem-container end -->
<?php get_footer(); ?>
    
  