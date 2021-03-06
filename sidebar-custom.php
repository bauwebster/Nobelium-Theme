<?php
/**
 * The sidebar containing the custom widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

if ( ! is_active_sidebar( 'sidebar-default' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-default' ); ?>
</aside><!-- #secondary -->
