<div class="container py-3">
    <div class="card flex-row flex-wrap">
        <div class="card-header border-0 bg-image-contain" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')">
            
        </div>
        <div class="card-block p-2">
            <h4 class="card-title"><?php the_title();?></h4>
            <p class="card-text"><?php the_content();?></p>
             <?php $page= get_page_by_title('Get free quote'); ?>
            <a href="<?php echo esc_url(get_page_link($page->ID)) ;?>" class="btn btn-primary">Request Quote</a>
        </div>
        <div class="w-100"></div>

    </div>
    </div><!--container-->
