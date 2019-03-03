<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<li>
	<div class="thumbnail-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>                          
	</div>
	<div class="post-info-wrapper">
		<?php if ( 'post' === get_post_type() ) : ?>
		<!--<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div>--><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>                      
	</div>
	<a class="black-btn" href="<?php esc_url( get_permalink() ) ?>">Read Entry</a>
</li>