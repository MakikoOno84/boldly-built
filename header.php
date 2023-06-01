<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boldly_Built
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'boldly-built' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-menu-wrapper">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<div class="site-menu">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'project-nc' ); ?></span>
						<?php get_template_part('images/hamburger', 'menu-thin'); ?>
						<path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
						</svg>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header',
							'menu_id'        => 'Header Menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<button type='button' class='open-modal'>Contact</button>
				<!-- modal -->
				<section class="modal">
					<span class="modal-backdrop"></span>
					<section class="modal-content">
					<section class="modal-header">
      					<h2 class="modal-title">Let's chat!</h2><button class="close-modal">&times</button>
    				</section>
						<section class="modal-body">
							<?php
								echo do_shortcode( '[contact-form-7 id="97" title="contact us form"]' );
							?>
						</section>
					</section>
				</section>
			</div>
		</div>
	</header><!-- #masthead -->
