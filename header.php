
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://rsms.me/inter/inter-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body <?php body_class(); ?>>
	<header>
		<div id="logo">
			<?php the_custom_logo(); ?>
		</div>
		<div id="site-title" class="site-title">
			<a href="<?php echo site_url(); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
		</div>
		<div id="site-description" class="site-description">
			<?php bloginfo( 'description' ); ?>
		</div>
		<?php get_search_form(); ?>
		<nav id="main-menu" role="navigation">
			<?php if ( has_nav_menu( 'main-menu' ) ) { wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); } ?>
			<div id="header" class="widget-area">
				<?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'header-widget-area' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		<div id="background-header">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		</div>
	</header>
<main>
