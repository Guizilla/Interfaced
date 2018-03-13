<?php get_header(); ?>
<div class="post-header">
	<h1 class="post-title"><?php
	if ( is_day() ) { printf( __( 'Daily Archives: %s', 'interfaced' ), get_the_time( get_option( 'date_format' ) ) ); }
	elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'interfaced' ), get_the_time( 'F Y' ) ); }
	elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'interfaced' ), get_the_time( 'Y' ) ); }
	else { _e( 'Archives', 'interfaced' ); }
	?></h1>
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'post' ); ?>
<?php get_template_part( 'navigation' ); ?>
<?php get_footer(); ?>
