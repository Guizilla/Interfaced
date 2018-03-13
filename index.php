<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
