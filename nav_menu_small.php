 <?php
/**
 * The template for displaying ONLY the small navigation menu 
 *
 * Displays all of the main menu items in bootstap 3
 *
 * @package WordPress
 * @subpackage labadi_appro nav_menu_small.php
 * @since Labadi Appro 1.5
 */
?>
  
        <nav id="nav-togg-container" class="navbar-no-logo-xs" 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="fa fa-bars fa-5x">
                    <button type="button" class="nav-togg-container collapsed" data-toggle="collapse" data-target="#nav-togg">
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
                    'container_class'   => 'nav-togg-container collapse',
                    'container_id'      => 'nav-togg',
                    'menu_class'        => 'navbar-no-logo-xs nav-lines navicon',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                ); ?>
        </nav>