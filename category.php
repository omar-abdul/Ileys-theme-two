<?php 

		get_header('trading');
	
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container ileys-post-container">
                <div class="search-container">
                    <?php get_search_form(); ?>
                
                </div>

            <div class='category-info'>
                <h2> <?php single_cat_title();?></h2>
                <p><?php echo  category_description();?></p>
            </div>
			<?php
			if ( have_posts() ) :
				$index = 0;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					?>
					<div class="bounce" style="animation-delay:0.<?php echo $index?>s">
					<?php get_template_part( 'template-parts/content','products');?>
					</div>
					<?php
					$index++;

				endwhile;


			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>

			<div class="pages mx-auto">
				<?php the_posts_pagination();?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer();?>
