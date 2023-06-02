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

			/* banner image */
			get_template_part( 'template-parts/banner', 'image' ); 

			?>
			<!-- page wrapper: start-->
			<div class='page-wrapper'>
			<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			if ( function_exists('get_field') ) :
				if ( get_field('message')) :
					?>
					<p class="about-message"><?php echo the_field('message'); ?></p>
					<?php
				endif;
				?><article class="about-article"><?php

					if ( get_field('about-message')) :
						?>
						<div class="floating-top">
						<h2 class="fadeInUpTrigger"><?php echo the_field('about-message'); ?></h2>
						<?php
					endif;
					if ( get_field('about-paragraph')) :
						?>
						<hr class="about-bar fadeInUpTrigger">
						<p class="fadeInUpTrigger"><?php echo the_field('about-paragraph'); ?></p>
					</div>
						<?php
					endif;

					if ( get_field('image')) :
						$image = get_field('image');
						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							?><div class="floating-bottom">
								<div class="fadeInUpTrigger"><?php
								echo wp_get_attachment_image( $image, $size );
								?></div>
							</div><?php
						}
					endif;
					
				?></article><?php
			endif;
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endwhile; // End of the loop.
		?>
			</div><!-- page wrapper: end-->		
		<!-- calling contact us template part -->
		<?php get_template_part( 'template-parts/contact-us' ); ?>

	</main><!-- #main -->

<?php
get_footer();
