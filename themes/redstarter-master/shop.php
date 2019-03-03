<?php
/**
 * The template for displaying all pages.
 * Template Name: Shop
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
			<header class="page-header">
   				<h1 class="page-title">Shop Stuff</h1>
                <ul class="product-type-list">
                	<li>
                        <p><a href="http://localhost:8888/wordpress/product-type/do/">Do</a></p>
                    </li>
                    <li>
                        <p><a href="http://localhost:8888/wordpress/product-type/eat/">Eat</a></p>
                    </li>
                    <li>
                        <p><a href="http://localhost:8888/wordpress/product-type/sleep/">Sleep</a></p>
                    </li>
                    <li>
                        <p><a href="http://localhost:8888/wordpress/product-type/wear/">Wear</a></p>
                    </li>
                </ul>
            </header>

			<div class="product-grid">
				<?php

				$products_IDs = new WP_Query( array(
					'post_type' => 'product',
					'posts_per_page' => -1,
				));

				while ($products_IDs->have_posts() ) : $products_IDs->the_post();
				
				get_template_part( 'template-parts/content', 'shop' );

				endwhile;

				?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
