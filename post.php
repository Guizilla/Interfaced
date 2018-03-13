<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-header">
		<?php if ( is_singular() ) { ?><h1 class="post-title">
		<?php } else { ?><h2 class="post-title"><?php } ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php if ( is_singular() ) { ?></h1>
			<?php } else { ?></h2><?php } ?>
			<?php edit_post_link(); ?>
			<?php if ( !is_search() ) { ?>
				<div class="post-meta">
					<span class="author vcard"><?php the_author_posts_link(); ?></span>
					<span class="meta-sep"> | </span>
					<span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
				</div>
			<?php } ?>
		</div>

		<?php if ( is_archive() || is_search() ) { ?>
			<div class="post-summary">
				<?php the_excerpt(); ?>
				<?php if( is_search() ) { ?>
					<div class="post-links">
						<?php wp_link_pages(); ?>
					</div>
				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="post-content">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
				<div class="post-links">
					<?php wp_link_pages(); ?>
				</div>
			</div>
		<?php } ?>

		<?php if ( !is_search() ) { ?>
			<div class="post-footer">
				<span class="cat-links"><?php _e( 'Categories: ', 'interfaced' ); ?><?php the_category( ', ' ); ?></span>
				<span class="meta-sep">|</span>
				<span class="tag-links"><?php the_tags(); ?></span>
				<?php if ( has_post_format() ) { ?>
					<span class="meta-sep">|</span> <span class="post-format"><?php echo get_post_format_string(); ?></span>
				<?php } ?>
				<?php if ( comments_open() ) { ?>
					<span class="meta-sep">|</span> <span class="comments-link"><a href="<?php get_comments_link() ?>"><?php sprintf( __( 'Comments', 'interfaced' ) ) ?></a></span>
				<?php } ?>
			</div>
		<?php } ?>
	</article>
