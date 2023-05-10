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

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/banner', 'image' ); 
			get_template_part( 'template-parts/content', 'page' );

			if ( function_exists('get_field') ) :
				if ( get_field('message')) :
					?>
					<p><?php echo the_field('message'); ?></p>
					<?php
				endif;
				if ( get_field('image')) :
					$image = get_field('image');
					?>
					<img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>">
					<?php
				endif;
				if ( get_field('banner-message')) :
					?>
					<h2><?php echo the_field('banner-message'); ?></h2>
					<?php
				endif;
				if ( get_field('banner-paragraph')) :
					?>
					<p><?php echo the_field('banner-paragraph'); ?></p>
					<?php
				endif;
			endif;
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
		<!-- calling contact us template part -->
		<?php get_template_part( 'template-parts/contact-us' ); ?>
	</main><!-- #main -->

<?php
get_footer();
