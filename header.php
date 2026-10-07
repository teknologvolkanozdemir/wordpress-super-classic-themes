<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'İçeriğe Atla', 'accessible-super-classic' ); ?></a>
<?php wp_body_open(); ?>
<header class="site-header" role="banner">
	<div class="site-branding">
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php if ( get_bloginfo( 'description' ) ) : ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		<?php endif; ?>
	</div>
	<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Ana Menü', 'accessible-super-classic' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
				'container'      => false,
				'fallback_cb'    => false,
			)
		);
		?>
	</nav>
</header>
