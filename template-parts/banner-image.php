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
		<?php 
        the_title( '<h1 class="entry-title screen-reader-text">', '</h1>' );
        if ( function_exists('get_field') ) :
			if ( get_field('banner-title') ) : ?>
				<p class='banner-title'><?php echo get_field('banner-title') ?></p>
			<?php endif; 
        endif;
        ?>
		</section>
    </header><!-- .entry-header -->
