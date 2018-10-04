<?php 

/*
######

Template Name:Archives Brand
#####
*/
?>
<?php 
	if (!is_home() && is_front_page()){
		get_header();
	} 
	else {
		get_header('single');
	}


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '
                <p id="breadcrumbs">','</p>
                ' );
                }
            ?>
			<div class="container-fluid ileys-post-container">
			<div class="search-container">
			<?php get_search_form(); ?>

			</div>

				<div class="row align-items-center justify-content-start">
					<div class="col-12 col-md-8   offset-md-2   my-3 cat-content">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content' ,'products');

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );
	
				endif;
			?>
			</div>
			
		</div>
		<div class="pages mx-auto"><?php

				the_posts_pagination();
				?></div>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();?>
