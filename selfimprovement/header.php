<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package SelfImprovement
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> &raquo; Feed" href="<?php bloginfo('rss2_url'); ?>" >
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="site-title"><a href="<?php echo esc_url( bloginfo('url') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div class="site-description">
<?php echo bloginfo( 'description' ); ?></div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'selfimprovement' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'selfimprovement' ); ?>"><?php _e( 'Skip to content', 'selfimprovement' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
	echo "<!--";
	echo "Home " . is_home() .PHP_EOL;
	echo "Frontpage ". is_front_page() .PHP_EOL;
	echo "Category " . is_category() .PHP_EOL;
	echo "Archive " . is_archive() .PHP_EOL;
	echo "Single " . is_single() .PHP_EOL;
	echo "Objekt? " . print_r($wps_this_subdomain->name);
	echo "-->";
?>