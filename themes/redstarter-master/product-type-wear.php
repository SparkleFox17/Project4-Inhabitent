<?php
/**
 * The template for displaying all pages.
 * Template Name: Product Type wear
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="page-header" style="text-align: center;">
   				
   				<h1 class="page-title">Wear</h1>
    		
    		</header> 

			<div class="product-grid">

				<?php


				$products_IDs = new WP_Query( array(
					
						'product_type'=>'wear',
				
					'post_type' => 'product',
					'posts_per_page' => -1,
				));

				while ($products_IDs->have_posts() ) : $products_IDs->the_post();
	
				
				get_template_part( 'template-parts/content', 'shop' );

				endwhile;

				?>
			</div>

	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

