 <?php
/**
 * The template for displaying the navigation menu
 *
 * Displays all of the main menu items in bootstap 3
 *
 * @package WordPress
 * @subpackage labadi_appro nav_menu_small2.php
 * @since Labadi Appro 1.0
 */
?>

 <!-- #navigation -->
  
    
        <nav id="navigation" class="nav">            
            <button type="button" class="min-nav fa fa-bars fa-5x" style="color:transparent !important!;"></button>
            <button type="button" class="min-nav-close" style="color:transparent !important!;"></button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'nav-menu',
                    'container_id'      => 'menu-collapse-1',
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                ); ?>
            <!-- .container end -->
            
        </nav>
        <!-- #navigation end -->
        <script>
$( ".min-nav-close" ).hide();
    $( ".min-nav-menu" ).hide();
    $( ".min-nav" ).click(function() {
        $( ".min-nav-menu" ).slideToggle( "slow", function() {
            $( ".min-nav" ).hide();
            $( ".min-nav-close" ).show();
        });
    });

    $( ".min-nav-close" ).click(function() {
        $( ".min-nav-menu" ).slideToggle( "slow", function() {
            $( ".min-nav-close" ).hide();
            $( ".min-nav" ).show();
        });
    
    </script>