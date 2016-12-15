<?php
/**
 * lists all the images in a cards gallery, excluding the first image
 *
 * Displays all of the page and everything 
 *
 * @package WordPress
 * @subpackage labadi_appro cardsminusone.php
 * @since Labadi Appro 1.0
 */
?>

<?php $attachments = get_children(
            array(
                'numberposts'      => -1,
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


<div class="row" id="cards-minus-one">
    <?php 
        $total = count($attachments)  - 1;        
        // discard first attachment (minus one!)   
        $attachment_id = array_shift( $attachments );
        
        $per_line = 2;
        if ($total > 0) :
            $rows = (int)($total / $per_line);            
            $extra_row_elements = $total - ($per_line * $rows);
 // echo ('<h1> total ' . $total . '</h1>');
 // echo ('<h1> per_line ' . $per_line . '</h1>');
 // echo ('<h1> rows ' . $rows . '</h1>');
 // echo ('<h1> extra_row_elements ' . $extra_row_elements . '</h1>');

            if (($total % $per_line) != 0){
                $rows++;  
            } 
            for ($r = 0; $r < $rows; $r++ ):
                if ( (($r + 1) == $rows) && ($extra_row_elements != 0)) { 
                    $per_line = $extra_row_elements;
                }

                echo ('<!-- row ' . $r . ' of ' . $rows . ' -->');   
                for ( $x = 0; $x < $per_line; $x++ ):
                    $attachment_id = array_shift( $attachments );
                    if (wp_attachment_is_image($attachment_id) ):  
                        $image = wp_prepare_attachment_for_js($attachment_id);

                        echo ('<!-- card ' . $r . $x . '  -->'); 
    ?>
	<div class="project-card columns small-12 medium-6 medium-clear-2"> 
            <a>
                <figure class="img-hover">
                    <img src="<?php echo ($image['url']); ?>" alt="<?php echo ($image['title']); ?>" />
                    <div class="img-hover-masked"></div>
                    <div class="cover">
						<?php //echo ('<h4>' . $image['caption'] . '</h4>'); ?>
                        <br />
						<p class="narrative"><?php echo ($image['description']); ?></p>
					</div>
                </figure>
            </a>
    </div>
    <?php 
                        echo ('<!-- card ' . $r . $x . ' end -->');         
                    endif;
                endfor;               
                echo ('<!-- row ' . $r . ' end -->'); 
            endfor;
        endif;
    ?>
</div>    





	
