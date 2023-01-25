<?php
/**
 * Pennywalet Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pennywalet
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PENNYWALET_VERSION', '1.0.0' );
define( 'CHILD_THEME_PENNYWALET_TEXTDOMAIN', 'pennywalet' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'pennywalet-theme-style', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PENNYWALET_VERSION, 'all' );

    wp_enqueue_style( 'pennywalet-main-style', get_stylesheet_directory_uri() . '/assets/css/pennywallet-main-style.css', array('astra-theme-css'), CHILD_THEME_PENNYWALET_VERSION, 'all' );
    
    wp_enqueue_style( 'pennywalet-responsive-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array('astra-theme-css', 'pennywalet-main-style'), CHILD_THEME_PENNYWALET_VERSION, 'all' );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 9999 );

add_filter( 'use_block_editor_for_post', '__return_false' );