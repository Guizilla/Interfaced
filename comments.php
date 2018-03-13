<?php if ( 'comments.' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<div id="comments">
	<?php
	if ( have_comments() ) :
		if ( ! empty( $comments_by_type['comment'] ) ) :
			?>
			<div id="comments-list" class="comments">
				<h3 class="comments-title"><?php comments_number(); ?></h3>
				<?php if ( get_comment_pages_count() > 1 ) : ?>
				<nav id="comments-navigation" class="comments-navigation" role="navigation">
					<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
				</nav>
			<?php endif; ?>
			<ul>
				<?php wp_list_comments( 'type=comment' ); ?>
			</ul>
			<?php if ( get_comment_pages_count() > 1 ) : ?>
			<nav id="comments-navigation" class="comments-navigation" role="navigation">
				<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
			</nav>
		<?php endif; ?>
	</div>
	<?php
endif;
if ( ! empty( $comments_by_type['pings'] ) ) :
	$ping_count = count( $comments_by_type['pings'] );
	?>
	<div id="trackbacks-list" class="comments">
		<h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'interfaced' ) : __( 'Trackback', 'interfaced' ) ); ?></h3>
		<ul>
			<?php wp_list_comments( 'type=pings&callback=interfaced_custom_pings' ); ?>
		</ul>
	</div>
	<?php
endif;
endif;
if ( comments_open() ) comment_form();
?>
</div>
