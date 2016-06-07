<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package tricitiesphonerepair
 */

// Register Bootstrap Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */

if ( ! function_exists( 'tricitiesphonerepair_setup' ) ):
function tricitiesphonerepair_setup() {

	// Available for translation
	load_theme_textdomain( 'tricitiesphonerepair', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	//register_nav_menu( 'primary', __( 'Primary Menu', 'tricitiesphonerepair' ) );
	register_nav_menus( 
		array(
		'main_menu' => __( 'Main Menu', 'tricitiesphonerepair' ),
		) );

	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif;
add_action( 'after_setup_theme', 'tricitiesphonerepair_setup' );


/* SIDEBARS & WIDGET AREAS
 ========================== */
function tricitiesphonerepair_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'tricitiesphonerepair' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'tricitiesphonerepair_widgets_init' );


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function tricitiesphonerepair_scripts() {
	// theme style.css file
	wp_enqueue_style( 'tricitiesphonerepair-style', get_stylesheet_uri() );
	//jquery
	wp_enqueue_script('jquery');
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );

	}

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}


	// vendor scripts
//	wp_enqueue_script(
//		'vendor',
//		get_template_directory_uri() . '/assets/vendor/newscript.js',
//		array('jquery')
//	);
	// theme scripts
//	wp_enqueue_script(
//		'theme-init',
//		get_template_directory_uri() . '/assets/theme.js',
//		array('jquery')
//	);
}    
add_action('wp_enqueue_scripts', 'tricitiesphonerepair_scripts');
add_action('wp_enqueue_scripts', 'wpt_register_js');


/* MENUS 
===========================
function register_my_menus() {
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu' ),'footer-menu' => __( 'Footer Menu' ) )
	);
}
add_action( 'init', 'register_my_menus' );

	register_nav_menus( 
		array( 'main-menu' => __( 'Main Menu', 'tricitiesphonerepair' ),
			) ); */

/* MISC EXTRAS
 ========================== */
 
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Optional Customizations
// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides
include('inc/functions/customizations.php');