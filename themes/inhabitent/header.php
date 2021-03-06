<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div id="nav-toggle" class="fixed-nav">
			<div class="header-container">
		

				<div class="site-branding-white">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent-white.svg" alt="inhabitent brand logo"></a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><img  src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg" alt="inhabitent brand logo"></a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
				
		
			<?php if (is_front_page() || is_page_template( 'page-about.php' ) || is_page_template( 'single-adventure.php' ) ): ?>

				<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php else: ?>

				<nav id="site-navigation" class="main-navigation main-nav-green" role="navigation">
				<?php endif; ?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<div id="header-search" class="header-search">
						<?php get_search_form(); ?>
					</div>
				</nav><!-- #site-navigation -->



			</div>
            </div>
			</header><!-- #masthead -->
		

			<div id="content" class="site-content">
				
