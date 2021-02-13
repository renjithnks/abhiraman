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
	function abhiraman_child_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'abhiraman_child-columns-overlap',
				'label' => esc_html__( 'Overlap', 'abhiraman_child' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'abhiraman_child-border',
				'label' => esc_html__( 'Borders', 'abhiraman_child' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'abhiraman_child-border',
				'label' => esc_html__( 'Borders', 'abhiraman_child' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'abhiraman_child-border',
				'label' => esc_html__( 'Borders', 'abhiraman_child' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'abhiraman_child-image-frame',
				'label' => esc_html__( 'Frame', 'abhiraman_child' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'abhiraman_child-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'abhiraman_child' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'abhiraman_child-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'abhiraman_child' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'abhiraman_child-border',
				'label' => esc_html__( 'Borders', 'abhiraman_child' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'abhiraman_child-separator-thick',
				'label' => esc_html__( 'Thick', 'abhiraman_child' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'abhiraman_child-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'abhiraman_child' ),
			)
		);
	}
	add_action( 'init', 'abhiraman_child_register_block_styles' );
}
