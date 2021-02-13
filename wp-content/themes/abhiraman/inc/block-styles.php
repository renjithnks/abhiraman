<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Abhiraman
 * @since Abhiraman 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Abhiraman 1.0
	 *
	 * @return void
	 */
	function abhiraman_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'abhiraman-columns-overlap',
				'label' => esc_html__( 'Overlap', 'abhiraman' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'abhiraman-border',
				'label' => esc_html__( 'Borders', 'abhiraman' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'abhiraman-border',
				'label' => esc_html__( 'Borders', 'abhiraman' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'abhiraman-border',
				'label' => esc_html__( 'Borders', 'abhiraman' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'abhiraman-image-frame',
				'label' => esc_html__( 'Frame', 'abhiraman' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'abhiraman-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'abhiraman' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'abhiraman-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'abhiraman' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'abhiraman-border',
				'label' => esc_html__( 'Borders', 'abhiraman' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'abhiraman-separator-thick',
				'label' => esc_html__( 'Thick', 'abhiraman' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'abhiraman-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'abhiraman' ),
			)
		);
	}
	add_action( 'init', 'abhiraman_register_block_styles' );
}
