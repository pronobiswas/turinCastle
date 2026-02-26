<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

// &&&&&&&& add theme support &&&&&&&&&
// function child_theme_setup() {
//     add_theme_support( 'custom-logo' );
//     add_theme_support( 'post-thumbnails' );
//     add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'child_theme_setup', 5 );



// function mytheme_register_menus() {
//     register_nav_menus(
//         array(
//             'primary-menu' => __( 'Primary Menu', 'astra-child' ),
//             'footer-menu'  => __( 'Footer Menu', 'astra-child' ),
//         )
//     );
// }
// add_action( 'init', 'mytheme_register_menus' );




/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'astra-child-fonts-css', get_stylesheet_directory_uri() . '/fonts.css', array(),
     CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'),
     CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
     
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

// =====load script js====
// ===== Load GSAP and ScrollTrigger from CDN ===== 
function child_enqueue_gsap_scripts() { 
	wp_enqueue_script( 
		'gsap-core', 
		'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', 
		array(),
		'3.13.0', 
		true
		);
	wp_enqueue_script( 
		'gsap-scrolltrigger', 
		'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap-core'), 
		'3.13.0',
		true 
	); 
    wp_enqueue_script( 
		'gsap-SplitText', 
		'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js', array('gsap-core'), 
		'3.13.0',
		true 
	); 
} 
 add_action( 'wp_enqueue_scripts', 'child_enqueue_gsap_scripts' );
// ===== Load Child Theme Scripts =====
function child_enqueue_scripts() {
    wp_enqueue_script(
        'child-custom-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(), 
        CHILD_THEME_ASTRA_CHILD_VERSION,
        true
    );

    wp_enqueue_script(
        'child-home-script-js',
        get_stylesheet_directory_uri() . '/assets/js/home-script.js',
        array('gsap-core','gsap-scrolltrigger'), 
        CHILD_THEME_ASTRA_CHILD_VERSION,
        true
    ); 
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts' );
// =====load script js====

// ===dashboard content customizer====
require get_stylesheet_directory() . '/inc/customizer/banner-section.php';
require get_stylesheet_directory() . '/inc/customizer/scroll-content.php';
// ===dashboard content customizer====

