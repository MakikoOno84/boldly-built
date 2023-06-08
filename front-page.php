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
			<?php if ( have_rows('what_we_do') ) : ?>
						<?php while ( have_rows('what_we_do') ) : the_row(); ?>

							<?php 	$serviceTitle 		= get_sub_field('service_title');
									$serviceDescription = get_sub_field('service_description');
									$service1	  		= get_sub_field('service_1');
									$service1Img		= get_sub_field('service_1_image'); 
									$service2	  		= get_sub_field('service_2');
									$service2Img	 	= get_sub_field('service_2_image'); 
									$service3	  		= get_sub_field('service_3');
									$service3Img	  	= get_sub_field('service_3_image'); 
									$serviceMoreInfo	= get_sub_field('service_more_info')?>

								<h2><?php echo $serviceTitle ?></h2>
								<p><?php echo $serviceDescription ?></p>
								<div class="service-wrapper">
									<div class='service-block animate__animated'>
										<?php echo wp_get_attachment_image( $service1Img, 'medium') ?>
										<p><?php echo $service1 ?></p>
									</div>

									<div class='service-block animate__animated change-delay-200ms'>
										<?php echo wp_get_attachment_image( $service2Img, 'medium') ?>
										<p><?php echo $service2 ?></p>
									</div>

									<div class='service-block animate__animated change-delay-400ms'>
										<?php echo wp_get_attachment_image( $service3Img, 'medium') ?>
										<p><?php echo $service3 ?></p>
									</div>
								</div>

								<a class="expertise-button animate__animated"href="<?php echo $serviceMoreInfo ?>">More Info</a>

						<?php endwhile ?>
					<?php endif ?>

			</section>

			<section id="home-feature">
				<?php if ( get_field('featured_title') ) : ?>
					<h2 class="animate__animated"><?php the_field('featured_title')?></h2>
				<?php endif ?>

				<div class="feature-wrapper">
					<?php 
						$image = get_field('project_image');
						$size = 'large'; 
						if( $image ) {
							echo wp_get_attachment_image( $image, $size ,'',array('class'=>'animate__animated'));
						}
					?>
					<div class="descr-box animate__animated change-delay-200ms">
						<?php if ( get_field('project_title') ) : ?>
							<h3><?php the_field('project_title')?></h3>
						<?php endif ?>

						<?php if ( get_field('project_description') ) : ?>
							<p><?php the_field('project_description')?></p>
						<?php endif ?>

						<?php if ( get_field('live_site_link') ) : ?>
							<a href="<?php the_field('live_site_link')?>" target=”_blank”>Live Site</a>
						<?php endif ?>
					</div>	
				</div>
			</section>
		</div><!-- page wrapper: end-->
			<!-- calling contact us template part -->
			<?php get_template_part( 'template-parts/contact-us' ); ?>
	</main><!-- #main -->

<?php
get_footer();
