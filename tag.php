<?php get_header(); ?>
<div class="post-header">
	<h1 class="post-title"><?php _e( 'Tag Archives: ', 'interfaced' ); ?><?php single_tag_title(); ?></h1>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'navigation' ); ?>
<?php get_footer(); ?>
