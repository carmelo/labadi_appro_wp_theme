<?php
/**
 * The template for displaying a page
 *
 * Displays all of the page and everything after the "site-content" div.
 *
 * @package WordPress
 * @subpackage labadi_appro front-page.php
 * @since Labadi Appro 1.0
 */

      get_header(); ?>
<? // php get_sidebar(); ?>
<!-- #header -->
    <header id="header">
        <!-- .header-overlay -->
        <div class="header-overlay">
            <!-- .container -->
            <div class="container">
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-md-offset-1">
                        <figure class="header-img animation" data-animation="animation-fade-in-left">
                            
                            <img src="<?php bloginfo('url');?>/wp-content//uploads/2016/07/IMG_4102.jpg" alt="Header Image" />
                        </figure>
                    </div>              
                    <div class="col-sm-7 col-md-5 col-md-offset-1">
                        <div class="header-text animation" data-animation="animation-fade-in-right">
                            <div class="header-logo">
                                <img src="images/logo.png" alt="Logo" /> <!-- site logo -->
                            </div>
                            <h1 class="header-heading">carmelo</h1>
                            <div class="header-content">
                                <p>....</p>
                            </div>
                            <div class="header-button">
                                <a href="page.html" class="link">Learn More</a>
                                <span class="header-button-sep"></span>
                                <a href="#downloads" class="btn-custom smooth-scroll">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end --> 
        </div>
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
                    <h2>Best app for <strong>Schedule</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation<br>ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                
                <!-- .row -->
                <div class="row">
                    
                    <div class="col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <figure class="img-overlay img-center-front">
                            <div class="img-left">
                                <img src="images/content/landing/feature-1-left.png" alt="Image Left" class="animation" data-animation="animation-fade-in-left">
                            </div>
                            <div class="img-center">
                                <img src="images/content/landing/feature-1-center.png" alt="Image Center" class="animation" data-animation="animation-fade-in" data-delay="400">
                            </div>
                            <div class="img-right">
                                <img src="images/content/landing/feature-1-right.png" alt="Image Right" class="animation" data-animation="animation-fade-in-right">
                            </div>
                        </figure>
                    </div>
                    
                </div>
                <!-- .row end -->
                
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

<?php get_template_part( 'sub-header' ); ?>
<?php get_template_part( 'features' ); ?>

<?php get_template_part( 'features2' ); ?>
<?php get_template_part( 'features3' ); ?>

        <div class="sep-border"></div> <!-- separator -->
<?php get_template_part( 'features4' ); ?>


<?php get_template_part( 'downloads' ); ?>
        

        
        
        
        
        
        

    </div> <!-- .stickem-container end -->
<?php get_footer(); ?>
    
  