<?php 
$cat = get_theme_mod('ileys_trading_dropdowncat',0);


$args = array(
    'post_type'=>'trading',
    'posts_per_page'=>5,
    
);
$posts = get_posts($args);


$category_slugs = array(

'building-materials',
'electric-supplies',
'water-section',
'paint',
'aluminium'

);




?>
<section id= "tradings" class="tradings">

<div class="container bounce-content"> 
        <div class="title text-center">
           <h2> <?php echo __(get_theme_mod('ileys_trading_title','Trading'));?></h2> 
        </div><!--title -->
        <div class="">
    <div class="row p-5">


<?php foreach($category_slugs as $slug):?>
        <div class=" col-12 col-md-4 img-wrap pb-3">
            
           
                <?php  $cat = get_term_by('slug',$slug,'category');
                
                if($cat){
                $cat_id = 'category'.'_'.$cat->term_id; # the function get_field() requires an id in the form category_19
                

                $image = get_field('image',$cat_id);
                $cat_link = get_category_link($cat->term_id);
                ?>  
                
                <a href="<?php echo esc_url($cat_link);?>" title="<?php echo esc_html__($cat->name);?>">
                    <div class="bg-image-contain" style="background-image:url(<?php echo $image['url']?>)">
                    
                     </div>
                      <span class="img-caption"><p><?php echo $cat->name;?></p></span>
                </a>
                <?php
                }
                
                ?>


                </div><!--col-sm-6 -->
        <?php endforeach; ?>
           
                <?php wp_reset_postdata();?>
       
        </div><!--row -->
    </div>
</div><!--container -->
</section>

