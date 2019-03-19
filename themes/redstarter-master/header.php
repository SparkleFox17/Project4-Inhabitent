<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" id="font-awesome-cdn-css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.0" type="text/css" media="all">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			<?php 
				$home=‘’;
				if( is_home() || is_front_page() ) : 
				$home="reverse-header";
			 endif; ?>
			<header id="masthead" class="site-header <?php echo $home; ?>" role="banner">
				<div class="container">
				<div class="site-branding">
					<div class="logo">
						<h1 class="site-title "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					
					</div>			
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="header-search">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<fieldset>
					<a href="#" class="search-toggle" aria-hidden="true">
						<i class="fa fa-search"></i>
					</a>
					<label>
						<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
					</label>
					<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
				</fieldset>
				</form>
				</div>
		</nav><!-- #site-navigation -->
	</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content"> 
