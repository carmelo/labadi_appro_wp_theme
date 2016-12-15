 <?php
/**
 * The template for displaying the navigation menu
 *
 * Displays all of the main menu items in bootstap 3
 *
 * @package WordPress
 * @subpackage labadi_appro nav_menu.php
 * @since Labadi Appro 1.0
 */
?>

 <!-- #navigation -->
  
        <nav id="navigation" class="navbar navbar-default navbar-no-logo-xs stickem scrollspy">            
            <!-- .container -->
            <div class="container">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse-1">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <?php //if ( has_site_icon() && is_customize_preview() ) : ?>
                    <div class="navbar-brand">
                        <ul class="nav navbar-nav">
                            <li class="menu-item">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo( esc_url( get_site_icon_url( 50 ) ) ); ?>" alt="HOME" />
                                    Home
                                </a>
                            </li>
                        </ul>        
                    </div> <!-- site logo -->
                    <?php //endif; ?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'menu-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                ); ?>
                
            </div>
            <!-- .container end -->
            
        </nav>
        <!-- #navigation end -->
        <div id="spacer" class="padding-top20"></div>