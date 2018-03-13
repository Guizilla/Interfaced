<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; ?>
<div class="post-footer">
	<?php get_template_part( 'navigation' ); ?>
</div>
<?php get_footer(); ?>
