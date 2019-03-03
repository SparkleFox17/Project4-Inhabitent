<?php
/**
 * The template for displaying all pages.
 * Template Name: Journal
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		//LOOP FOR JOURNAL
		$args = array(
			'category_name' => 'journal',
			'posts_per_page' => 3,
			'order' => 'ASC',
		);

		$your_query = new WP_Query($args);

		while ($your_query->have_posts()) : $your_query->the_post();
		get_template_part( 'template-parts/content', 'journals' ); 
		endwhile;
		//END OF JOURNAL LOOP
		?>
	
		</main><!-- #main -->
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
