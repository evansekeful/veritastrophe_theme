<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package veritastrophe
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function veritastrophe_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! isveritastropheingular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_activeveritastropheidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'veritastrophe_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function veritastrophe_pingback_header() {
	if ( isveritastropheingular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'veritastrophe_pingback_header' );
