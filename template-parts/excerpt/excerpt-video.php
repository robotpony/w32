<?php
/**
 * Show the appropriate content for the Video post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage w32
 * @since  w32 1.0
 */

$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	w32_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	w32_print_first_instance_of_block( 'core/embed', $content );
} else {
	w32_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
