<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boldly_Built
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="home-expertise">
			<?php if ( get_field('home_section_title_') ) : ?>
				<h2><?php the_field('home_section_title_')?></h2>
			<?php endif ?>
		</section>


	</main><!-- #main -->

<?php
get_footer();
