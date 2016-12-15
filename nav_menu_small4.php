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
        <!-- Main Navigation  -->
        
<button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>

        
<div class="fw header">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2">
            </div>
            <div class="col-xs-6 col-sm-10">
                <div class="nav-toggle">
                    <div id="navicon">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="nav-wrapper">
                    <nav id="nav-collapse">
                       <!-- Collect the nav links, forms, and other content for toggling -->
            <?php wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'navicon-container',
                'container_id'      => 'navicon-container',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div><!--End of container-->
</div><!--End of full-width-container-->
