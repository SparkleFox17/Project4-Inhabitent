<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

<div id="front-page-journal">
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
</div>

<section id="adventures"  class="container adventures ">
    <h2>Latest Adventures</h2>
        <ul>
<?php
//LOOP FOR ADVENTURES
$args = array(
    'category_name' => 'adventures',
    'posts_per_page' => -1,
    'order' => 'ASC',
);

$your_query = new WP_Query($args);

while ($your_query->have_posts()) : $your_query->the_post();
get_template_part( 'template-parts/content','adventures' ); 
endwhile;

			?>

</ul>                 
    <p class="see-more">
        <a href="https://tent.academy.red/adventures/" class="btn">More Adventures</a>
    </p>
</section>

			<!--<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php 
				if("Adventures" === the_category()){
					get_template_part( 'template-parts/content' ); 
				}
				?>

			<?php endwhile; ?>-->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>











	

