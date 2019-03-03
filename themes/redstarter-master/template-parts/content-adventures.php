<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
 <li>
	<div class="story-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
		<div class="story-info">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<a class="white-btn" href="<?php esc_url( get_permalink() ); ?>">Read More</a>
		</div>
	</div>
</li>


