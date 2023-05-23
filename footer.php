<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boldly_Built
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-menu-wrapper">
			<nav class='footer-menu footer-top'>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-top',
						'menu_id'        => 'Footer - top',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<div class="footer-border"></div>
			<div class="footer-bottom">
				<p class='copyright'><?php esc_html_e('Copyright &copy; 2023 Boldy Built Media','boldly-built');?></p>

				<nav class='footer-menu bottom'>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-bottom',
							'menu_id'        => 'Footer - bottom',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
