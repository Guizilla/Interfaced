<?php get_header(); ?>
<article id="post-0" class="post not-found">
	<div class="post-header">
		<h1 class="post-title"><?php _e( 'Not Found', 'interfaced' ); ?></h1>
	</div>
	<div class="post-content">
		<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'interfaced' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</article>
<?php get_footer(); ?>
