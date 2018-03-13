<div id="primary" class="widget-area">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<?php dynamic_sidebar( 'primary-widget-area' ); ?>
<?php endif; ?>
</div>
<div id="secondary" class="widget-area">
	<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
	<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
<?php endif; ?>
</div>
</main>
<footer>
	<div id="footer" class="widget-area">
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
		<?php dynamic_sidebar( 'footer-widget-area' ); ?>
	<?php endif; ?>
</div>
<?php if ( has_nav_menu( 'footer-menu' ) ) { wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); } ?>
<div id="copyright">
	<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'interfaced' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
</div>
<?php wp_footer(); ?>
</footer>
</body>
</html>
