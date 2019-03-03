<?php
/**
 * The template for displaying all pages.
 * Template Name: Product Type
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=product-type' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
			endwhile;
			// reset post data (important!)
			wp_reset_postdata();
		?>

			<!--<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
