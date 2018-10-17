<?php if(get_theme_mod('ileys_dropdownpages')!=0):?>
<section class="about bg-dark-blue" id="about">

    <div class="container about-container bounce-content "> 

        <div class="row  p-5">
            <div class="col-12 col-md-6  my-auto">
                <div class="section-title">
                <h1><?php echo __('About', 'ileystheme')?></h1>

                </div>

            </div><!--col-->
            <div class="col-12 col-md-6">
                    <?php $page = get_post(get_theme_mod('ileys_dropdownpages')); ?>

                   

                    <div class="excerpt">
                        <p> 
                    <?php if($page): ?>
                        <?php setup_postdata($post = $page);?>

                        <?php the_excerpt();
                    
                        wp_reset_postdata();
                        ?>
                        <?php endif; ?>
                        </p>
                    <a href="<?php echo esc_url(get_permalink($page->ID));?>" class="btn btn-danger"><?php esc_html_e('Read More','ileystheme') ?></a>
                    </div><!--excerpt -->
                
            </div><!--col-->
        </div><!--row -->
    </div><!--container -->
</section>
<?php endif;?>