<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PlusLife
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pluslife' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<!-- Static navbar -->
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="primary-menu">
		        <span class="sr-only"><?php esc_html_e( 'Primary Menu', 'pluslife' ); ?></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div><!-- .navbar-header -->

		    <div id="navbar" class="navbar-collapse collapse">
					<?php 
		        wp_nav_menu(array(
		        	'theme_location' 	=> 'primary', 
		        	'menu_id' 				=> 'primary-menu',
		        	'depth'           => 4,
		          'menu_class'  		=> 'nav navbar-nav',
		          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
		          'walker'          => new wp_bootstrap_navwalker()
		        ));
		      ?>
		    </div><!--/.nav-collapse -->
		  </div><!--/.container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #masthead -->

	<?php if ( get_header_image()  && ( is_home() ) ) : ?>
		<div class="header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
		</div>
	<?php endif; // Header image check. ?>

	<?php if ( has_post_thumbnail() != (is_home() || is_search() ) ) : ?>
		<div class="featured-image">
			<?php the_post_thumbnail('large-thumb'); ?>
		</div>
	<?php endif; // Featured image check. ?>

	<div id="content" class="site-content row">
