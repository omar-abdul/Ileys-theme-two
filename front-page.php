<?php 

/*

Front page section of the website

*/
?>
<?php  get_header();
$ileys_theme_sections = array(  'slider','about', 'product', 'trading', 'counter','quotebanner','partners','promotional',  );  

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
    if(have_posts()):
            
        while ( have_posts() ) : the_post();?>
         <div>  <?php echo the_content();?></div><?php
        endwhile;
    endif;

        foreach($ileys_theme_sections as $sections){
            get_template_part('inc/sections/'.esc_attr($sections));
        }

        
    

}



get_footer();?>