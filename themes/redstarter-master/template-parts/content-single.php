<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
	<div class="product-image-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>            
	</div>
            
    <div class="product-content-wrapper">
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>            	
		</header><!-- .entry-header -->

        <div class="entry-content">
            <p class="price"><?php //the_price(); ?></p>
            		
			<p><?php the_content(); ?></p>
                  
			<div class="social-buttons">
			<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
			<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
			<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
			</div>
        </div><!-- .entry-content -->
    </div>
</article>