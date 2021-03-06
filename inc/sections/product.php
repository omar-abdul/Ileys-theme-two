<?php
$cat = get_theme_mod('ileys_category_setting',0);


$args = array(
    'post_type'=>'brands',
    'posts_per_page'=>4
);
$posts = get_posts($args);

if($cat !==0):

?>
<section class="products bg-light-yellow">

    <div class=" bounce-content p-5">

    <div id="myLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class='lightbox-content'>
                 <img id='lightbox-img' src="">
                <div class="lightbox-caption"><p id='lightbox-caption'></p></div>
                </div>
            </div>

        <div class="container"> 
            <div class="row align-items-center">

                <div class="col-12 col-md-6">
                    <div class="brand-carousel owl-carousel owl-theme text-center">
                    <?php foreach ($posts as $post):?>

                
                        <div class="item">
                            <a href="<?php echo get_the_post_thumbnail_url($post->ID,'full')?>" data-toggle="lightbox"  data-max-width='600' data-gallery="gallery"> <?php 
                            $arr = array(
                                'id'=>'img_'.$post->ID,
                                'class'=>' img-fluid img-thumbnail '
                            ) ;
                            
                            ?><div class="bg-image-contain" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID ,array(200,200)); ?>')" title="<?php echo the_excerpt();?>"> 
                            </div>
                            
                            </a>                
                        </div>

                        
                    
                        <?php endforeach;?>
                        <?php wp_reset_postdata();?>

                    </div>
                </div><!--col-->

                <div class="col-12 col-md-6">
                    <div class="section-title my-auto ml-auto">

                    <h1><?php echo __('Our Brands', 'ileystheme')?></h1>
                    </div><!--title -->
                    
                </div><!--col-->                
            </div><!--row-->



            <div class="row  text-center p-5">
                <div class="col">
                <a href="<?php echo esc_url(get_theme_mod('product_button_url'));?>" class="btn btn-danger"><?php esc_html_e('View More Products','ileystheme') ?></a>

                </div>
            </div> 
        </div><!--container-->

    </div><!--main-content-->


</section>
<?php endif; ?>