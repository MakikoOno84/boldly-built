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
        if ( function_exists('get_field') ) :
			if ( get_field('banner-title') ) : ?>
				<p class='banner-title'><?php echo get_field('banner-title') ?></p>
			<?php endif; 
            if ( get_field('banner-message') ) : ?>
                <p class='banner-text'><?php echo get_field('banner-text') ?></p>
            <?php endif; 
        endif;
        ?>
		</section>
    </header><!-- .entry-header -->
