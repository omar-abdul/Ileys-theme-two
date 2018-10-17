<?php

/*
Header template  to display on front page
@package ileys
*/


?>


<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php  bloginfo('charset')?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="<?php bloginfo('description');?>">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url')?>">
    <?php endif;?>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/style.css" /> -->
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="container-fluid front-page-container">




    <header class="p-3 px-md-4 mb-3  main-page  bg-glass-white fixed-top" id="front-header">
      <img src="<?php echo get_theme_mod('ileys_logo')?>" class="img-responsive " style="max-width:300px" >
      <nav class="site-nav">

        <?php wp_nav_menu(array(
            'theme_location'=>'primary', 
            'container'=>false,
            'walker'=> new Walker_Nav_Primary()
            ));?>
      </nav>
      <div class="icon top2">
                <div class="hamburger">
                </div>
        </div>
    </header>


