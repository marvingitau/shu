<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoe
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shoe' ); ?></a>

	<header id="masthead" class="site-header">
	<!-- site nav -->
		<div class="container-fluid">
			<div class="site-nav">
				<div class="row">
					<div class="col-md-1">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-11">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shoe' ); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-main',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'list-unstyled d-flex justify-content-end h-100 align-items-center text-capitalize shoe-nav',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
		

		
	</header><!-- #masthead -->
