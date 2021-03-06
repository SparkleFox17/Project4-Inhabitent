<?php
/**
 * The main template file.
 * Template Name: Front Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">

		
		

		<?php if ( have_posts() ) : ?>

				<section class="home-hero">
					<img src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
				</section>


			<section class="product-info container">
				<h2>Shop Stuff</h2>
				<div class="product-type-blocks">
					<div class="product-type-block-wrapper">
						<img src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/images/do.svg" alt="Do">
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<p><a href="http://localhost:8888/wordpress/product-type/do/" class="btn">Do Stuff</a></p>
					</div>
					<div class="product-type-block-wrapper">
						<img src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/images/eat.svg" alt="Eat">
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<p><a href="http://localhost:8888/wordpress/product-type/eat/" class="btn">Eat Stuff</a></p>
					</div>
					<div class="product-type-block-wrapper">
						<img src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/images/sleep.svg" alt="Sleep">
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<p><a href="http://localhost:8888/wordpress/product-type/sleep/" class="btn">Sleep Stuff</a></p>
					</div>
					<div class="product-type-block-wrapper">
						<img src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/images/wear.svg" alt="Wear">
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<p><a href="http://localhost:8888/wordpress/product-type/wear/" class="btn">Wear Stuff</a></p>
					</div>
				</div>
			</section>

			<section class="latest-entries">
				<div class="container">
					<h2>Inhabitent Journal</h2>
					<ul>
						<?php
							//LOOP FOR JOURNAL
							$args = array(
								'category_name' => 'journal',
								'posts_per_page' => 3,
								'order' => 'ASC',
							);

							$your_query = new WP_Query($args);

							while ($your_query->have_posts()) : $your_query->the_post();
							get_template_part( 'template-parts/content', 'journal' ); 
							endwhile;
							//END OF JOURNAL LOOP
						?>
					</ul>
				</div>
			</section>


			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>





	

