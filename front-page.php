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

		<!-- banner image -->
		<?php get_template_part( 'template-parts/banner', 'image' ); ?>

		<!-- page wrapper: start-->
		<div class='page-wrapper'>

			<section id="home-expertise">
				<?php if ( get_field('home_section_title_') ) : ?>
					<h2><?php the_field('home_section_title_')?></h2>
				<?php endif ?>

			</section>

			<section id="home-feature">
				<?php if ( get_field('featured_title') ) : ?>
					<h2><?php the_field('featured_title')?></h2>
				<?php endif ?>

				<?php if ( get_field('project_title') ) : ?>
					<h3><?php the_field('project_title')?></h3>
				<?php endif ?>

				<?php if ( get_field('project_description') ) : ?>
					<p><?php the_field('project_description')?></p>
				<?php endif ?>

				<?php 
					$image = get_field('project_image');
					$size = 'large'; 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>

				<?php if ( get_field('live_site_link') ) : ?>
					<a href="<?php the_field('live_site_link')?>" target=”_blank”>Live Site</a>
				<?php endif ?>
			</section>
		
		</div><!-- page wrapper: end-->

			<!-- calling contact us template part -->
			<?php get_template_part( 'template-parts/contact-us' ); ?>
			
		
	</main><!-- #main -->

<?php
get_footer();
