<?php

function interfaced_setup()
{
	if ( ! isset( $content_width ) ) {
		$content_width = 1024;
	}
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-logo', array(
		'height'      => 512,
		'width'       => 512,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
	) );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-header', array(
		'default-image'          => '',
		'width'                  => 23,
		'height'                 => 23,
		'flex-height'            => true,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	) );

	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'interfaced' ),
		'additional-menu' => __( 'Additional Menu', 'interfaced'),
		'other-menu' => __( 'Other Menu', 'interfaced'),
		'footer-menu' => __( 'Footer Menu', 'interfaced') )
	);

	add_editor_style( array( 'assets/editor-style.css' ) );
	$starter_content = array(
		'widgets' => array(
			'header-widget-area' => array(
				'search',
				'text_about',
			),
			'primary-widget-area' => array(
				'search',
				'text_about',
			),
			'secondary-widget-area' => array(
				'search',
				'text_about',
			),
			'footer-widget-area' => array(
				'search',
				'text_about',
			),
		)
	);
	$starter_content = apply_filters( 'interfaced_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'interfaced_setup' );




add_filter( 'the_title', 'interfaced_title' );
function interfaced_title( $title )
{
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_action( 'wp_enqueue_scripts', 'interfaced_load_scripts' );
function interfaced_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}





// Register Widget Areas
add_action( 'widgets_init', 'interfaced_widgets_init' );
function interfaced_widgets_init()
{
	// Header - Widget Area
	register_sidebar( array (
		'name' => __( 'Header Widget Area', 'interfaced' ),
		'id' => 'header-widget-area',
		'description' => 'Add widgets in this area to display them on header.',
		'before_widget' => '<div id="widget-%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Primary - Widget Area
	register_sidebar( array (
		'name' => __( 'Primary Widget Area', 'interfaced' ),
		'id' => 'primary-widget-area',
		'description' => 'Add widgets in this area to display them on primary area.',
		'before_widget' => '<div id="widget-%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Secondary - Widget Area
	register_sidebar( array (
		'name' => __( 'Secondary Widget Area', 'interfaced' ),
		'id' => 'secondary-widget-area',
		'description' => 'Add widgets in this area to display them on secondary area.',
		'before_widget' => '<div id="widget-%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	// Footer - Widget Area
	register_sidebar( array (
		'name' => __( 'Footer Widget Area', 'interfaced' ),
		'id' => 'footer-widget-area',
		'description' => 'Add widgets in this area to display them on footer.',
		'before_widget' => '<div id="widget-%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}







// Reply Comment Form
add_action( 'comment_form_before', 'interfaced_enqueue_comment_reply_script' );
function interfaced_enqueue_comment_reply_script() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
function interfaced_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php
}
