<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-header">
		<h1 class="post-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
	</div>
	<div class="post-content">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<?php the_content(); ?>
		<div class="post-links"><?php wp_link_pages(); ?></div>
	</div>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
