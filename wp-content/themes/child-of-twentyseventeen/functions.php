<?php
/**
 * Child of Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Child_Of_Twenty_Seventeen
 * @since 1.0
 */


/*
 * This adds the parent stylesheet to the child theme. The parent theme's stylesheet isn't included in a child theme automatically.
 * The hook used is 'wp_enqueue_scripts' which is used to add both js and css files (ie both scripts and styles) into either the header or the footer.
 * The hook 'wp_enqueue_scripts' is used in conjunction with the wp_enqueue_scripts() and wp_enqueue_styles() functions as below.
 * You should always use this method to add scripts and styles. Documentation here: https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
add_action( 'wp_enqueue_scripts', 'child_of_twentyseventeen_enqueue_styles' );
function child_of_twentyseventeen_enqueue_styles() {
	// wp_enqueue_style() documentation: https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
