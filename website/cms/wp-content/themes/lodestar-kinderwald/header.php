<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lodestar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lodestar' ); ?></a>

    <?php if (is_front_page() && empty($_COOKIE['intro_was_shown'])) : ?>
    <div class="kw_intro_container">
        <div class="kw_intro left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waldsonne-links.jpg">
        </div><div class="kw_intro right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/waldsonne-rechts.jpg">
        </div>
    </div>
    <?php endif; ?>

    <header id="masthead" class="site-header" role="banner">

		<div class="header-top">
			<div class="wrap">
				<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
				<?php get_template_part( 'components/header/content', 'top' ); ?>
			</div>
		</div><!-- .header-top -->

		<?php if (!is_front_page()) get_template_part( 'components/header/header', 'image' ); ?>

	</header>

	<div id="content" class="site-content">
