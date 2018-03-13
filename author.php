<?php get_header(); ?>
<div class="post-header">
	<?php the_post(); ?>
	<h1 class="post-title author"><?php _e( 'Author Archives', 'interfaced' ); ?>: <?php the_author_link(); ?></h1>
	<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
	<?php rewind_posts(); ?>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'navigation' ); ?>
<?php get_footer(); ?>
