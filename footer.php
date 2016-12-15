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
 	<div class="wrap" style="margin-bottom: 50px;">
 		<div class="container">
 			<div class="row">
 				<div class="span3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
 					<?php endif; ?>
				</div>
			</div>
 		</div>
 	</div>
</div>

<?php 
	wp_reset_postdata();
	if ( wp_get_post_parent_id( get_the_ID() ) ): 
?>
	<a href="<?php echo( get_permalink( wp_get_post_parent_id( get_the_ID() ) ) ); ?>" id="go-back" class="cd-is-visible cd-fade-out">Go Back</a>
<?php endif; ?>

<a href="#0" id="pro-scroll-top" class="cd-is-visible cd-fade-out">Scroll to top</a>

 <!--//footer-->
<?php wp_footer();?>
 
</body>
</html>