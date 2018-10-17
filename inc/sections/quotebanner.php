<?php
/**
 * 
 * Banner with blockquote section
 * 
 */



?>
<?php if(get_theme_mod('ileys_ceo_message')):?>
<section class="banner-quote bg-dark-blue p-5">
    <div class=" container text-center ">
        <blockquote class="quotes">
            <h3><?php echo esc_html__(get_theme_mod('ileys_ceo_message')); ?></h3>
             
        </blockquote>
        <h5><?php echo esc_html__(get_theme_mod('ileys_ceo_message_author'));?><h5>
    </div>    
</section><!--banner-quote-->
<?php endif;?>

