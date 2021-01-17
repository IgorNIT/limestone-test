<?php
/**
 * Limestone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Limestone
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}


	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
function limestone_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Limestone, use a find and replace
     * to change 'limestone' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'limestone', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'main-menu' => esc_html__( 'Primary', 'limestone' ),
            'footer_menu_1' => esc_html__( 'Footer menu 1', 'limestone' ),
            'footer_menu_2' => esc_html__( 'Footer menu 2', 'limestone' ),
            'footer_menu_3' => esc_html__( 'Footer menu 3', 'limestone' ),
        )
    );

}

add_action( 'after_setup_theme', 'limestone_setup' );



/**
 * Enqueue scripts and styles.
 */
function limestone_scripts() {

    //--- CSS  ---

    // Style.css
    wp_enqueue_style( 'limestone-style', get_stylesheet_uri(), '', THEME_VERSION );

    // Header css
    wp_enqueue_style( 'header-css', get_template_directory_uri() . '/build/css/header.css', '', THEME_VERSION);

    // Footer css
    wp_enqueue_style( 'footer-css', get_template_directory_uri() . '/build/css/footer.css', '', THEME_VERSION);

    // Front page css
    wp_enqueue_style( 'front-page-css', get_template_directory_uri() . '/build/css/front-page.css', '', THEME_VERSION);

    // --- JS  ---

    // Main JS
    wp_enqueue_script( 'main', get_template_directory_uri() . '/build/js/main.js', array('jquery'), THEME_VERSION, true );




    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // Disable gutenberg css
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'limestone_scripts' );

/**
 *  Google fonts (Open-Sans and Montserrat)
 */
function limestone_include_google_fonts()
{
    echo '<link rel="preconnect" href="https://fonts.gstatic.com">';
    echo '<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">';
}

add_action('wp_head', 'limestone_include_google_fonts');


/**
 * Bootstrap nav walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
