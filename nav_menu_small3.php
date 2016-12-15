 <?php
/**
 * The template for displaying the navigation menu
 *
 * Displays all of the main menu items in bootstap 3
 *
 * @package WordPress
 * @subpackage labadi_appro nav_menu_small2 .php
 * @since Labadi Appro 1.0
 */
?>
 <!-- #navigation -->
    <nav id="navigation" class="navbar-no-logo-xs stickem">           
        <div class="container">
            <div class="navicon-toggle">
                <button  type="button" class="navicon collapsed" data-toggle="collapse" data-target="#navicon-collapse-1">
                    &#9776;
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>    
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'navicon collapse',
                'container_id'      => 'navicon-collapse-1',
                'menu_class'        => 'navicon-wrapper navicon',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            ); ?>
        </div>
        <!-- .container end -->
    </nav>
