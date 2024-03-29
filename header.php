<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SBA
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sba-theme'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div>
					<?php
					if (has_custom_logo()) :
						the_custom_logo();
					else :
					?>
						<a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home" aria-current="page"><img width="1600" height="1600" src="<?php echo get_template_directory_uri(); ?>/img/logo-sba-header.png" class="custom-logo" alt="Stade Bagnérais Athlétisme" sizes="(max-width: 1600px) 100vw, 1600px"></a>
					<?php endif;
					?>
				</div>
				<div>
					<?php
					if (is_front_page() /*&& is_home()*/) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$sba_theme_description = get_bloginfo('description', 'display');
					if ($sba_theme_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $sba_theme_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'sba-theme'); ?></button>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				));
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
		<div id="content" class="site-content">