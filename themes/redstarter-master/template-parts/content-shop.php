<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?> 


<div class="product-grid-item">
    <div class="thumbnail-wrapper">

		<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ) ); ?>                      
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</a>
    </div>
                  
	<div class="product-info">
		<h2 class="entry-title"> <?php the_title(); ?>  </h2>                     
		<span class="price"><?php //the_post_price(); ?></span>
    </div>
</div>