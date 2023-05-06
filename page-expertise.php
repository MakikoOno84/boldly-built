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
		<?php if ( have_rows('ux_research') ) : ?>
				<?php while ( have_rows('ux_research') ) : the_row(); ?>

					<?php $step = get_sub_field('step');
						$title = get_sub_field('title');
						$description = get_sub_field('description');
						$image = get_sub_field('image'); ?>

					<section class='<?php echo $title?>'>
						<p>0<?php echo $step?></p>
						<h3><?php echo $title?></h3>
						<p><?php echo $description?></p>
						<?php echo wp_get_attachment_image( $image, 'full')?>
					</section>
					
				<?php endwhile ?>
		<?php endif ?>
	</main><!-- #main -->

<?php
get_footer();
