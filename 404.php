<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage labadi_appro 404.php
 * @since Labadi 2.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" style="padding:100px;">
				<header class="page-header">
					<h2 class="page-title ">
						<?php 
							_e( "Olé! You are way ahead!<br /> I guess I am yet to create that project page...", 'labadi_appro' ); 
						?>
					</h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Perhaps this may help?', 'labadi_appro' ); ?></p>

					<? //php get_search_form(); ?>
					<?php wp_list_pages('title_li=<h4>' . __('This is how the site looks like...') . '</h4>' ); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
