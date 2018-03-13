<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
	<nav id="navigation" class="navigation" role="navigation">
		<div class="nav-previous"><?php next_posts_link(sprintf( __( '%s older', 'interfaced' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
		<div class="nav-next"><?php previous_posts_link(sprintf( __( 'newer %s', 'interfaced' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
	</nav>
<?php } else {?>
	<nav id="navigation" class="navigation" role="navigation">
		<div class="nav-previous"><?phpphp previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ); ?></div>
		<div class="nav-next"><?phpphp next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ); ?></div>
	</nav>
<?php } ?>
