<?php get_header(); ?>
<div class="post-header">
	<h1 class="post-title"><?php _e( 'Category Archives: ', 'interfaced' ); ?><?php single_cat_title(); ?></h1>
	<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'navigation' ); ?>
<?php get_footer(); ?>
