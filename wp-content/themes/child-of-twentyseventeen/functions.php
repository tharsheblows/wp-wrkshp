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

// This cache busts the stylesheets.
add_filter( 'style_loader_src', 'tkwp_cache_bust', 20000, 2 );
function tkwp_cache_bust( $src, $handle ) {
	if ( strpos( $src, 'style.css' ) !== false ) {
		$src = remove_query_arg( array( 'ver' ), $src );
		$src = add_query_arg( 'ver', rand( 1, 1000 ), $src ); // this is a very hacky way of doing it but should be sufficient here. Do not do this on anything real.
		return esc_url( $src );
	}
	return $src;
}
