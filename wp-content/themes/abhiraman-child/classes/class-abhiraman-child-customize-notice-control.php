<?php
/**
 * Customize API: Abhiraman_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Abhiraman
 * @since Abhiraman 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Abhiraman 1.0
 *
 * @see WP_Customize_Control
 */
class Abhiraman_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Abhiraman 1.0
	 *
	 * @var string
	 */
	public $type = 'abhiraman_child-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since Abhiraman 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'abhiraman_child' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/abhiraman_child/#dark-mode-support', 'abhiraman_child' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'abhiraman_child' ); ?>
			</a></p>
		</div>
		<?php
	}
}
