<div class="site-branding">
	<div class="wrap">

		<?php lodestar_the_custom_logo(); ?>

		<?php if ( !is_front_page() && !is_home() ) : ; ?>
			<h1 class="site-title"><?php the_title(); ?></h1>
		<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
