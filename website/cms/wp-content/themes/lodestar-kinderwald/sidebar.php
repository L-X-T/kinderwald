<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lodestar
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<a class="kw_logo_cnt" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_klein.png"></a>
</aside><!-- #secondary -->
