<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<div class="post-header">
	<h1 class="post-title"><?php printf( __( 'Search Results for: %s', 'interfaced' ), get_search_query() ); ?></h1>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'navigation' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
	<div class="post">
		<h2 class="post-title"><?php _e( 'Nothing Found', 'interfaced' ); ?></h2>
	</div>
	<div class="post-content">
		<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'interfaced' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</article>
<?php endif; ?>
<?php get_footer(); ?>
