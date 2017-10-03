<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Child_Of_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	// if there's no sidebar here, ignore this template
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
	// this gets all the widgets that were added in the sidebar widget area
	dynamic_sidebar( 'sidebar-1' );
	?>
	<!-- <img src="/wp-content/themes/twentyseventeen/assets/images/coffee.jpg" alt="decorative image added to sidebar" /> -->
</aside><!-- #secondary -->
