<?php
/**
 * Template part for displaying banner image
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boldly_Built
 */

?>
	<header class="entry-header banner" id="entry-header">
		<?php boldly_built_post_thumbnail(); ?>
		<section class="hero-text"> 
		<?php the_title( '<h1 class="entry-title banner-title">', '</h1>' );
			if ( get_field('short_description') ) : ?>
				<p class='banner-text'><?php echo get_field('short_description') ?></p>
			<?php endif; ?>
		</section>
	</header><!-- .entry-header -->
