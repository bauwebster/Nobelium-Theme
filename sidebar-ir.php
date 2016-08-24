<?php
/**
 * The sidebar containing the IR widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

if ( ! is_active_sidebar( 'sidebar-ir' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-ir' ); ?>
</aside><!-- #secondary -->
