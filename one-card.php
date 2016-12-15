<?php
/**
 * lists ONE image as a card
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro one-card.php
 * @since Labadi Appro 1.0
 */
?>

<?php $attachments = get_children(
            array(
                'numberposts'      => 1,
                'post_parent'      => get_the_ID(),
                'post_status'      => 'inherit',
                'post_type'        => 'attachment',
                'post_mime_type'   => 'image',
                'order'            => 'DESC',
                'orderby'          => 'modified', 
                'fields'           => 'ids'
                )
            );
?>



    <?php 
        $total = count($attachments);        
//  echo ('<p>' . get_the_ID() . ' - ' . $total .'</p>');
        if ($total > 0) :
            $attachment_id = array_pop( $attachments );
            if (wp_attachment_is_image($attachment_id) ):  
                $image = wp_prepare_attachment_for_js($attachment_id);
        ?>
	<div class="project-card columns small-12 medium-6 medium-clear-2"> 
        <?php echo ('<!--  -' . count($attachments)  . ' -->'); ?>
        <a href="<?php echo( get_permalink( get_the_ID() ) ); ?>" class="fancybox" data-fancybox-group="images_gallery">
            <figure class="img-hover">
                <div class="label">
                    <?php echo (the_title()); ?>
                </div>
                	<img src="<?php echo ($image['sizes']['medium']['url']); ?>" alt="<?php echo ($image['title']); ?>" />
                <div class="img-hover-masked"></div>
                <div class="cover">
					<h4><?php echo (the_title()); ?></h4>
				</div>
            </figure>
        </a>
    </div>       
    <?php
            endif;
            
        else:
            $subpages = get_pages(array(
                'child_of' => get_the_ID(),
                'parent' => get_the_ID(),
                'sort_order' => 'DESC',
                'sort_column' => 'rand'
            ));     
                   
            $x = count($subpages);
            if ($x > 0) {
                $post = $subpages[0];
                get_template_part( 'one-card-top' ); 
            }
        endif;
    ?>
    






	

