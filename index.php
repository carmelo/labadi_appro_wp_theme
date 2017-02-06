
<?php
/**
 * The main template file
 *
 * This is  a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage labadi_appro
 * @since Labadi Appro 2.0
 */

require('wp-blog-header.php');
require_once('wp-includes/template-loader.php');
include('/themes/appro/page.php');

      get_header();  ?>
	
	<?php 
		get_sidebar();  
	?>
	
	<?php get_footer(); ?>
