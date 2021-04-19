<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage w32
 * @since  w32 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since  w32 1.0
	 *
	 * @return void
	 */
	function w32_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'twentytwentyone-columns-overlap',
				'label' => esc_html__( 'Overlap', 'w32' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'w32' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'w32' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'w32' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'twentytwentyone-image-frame',
				'label' => esc_html__( 'Frame', 'w32' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'twentytwentyone-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'w32' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'twentytwentyone-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'w32' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'twentytwentyone-border',
				'label' => esc_html__( 'Borders', 'w32' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'twentytwentyone-separator-thick',
				'label' => esc_html__( 'Thick', 'w32' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'twentytwentyone-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'w32' ),
			)
		);
	}
	add_action( 'init', 'w32_register_block_styles' );
}
