<?php

function accessible_super_classic_setup() {
	load_theme_textdomain( 'accessible-super-classic', get_template_directory() . '/languages' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'accessible-super-classic' ),
		)
	);

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'accessible_super_classic_setup' );

function accessible_super_classic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'accessible-super-classic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Ana içeriğin yanında görüntülenen bileşen alanı.', 'accessible-super-classic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'accessible_super_classic_widgets_init' );

function accessible_super_classic_enqueue_styles() {
	wp_enqueue_style(
		'accessible-super-classic-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'accessible_super_classic_enqueue_styles' );
