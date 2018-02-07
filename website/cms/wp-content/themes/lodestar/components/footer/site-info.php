<div class="site-info">
	<div class="wrap">
				<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
				<?php get_template_part( 'components/header/content', 'top' ); ?>
				<?php // Add Woocommerce Cart to header if Woocommerce exists
					if ( class_exists( 'WooCommerce' ) ) {
						lodestar_woocommerce_header_cart();
					}
				?>
			</div>
</div><!-- .site-info -->
