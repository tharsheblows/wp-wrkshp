<?php
/*
Plugin Name:  Dysfunctionality
Description:  A plugin to illustrate various WordPress concepts. For demo purposes only.
Version:      1.0
Author:       JJ Jay
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

// Read all about best practices in making plugins here: https://developer.wordpress.org/plugins/the-basics/
// This one is for use in a workshop and was written to illustrate some basic concepts in WordPress.
// So please don't ever use it as a guide to writing a plugin.

/*
 * Add the Hooks:Filters and Hooks:Actions exercises below this.
 */









/*
 * These functions are for the "Adding JS and CSS files" exercises.
 * Uncomment (ie delete the // bit at the beginning of the line) add_action(...) to add the 'wp_enqueue_scripts' action
 */

// add_action( 'wp_enqueue_scripts', 'dysfunctional_enqueuing' ); // this adds the dysfunctional_enqueuing function to 'wp_enqueue_scripts'
function dysfunctional_enqueuing() {

	// register and enqueue the dysfunctional-1.css file with the handle 'dys-1', a dependency on the file with the handle 'dys-2' and a version of 1.0.0
	// what happens if you remove the dependency on dys-2? (change the version number to make sure you pick up the fresh version of the css file)
	wp_enqueue_style( 'dys-1', plugins_url( 'dysfunctional-1.css', __FILE__ ), array( 'dys-2' ), '1.0.0' );

	// register and enqueue the dysfunctional-2.css file with the handle 'dys-2', no dependencies and a version of 1.0.0
	wp_enqueue_style( 'dys-2', plugins_url( 'dysfunctional-2.css', __FILE__ ), array(), '1.0.0' );

	// register and enqueue the dysfunctional.js file with the handle 'dys-js', a dependency on jQuery and a version of 1.0.0
	// what happens if you remove the dependency to jquery? (change the version number to make sure you pick up the fresh version of the js file)
	wp_enqueue_script( 'dys-js', plugins_url( 'dysfunctional.js', __FILE__ ), array( 'jquery' ), '1.0.0' );
}

