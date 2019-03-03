<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'redstarter-master-featured-image' );
		?>

		<header class="entry-header" style="background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url(<?php echo esc_url( $thumbnail[0] ); ?>) no-repeat center bottom;background-size: cover, cover;display: flex;align-items: center;justify-content: center;">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
