<?php
/**
 * heyns_icecream functions and definitions
 *
 * @package heyns_icecream
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'heyns_icecream_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function heyns_icecream_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'heyns_icecream' ),
	) );
}
endif; // heyns_icecream_setup
add_action( 'after_setup_theme', 'heyns_icecream_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function heyns_icecream_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'heyns_icecream' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	// WIDGETIZING THE FOOTER
	register_sidebar( array(
		'name' => 'Footer Column 1',
		'id' => 'footer-column-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<div class="column size1of1 med_size1of3 u-leftAlign">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Column 2',
		'id' => 'footer-column-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<div class="column size1of1 med_size1of3 med_u-centerAlign">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Column 3',
		'id' => 'footer-column-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<div class="column size1of1 med_size1of3 med_u-rightAlign">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Front Page Announcement Banner',
		'id' => 'announcement-banner',
		'description' => 'Appears optionally at the top of the page for important announcements. Keep this as short as possible! No more than 12-18 words.',
		'before_widget' => '<div class="preHeader visible container"><div class="row u-centerAlign"><h4>',
		'after_widget' => '</h4></div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'heyns_icecream_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function heyns_icecream_scripts() {
	wp_enqueue_style( 'heyns_icecream-style', get_stylesheet_uri() );
    
	wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'heyns_icecream_scripts' );

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

