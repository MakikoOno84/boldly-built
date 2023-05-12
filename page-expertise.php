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

		<!-- technologies used -->
		<section id='technologies'>
			<?php if ( function_exists('have_rows') ) : ?>
				<?php if ( have_rows('tech_used') ) : ?>
					<?php while ( have_rows('tech_used') ) : the_row(); ?>

						<?php 	$groupHeading = get_sub_field('group_heading');
								$techOne 	  = get_sub_field('tech_one');
								$techTwo	  = get_sub_field('tech_two');
								$techThree 	  = get_sub_field('tech_three'); ?>

							<h2><?php echo $groupHeading ?></h2>
							<p><?php echo $techOne ?></p>
							<p><?php echo $techTwo ?></p>
							<p><?php echo $techThree ?></p>

					<?php endwhile ?>
				<?php endif ?>
			<?php endif ?>
		<!-- end of technologies used -->
		</section>

		<!-- 4 essential steps to development section -->
		<section id='development-step'>

			<!-- outputting headings for the steps -->
			<?php if ( function_exists('have_rows') ) : ?>
				<?php if ( get_field('step_heading') ) : ?>
					<h2 class='step-heading'><?php the_field('step_heading')?></h2>
				<?php endif ?>
			<?php endif ?>

			<!-- looping the group field and outputting content for step 1 ux-research  -->
			<?php if ( function_exists('have_rows') ) : ?>
				<?php if ( have_rows('ux_research') ) : ?>
					<?php while ( have_rows('ux_research') ) : the_row(); ?>

						<?php 	$step = get_sub_field('step');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								$image = get_sub_field('image'); ?>

						<section class='step<?php echo $step?> steps'>
								<section>
									<div class='step-icon'><p>0<?php echo $step?></p></div>
									<h3 class='step-subheading'><?php echo $title?></h3>
									<p class='step-description'><?php echo $description?></p>
								</section>
								<?php echo wp_get_attachment_image( $image, 'full', '', array('class' => 'step-image attachment-full size-full')) ?>
						</section>

					<?php endwhile ?>
				<?php endif ?>
			<?php endif ?>

			<!-- looping the group field and outputting content for step 2 ux-strategy -->
			<?php if ( function_exists('have_rows') ) : ?>
				<?php if ( have_rows('ux_strategy') ) : ?>
					<?php while ( have_rows('ux_strategy') ) : the_row(); ?>

						<?php 	$step = get_sub_field('step');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								$image = get_sub_field('image'); ?>
						
						<section class='step<?php echo $step ?> steps'>
								<section>
									<div class='step-icon'><p>0<?php echo $step?></p></div>
									<h3 class='step-subheading'><?php echo $title?></h3>
									<p class='step-description'><?php echo $description?></p>
								</section>
								<?php echo wp_get_attachment_image( $image, 'full', '', array('class' => 'step-image attachment-full size-full')) ?>
						</section>

					<?php endwhile ?>
				<?php endif ?>
			<?php endif ?>

			<!-- looping the group field and outputting content for step 3 ux-design -->
			<?php if ( function_exists('have_rows') ) : ?>
				<?php if ( have_rows('ux_design') ) : ?>
					<?php while ( have_rows('ux_design') ) : the_row(); ?>

						<?php 	$step = get_sub_field('step');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								$image = get_sub_field('image'); ?>
						
						<section class='step<?php echo $step ?> steps'>
								<section>
									<div class='step-icon'><p>0<?php echo $step?></p></div>
									<h3 class='step-subheading'><?php echo $title?></h3>
									<p class='step-description'><?php echo $description?></p>
								</section>
								<?php echo wp_get_attachment_image( $image, 'full', '', array('class' => 'step-image attachment-full size-full')) ?>
						</section>

					<?php endwhile ?>
				<?php endif ?>
			<?php endif ?>

			<!-- looping the group field and outputting content for step 4 web-design -->
			<?php if ( function_exists('have_rows') ) : ?>
				<?php if ( have_rows('web_design') ) : ?>
					<?php while ( have_rows('web_design') ) : the_row(); ?>

						<?php 	$step = get_sub_field('step');
								$title = get_sub_field('title');
								$description = get_sub_field('description');
								$image = get_sub_field('image'); ?>
						
						<section class='step<?php echo $step ?> steps'>
								<section>
									<div class='step-icon'><p>0<?php echo $step?></p></div>
									<h3 class='step-subheading'><?php echo $title?></h3>
									<p class='step-description'><?php echo $description?></p>
								</section>
								<?php echo wp_get_attachment_image( $image, 'full', '', array('class' => 'step-image attachment-full size-full')) ?>
						</section>

					<?php endwhile ?>
				<?php endif ?>
			<?php endif ?>
		<!-- end of steps section-->
		</section>
		
		<!-- calling contact us template part -->
		<?php get_template_part( 'template-parts/contact-us' ); ?>
	</main><!-- #main -->

<?php
get_footer();
