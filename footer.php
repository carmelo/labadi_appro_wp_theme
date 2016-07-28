<?php
/**
 * The template for displaying the footer
 *
 * Displays all the footer
 *
 * @package WordPress
 * @subpackage labadi_appro footer.php
 * @since Labadi Appro 1.0
 */
?>

<!--footer-->
<div id="footer">
 	<div class="wrap" style="margin-bottom: 64px;">
 		<div class="container">
 			<div class="row">
 				<div class="span3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
 					<?php endif; ?>
				</div>
 				<div class="span3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
 					<?php endif; ?>
				</div>
 				<div class="span3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3') ) : ?>
 					<?php endif; ?>
				</div>
 				<div class="span3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 4') ) : ?>
 					<?php endif; ?>
				</div>
			</div>
 		</div>
 	</div>
</div>
 <!--//footer-->
<?php wp_footer();?>
 
</body>
</html>