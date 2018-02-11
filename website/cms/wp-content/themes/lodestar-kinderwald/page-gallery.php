<?php
/**
 * Template Name: Galerie
 *
 * @package Lodestar
 */

get_header(); ?>
<div class="wrap">
	<div class="content-area">
		<main id="main" class="site-main" role="main">
            <h1 class="gallery-title"><?php echo get_the_title(wp_get_post_parent_id(get_the_ID()) ? wp_get_post_parent_id(get_the_ID()) : get_the_ID()); ?> </h1>

            <?php wp_nav_menu(array(
                'theme_location' => 'gallery',
                'menu_id' => 'gallery',
            ) );

            while ( have_posts() ) : the_post();

				get_template_part( 'components/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.

            wp_nav_menu(array(
                'theme_location' => 'gallery',
                'menu_id' => 'gallery',
            ) );

            ?>

		</main>
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();
