<?php
/**
 * @package WordPress
 * @subpackage labadi_appro sidebar.php
 * @since Labadi Appro 2.0 
 *
 * 
 */

?>
	<div id="sidebar" role="complementary" style="padding:100px;">
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) :
			?>

			<?php if ( is_404() ) : /* If this is a 404 page */ ?>
			<?php elseif ( is_category() ) : /* If this is a category archive */ ?>
				<h3><?php /* translators: %s: category name */
					printf( __( 'You are currently browsing the archives for the %s category.' ),
						single_cat_title( '', false )
					);
				?></h3>

			<?php elseif ( is_day() ) : /* If this is a daily archive */ ?>
				<h3><?php /* translators: 1: site link, 2: archive date */
					printf( __( 'You are currently browsing the %1$s portfolio for the day %2$s.' ),
						sprintf( '<a href="%1$s/">%2$s</a>', get_bloginfo( 'url' ), get_bloginfo( 'name' ) ),
						get_the_time( __( 'l, F jS, Y' ) )
					);
				?></h3>

			<?php elseif ( is_month() ) : /* If this is a monthly archive */ ?>
				<h3><?php /* translators: 1: site link, 2: archive month */
					printf( __( 'You are currently browsing the %1$s portfolio for %2$s.' ),
						sprintf( '<a href="%1$s/">%2$s</a>', get_bloginfo( 'url' ), get_bloginfo( 'name' ) ),
						get_the_time( __( 'F, Y' ) )
					);
				?></h3>

			<?php elseif ( is_year() ) : /* If this is a yearly archive */ ?>
				<h3><?php /* translators: 1: site link, 2: archive year */
					printf( __( 'You are currently browsing the %1$s portfolio for the year %2$s.' ),
						sprintf( '<a href="%1$s/">%2$s</a>', get_bloginfo( 'url' ), get_bloginfo( 'name' ) ),
						get_the_time( 'Y' )
					);
				?></h3>

			<?php elseif ( is_search() ) : /* If this is a search result */ ?>
				<h2><?php /* translators: 1: site link, 2: search query */
					printf( __( 'I&#8217;m so sorry. Apprarently %1$s&#8217;s Portfolio doesn&#8217;t have a page with the name <strong>&#8216;%2$s&#8217;</strong>.' ),
						sprintf( '<a href="%1$s/">%2$s</a>', get_bloginfo( 'url' ), get_bloginfo( 'name' ) ),
						esc_html( get_search_query() )
					);
				?></h2>

			<?php elseif ( isset( $_GET['paged'] ) && ! empty( $_GET['paged'] ) ) : /* If this set is paginated */ ?>
				<h3><?php /* translators: %s: site link */
					printf( __( 'You are currently browsing the %s portfolio.' ),
						sprintf( '<a href="%1$s/">%2$s</a>', get_bloginfo( 'url' ), get_bloginfo( 'name' ) )
					);
				?></h3>

			<?php endif; ?>

		
		<?php endif; ?>
		
		<?php wp_list_pages('title_li=<h4>' . __('This is how the site looks like...') . '</h4>' ); ?>
		
		<ul>
			<?php if ( is_home() || is_page() ) { /* If this is the frontpage */ ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; /* ! dynamic_sidebar() */ ?>
		</ul>
	</div>
