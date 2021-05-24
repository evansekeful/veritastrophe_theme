<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veritastrophe
 */

if ( ! is_activeveritastropheidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamicveritastropheidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
